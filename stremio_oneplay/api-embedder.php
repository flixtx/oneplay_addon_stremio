<?php

function embedder_movie($imdb) {
    $stream = '';
    $cookie = '';
    try {
        $base = 'https://embedder.net';
        $url = $base . '/e/' . $imdb;
        $referer = $url;
        $parsedUrlR = parse_url($url);
        $r_ = $parsedUrlR['scheme'] . '://' . $parsedUrlR['host'] . '/';
        $USER_AGENT = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0';

        // Primeira requisição para obter a página inicial
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "User-Agent: $USER_AGENT"
        ]);
        $src = curl_exec($ch);
        curl_close($ch);

        // Extraindo informações do HTML
        preg_match('/class="server dropdown-item" data-id="(.*?)"/', $src, $idMatch);
        preg_match('/<div id="embed-player" data-movie-id="(.*?)">/', $src, $movieMatch);
        $id = $idMatch[1] ?? '';
        $movie = $movieMatch[1] ?? '';

        if (!$id || !$movie) {
            throw new Exception("ID ou Movie não encontrado");
        }

        // Segunda requisição para obter o link do stream
        $url2 = "{$r_}ajax/get_stream_link?id={$id}&movie={$movie}&is_init=false&captcha=&ref=";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url2);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "User-Agent: $USER_AGENT",
            "Referer: $referer"
        ]);
        $response = curl_exec($ch);
        curl_close($ch);
        $src = json_decode($response, true);
        $link = $src['data']['link'] ?? '';

        // Terceira requisição para obter a URL do vídeo
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $link);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "User-Agent: $USER_AGENT",
            "Referer: $referer"
        ]);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_exec($ch);
        $newUrl = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
        curl_close($ch);

        $parsedUrl = parse_url($newUrl);
        $origin = $parsedUrl['scheme'] . '://' . $parsedUrl['host'];
        $videoHash = basename($newUrl);

        // Quarta requisição para obter o cookie
        $url3 = $origin . '/video/' . $videoHash;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url3);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "User-Agent: $USER_AGENT",
            "Referer: $referer"
        ]);
        curl_setopt($ch, CURLOPT_HEADER, true);
        $response = curl_exec($ch);
        $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
        $headers = substr($response, 0, $header_size);
        preg_match_all('/Set-Cookie: (.*?);/i', $headers, $cookies);
        $cookie = http_build_query(array_reduce($cookies[1], function ($carry, $item) {
            list($key, $value) = explode('=', $item, 2);
            $carry[$key] = $value;
            return $carry;
        }, []));
        curl_close($ch);

        // Quinta requisição para obter o stream final
        $url4 = $origin . '/player/index.php?data=' . $videoHash . '&do=getVideo';
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url4);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
            'hash' => $videoHash,
            'r' => $r_
        ]));
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "User-Agent: $USER_AGENT",
            "Origin: $origin",
            "x-requested-with: XMLHttpRequest"
        ]);
        curl_setopt($ch, CURLOPT_COOKIE, urldecode($cookie));
        $response = curl_exec($ch);
        curl_close($ch);
        $src = json_decode($response, true);
        $stream = $src['videoSource'] ?? '';

    } catch (Exception $e) {
        // Você pode registrar o erro aqui se desejar
    }

    return [$stream, $cookie];
}

// list($stream, $cookie) = embedder_movie('tt3107288');
// echo $stream;


function embedder_serie($imdb, $season, $episode) {
    $stream = '';
    $cookie = '';
    try {
        if ($imdb && $season && $episode) {
            $base = 'https://embedder.net';
            $url = $base . '/e/' . $imdb . '/' . $season . '/' . $episode;
            $referer = $url;
            $parsedUrlR = parse_url($url);
            $r_ = $parsedUrlR['scheme'] . '://' . $parsedUrlR['host'] . '/';
            $USER_AGENT = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0';

            // Primeira requisição para obter a página inicial
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                "User-Agent: $USER_AGENT"
            ]);
            $src = curl_exec($ch);
            curl_close($ch);

            // Extraindo informações do HTML
            preg_match('/class="server dropdown-item" data-id="(.*?)"/', $src, $idMatch);
            preg_match('/<div id="embed-player" data-movie-id="(.*?)">/', $src, $movieMatch);
            $id = $idMatch[1] ?? '';
            $movie = $movieMatch[1] ?? '';

            if (!$id || !$movie) {
                throw new Exception("ID ou Movie não encontrado");
            }

            // Segunda requisição para obter o link do stream
            $url2 = "{$r_}ajax/get_stream_link?id={$id}&movie={$movie}&is_init=false&captcha=&ref=";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url2);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                "User-Agent: $USER_AGENT",
                "Referer: $referer"
            ]);
            $response = curl_exec($ch);
            curl_close($ch);
            $src = json_decode($response, true);
            $link = $src['data']['link'] ?? '';

            // Terceira requisição para obter a URL do vídeo
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $link);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                "User-Agent: $USER_AGENT",
                "Referer: $referer"
            ]);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_exec($ch);
            $newUrl = curl_getinfo($ch, CURLINFO_EFFECTIVE_URL);
            curl_close($ch);

            $parsedUrl = parse_url($newUrl);
            $origin = $parsedUrl['scheme'] . '://' . $parsedUrl['host'];
            $videoHash = basename($newUrl);

            // Quarta requisição para obter o cookie
            $url3 = $origin . '/video/' . $videoHash;
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url3);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                "User-Agent: $USER_AGENT",
                "Referer: $referer"
            ]);
            curl_setopt($ch, CURLOPT_HEADER, true);
            $response = curl_exec($ch);
            $header_size = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
            $headers = substr($response, 0, $header_size);
            preg_match_all('/Set-Cookie: (.*?);/i', $headers, $cookies);
            $cookie = http_build_query(array_reduce($cookies[1], function ($carry, $item) {
                list($key, $value) = explode('=', $item, 2);
                $carry[$key] = $value;
                return $carry;
            }, []));
            curl_close($ch);

            // Quinta requisição para obter o stream final
            $url4 = $origin . '/player/index.php?data=' . $videoHash . '&do=getVideo';
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url4);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query([
                'hash' => $videoHash,
                'r' => $r_
            ]));
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                "User-Agent: $USER_AGENT",
                "Origin: $origin",
                "x-requested-with: XMLHttpRequest"
            ]);
            curl_setopt($ch, CURLOPT_COOKIE, urldecode($cookie));
            $response = curl_exec($ch);
            curl_close($ch);
            $src = json_decode($response, true);
            $stream = $src['videoSource'] ?? '';
        }
    } catch (Exception $e) {
        // Você pode registrar o erro aqui se desejar
    }

    return [$stream, $cookie];
}

// list($stream, $cookie) = embedder_serie('tt3107288', '1', '1');
// echo $stream;


/// NOVA API:

function movie_api_embedder($imdb){
    list($stream, $cookie) = embedder_movie($imdb);
    $vod = [
        ['streams' => [
                [
                    "url" => $stream,
                    "name" => "OnePlay",
                    "description" => "Embedder API",
                    "behaviorHints" => [
                        "notWebReady" => true,
                        "proxyHeaders" => [
                            "request" => [
                                "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0",
                                "Cookie" => $cookie
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ];

    // Exibe a chave 'streams' com seu conteúdo
    $streams = ['streams' => $vod[0]['streams']];
    return $streams;
}

function series_api_embedder($id){
    $parts = explode(':', $id);
    $imdb_id = $parts[0]; 
    $season = $parts[1]; 
    $episode = $parts[2];
    list($stream, $cookie) = embedder_serie($imdb_id, $season, $episode);
    $vod = [
        ['streams' => [
                [
                    "url" => $stream,
                    "name" => "OnePlay",
                    "description" => "Embedder API",
                    "behaviorHints" => [
                        "notWebReady" => true,
                        "proxyHeaders" => [
                            "request" => [
                                "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:129.0) Gecko/20100101 Firefox/129.0",
                                "Cookie" => $cookie
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ];
    
    // Exibe a chave 'streams' com seu conteúdo
    $streams = ['streams' => $vod[0]['streams']];
    return $streams;    

}


?>
