<?php
include "config.php";
include "scrap.php";
include "api.php";
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");
header("Content-Type: application/json");


// Função para registrar logs de acessos
function logAccess($requestUri) {
    $logEntry = date('Y-m-d H:i:s') . " - " . $requestUri . PHP_EOL;
    file_put_contents(__DIR__ . '/access.log', $logEntry, FILE_APPEND);
}

// Função para fornecer catálogo com filtragem por gênero
function getCatalog($genre = null) {
    include 'canais.php';
    //global $canais;
    
    // Filtrar os itens pelo gênero, se fornecido
    if ($genre) {
        $filteredMetas = array_filter($canais, function($meta) use ($genre) {
            return in_array($genre, $meta["genres"]);
        });
    } else {
        $filteredMetas = $canais;
    }

    $metas = array_map(function($meta) {
        return [
            "id" => $meta["id"],
            "type" => $meta["type"],
            "name" => $meta["name"],
            "poster" => $meta["poster"],
            "description" => $meta["description"],
            "genres" => $meta["genres"]
        ];
    }, array_values($filteredMetas));

    return ["metas" => $metas];
}

// Função para fornecer metadados
function getMeta($id) {
    include 'canais.php';
    //global $canais;
    
    foreach ($canais as $meta) {
        if ($meta['id'] == $id) {
            return ["meta" => $meta];
        }
    }
    
    return ["meta" => null];
}

// Função para fornecer streams
function getStreams($id) {
    include 'canais.php';
    //global $canais;

    foreach ($canais as $meta) {
        if ($meta['id'] == $id) {
            return $meta['streams'];
        }
    }

    return ["streams" => []];
}

// Define a subpasta onde o add-on está hospedado
// $subfolder = "/stremio_oneplay/";

// Captura a URI da requisição, removendo a subpasta
$requestUri = str_replace($subfolder, "", $_SERVER['REQUEST_URI']);
$requestUri = trim($requestUri, "/");

// Registrar o acesso
if ($debug) {
    logAccess($requestUri);
}
// obter user agent
$agent = $_SERVER['HTTP_USER_AGENT'];

// Função para redirecionar para a imagem correta
function redirectImage($imageName) {
    $path = __DIR__ . "/logos/" . basename($imageName);
    if (file_exists($path)) {
        header('Content-Type: ' . mime_content_type($path));
        readfile($path);
        exit;
    } else {
        http_response_code(404);
        echo json_encode(["error" => "Imagem não encontrada"]);
        exit;
    }
}

// Determina o recurso solicitado
try {
if ($requestUri === "manifest.json") {
    echo json_encode($manifest);
//} elseif (strpos($requestUri, "catalog/tv/OnePlay.json") === 0 || strpos($requestUri, "catalog/tv/OnePlay/genre=") === 0) {
} elseif (strpos($requestUri, "catalog/".$manifest['catalogs'][0]['type']."/".$manifest['catalogs'][0]['id'].".json") === 0 || strpos($requestUri, "catalog/".$manifest['catalogs'][0]['type']."/".$manifest['catalogs'][0]['id']."/genre=") === 0) {
    // Capturar o gênero diretamente da URL
    $genre = null;
    if (strpos($requestUri, "genre=") !== false) {
        $genre_ = urldecode(explode("genre=", $requestUri)[1] ?? null);
        $genre = str_replace(".json", "", $genre_);
        //logAccess($genre);
    }

    // Passar o gênero para a função getCatalog
    echo json_encode(getCatalog($genre));
} elseif (strpos($requestUri, "meta/tv/") === 0) {
    $id_ = urldecode(explode("/", $requestUri)[2] ?? null);
    $id = str_replace(".json", "", $id_);
    echo json_encode(getMeta($id));
} elseif (strpos($requestUri, "stream/tv/") === 0) {
    $id_ = urldecode(explode("/", $requestUri)[2] ?? null);
    $id = str_replace(".json", "", $id_);
    if ($id) {
        echo json_encode(["streams" => getStreams($id)]);
    } else {
        echo json_encode(["streams" => []]);
    }
} elseif (strpos($requestUri, "stream/movie/") === 0) {
    $id_ = urldecode(explode("/", $requestUri)[2] ?? null);
    $id = str_replace(".json", "", $id_);
    if ($id) {
        if (stripos($agent, 'web0s') !== false) {
            echo json_encode(streams_movie($id)); // redecanais
        } elseif (stripos($agent, 'tizen') !== false) {
            echo json_encode(streams_movie($id)); // redecanais
        } else {
            echo json_encode(movie_api($id)); // superflix api
        }  
    } else {
        echo json_encode(["streams" => []]);
    }
} elseif (strpos($requestUri, "stream/series/") === 0) {
    $id_ = urldecode(explode("/", $requestUri)[2] ?? null);
    $id = str_replace(".json", "", $id_);
    if ($id) {
        if (stripos($agent, 'webos') !== false) {
            echo json_encode(streams_series($id)); // redecanais
        } elseif (stripos($agent, 'tizen') !== false) {
            echo json_encode(streams_series($id)); // redecanais
        } else {
            echo json_encode(series_api($id)); // superflix api
        }  
    } else {
        echo json_encode(["streams" => []]);
    } 
} elseif (preg_match("/^logos\/.*\.(jpg|png)$/", $requestUri)) {
    $imageName = str_replace("logos/", "", $requestUri);
    redirectImage($imageName);
} else {
    http_response_code(404);
    echo json_encode(["error" => "Recurso não encontrado"]);
}
} catch (Exception $e) {
    echo json_encode(["error" => $e->getMessage()]);
}
?>
    