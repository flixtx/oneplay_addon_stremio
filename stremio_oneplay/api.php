<?php

function tvshows($imdb, $season, $episode) {
    $stream = '';
    //$base = 'https://superflixapi.dev';
    $base = 'https://superflixapi.ps';
    $headers = [
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.1 Safari/537.36'
    ];

    $cache_file = 'series_cache.txt';
    $cache_key = $imdb . ':' . $season . ':' . $episode;
    
    // Verifica se o cache existe e carrega
    if (file_exists($cache_file)) {
        $cache = file($cache_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $cache_array = [];
        foreach ($cache as $line) {
            list($cached_key, $cached_stream) = explode('||', $line);
            $cache_array[$cached_key] = $cached_stream;
        }

        // Verifica se o IMDb, temporada e episódio estão no cache
        if (isset($cache_array[$cache_key])) {
            return $cache_array[$cache_key];
        }
    }    

    try {

    if ($imdb && $season && $episode) {
        $url = sprintf('%s/serie/%s/%s/%s', $base, $imdb, $season, $episode);
        $r = curl_init($url);
        curl_setopt($r, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($r, CURLOPT_RETURNTRANSFER, true);
        $src = curl_exec($r); // PAGINA PRINCIPAL
        curl_close($r);

        if ($src) {
            $pattern = '/<episode-item class="episodeOption active" data-contentid="(\d+)" data-epi-num="(\d+)">/'; 
            preg_match($pattern, $src, $matches); 
            $data_contentid = $matches[1] ?? null;            
            $api = sprintf('%s/api', $base);

            $postData = http_build_query(['action' => 'getOptions', 'contentid' => $data_contentid]);
            $r = curl_init($api);
            curl_setopt($r, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($r, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($r, CURLOPT_POST, true);
            curl_setopt($r, CURLOPT_POSTFIELDS, $postData);
            $src = json_decode(curl_exec($r), true);
            curl_close($r);

            $id = $src['data']['options'][0]['ID'];

            $postData = http_build_query(['action' => 'getPlayer', 'video_id' => $id]);
            $r = curl_init($api);
            curl_setopt($r, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($r, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($r, CURLOPT_POST, true);
            curl_setopt($r, CURLOPT_POSTFIELDS, $postData);
            $src = json_decode(curl_exec($r), true);
            curl_close($r);

            $video_url = $src['data']['video_url'];
            $video_hash = basename($video_url);
            $parsed_url = parse_url($video_url);
            $origin = sprintf('%s://%s', $parsed_url['scheme'], $parsed_url['host']);
            $player = sprintf('%s://%s/player/index.php?data=%s&do=getVideo', $parsed_url['scheme'], $parsed_url['host'], $video_hash);

            $r = curl_init($video_url);
            curl_setopt($r, CURLOPT_HTTPHEADER, array_merge($headers, ['Referer: '.$base.'/']));
            curl_setopt($r, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($r, CURLOPT_COOKIEJAR, ''); // Save cookies
            curl_setopt($r, CURLOPT_COOKIEFILE, ''); // Use saved cookies
            $response = curl_exec($r);
            $cookies = [];
            preg_match_all('/^Set-Cookie:\s*([^;]*)/mi', $response, $matches);
            foreach($matches[1] as $item) {
                parse_str($item, $cookie);
                $cookies = array_merge($cookies, $cookie);
            }
            curl_close($r);

            $cookies_str = '';
            foreach ($cookies as $name => $value) {
                $cookies_str .= "$name=$value; ";
            }

            $postData = http_build_query(['hash' => $video_hash, 'r' => $base]);
            $r = curl_init($player);
            curl_setopt($r, CURLOPT_HTTPHEADER, array_merge($headers, ['Origin: '.$origin, 'x-requested-with: XMLHttpRequest']));
            curl_setopt($r, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($r, CURLOPT_POST, true);
            curl_setopt($r, CURLOPT_POSTFIELDS, $postData);
            curl_setopt($r, CURLOPT_COOKIE, $cookies_str);
            $src = json_decode(curl_exec($r), true);
            curl_close($r);

            $stream = $src['videoSource'];
            // Salva o novo stream no cache
            if (!empty($stream)) {
                file_put_contents($cache_file, $cache_key . '||' . $stream . PHP_EOL, FILE_APPEND);
            }           
        }
    }
    } catch (Exception $e) {
        echo 'Erro: ' . $e->getMessage();
    }

    return $stream;
}


function movie($imdb) {
    $stream = '';
    // $base = 'https://superflixapi.dev';
    $base = 'https://superflixapi.link';
    $headers = [
        'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.1 Safari/537.36'
    ];
    $cache_file = 'movies_cache.txt';
    
    // Verifica se o cache existe e carrega
    if (file_exists($cache_file)) {
        $cache = file($cache_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $cache_array = [];
        foreach ($cache as $line) {
            list($cached_imdb, $cached_stream) = explode('||', $line);
            $cache_array[$cached_imdb] = $cached_stream;
        }

        // Verifica se o IMDb está no cache
        if (isset($cache_array[$imdb])) {
            return $cache_array[$imdb];
        }
    }

    try {    
    // Se não estiver no cache, faz a requisição
    if ($imdb) {
        $url = sprintf('%s/filme/%s', $base, $imdb);
        $r = curl_init($url);
        curl_setopt($r, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($r, CURLOPT_RETURNTRANSFER, true);
        $src = curl_exec($r); // PAGINA PRINCIPAL
        curl_close($r);

        $pattern = '/data-id="(\d+)"/';
        preg_match($pattern, $src, $matches);
        $data_id = $matches[1] ?? null;

        $api = sprintf('%s/api', $base);

        $postData = http_build_query(['action' => 'getPlayer', 'video_id' => $data_id]);
        $r = curl_init($api);
        curl_setopt($r, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($r, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($r, CURLOPT_POST, true);
        curl_setopt($r, CURLOPT_POSTFIELDS, $postData);
        $src = json_decode(curl_exec($r), true);
        curl_close($r);

        $video_url = $src['data']['video_url'];
        $video_hash = basename($video_url);
        $parsed_url = parse_url($video_url);
        $origin = sprintf('%s://%s', $parsed_url['scheme'], $parsed_url['host']);
        $player = sprintf('%s://%s/player/index.php?data=%s&do=getVideo', $parsed_url['scheme'], $parsed_url['host'], $video_hash);

        $r = curl_init($video_url);
        curl_setopt($r, CURLOPT_HTTPHEADER, array_merge($headers, ['Referer: '.$base.'/']));
        curl_setopt($r, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($r, CURLOPT_COOKIEJAR, ''); // Save cookies
        curl_setopt($r, CURLOPT_COOKIEFILE, ''); // Use saved cookies
        $response = curl_exec($r);
        $cookies = [];
        preg_match_all('/^Set-Cookie:\s*([^;]*)/mi', $response, $matches);
        foreach($matches[1] as $item) {
            parse_str($item, $cookie);
            $cookies = array_merge($cookies, $cookie);
        }
        curl_close($r);

        $cookies_str = '';
        foreach ($cookies as $name => $value) {
            $cookies_str .= "$name=$value; ";
        }

        $postData = http_build_query(['hash' => $video_hash, 'r' => $base]);
        $r = curl_init($player);
        curl_setopt($r, CURLOPT_HTTPHEADER, array_merge($headers, ['Origin: '.$origin, 'x-requested-with: XMLHttpRequest']));
        curl_setopt($r, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($r, CURLOPT_POST, true);
        curl_setopt($r, CURLOPT_POSTFIELDS, $postData);
        curl_setopt($r, CURLOPT_COOKIE, $cookies_str);
        $src = json_decode(curl_exec($r), true);
        curl_close($r);

        $stream = $src['videoSource'];
        
        // Salva o novo stream no cache
        if (!empty($stream)) {
            file_put_contents($cache_file, $imdb . '||' . $stream . PHP_EOL, FILE_APPEND);
        }
    }
    } catch (Exception $e) {
        echo 'Erro: ' . $e->getMessage();
    }

    return $stream;
}

function movie_api($imdb){
    $stream = movie($imdb);
    // Exibe a chave 'streams' com seu conteúdo
    if (!empty($stream)) {
        $vod = [
            ['streams' => [
                    [
                        "url" => $stream,
                        "name" => "OnePlay",
                        "description" => "Superflix API",
                        "behaviorHints" => [
                            "notWebReady" => true,
                            "proxyHeaders" => [
                                "request" => [
                                    "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.1 Safari/537.36"
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ];        
        $streams = ['streams' => $vod[0]['streams']];
    } else {
       $streams = ["streams" => []];
    }
    return $streams;
}

function series_api($id){
    $parts = explode(':', $id);
    $imdb_id = $parts[0]; 
    $season = $parts[1]; 
    $episode = $parts[2];
    $stream = tvshows($imdb_id, $season, $episode);
    
    // Exibe a chave 'streams' com seu conteúdo
    if (!empty($stream)) {   
        $vod = [
            ['streams' => [
                    [
                        "url" => $stream,
                        "name" => "OnePlay",
                        "description" => "Superflix API",
                        "behaviorHints" => [
                            "notWebReady" => true,
                            "proxyHeaders" => [
                                "request" => [
                                    "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/117.0.0.1 Safari/537.36"
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ];         
        $streams = ['streams' => $vod[0]['streams']];
    } else {
        $streams = ["streams" => []];
    }
    return $streams;    

}


?>
