<?php
// header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json");

function streams_movie($id) {
    // URL base para a requisição
    $url = "https://e78422d452bf-rede-canais-addon.baby-beamup.club/stream/movie/{$id}.json";

    // Inicializa o cURL
    $ch = curl_init();

    // Configurações do cURL
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Desativa a verificação SSL para evitar problemas de certificado

    // Executa o cURL e armazena a resposta
    $response = curl_exec($ch);

    // Verifica se houve erro na execução
    if (curl_errno($ch)) {
        $error_msg = curl_error($ch);
        curl_close($ch);
        return ["error" => $error_msg];
    }

    // Fecha a conexão cURL
    curl_close($ch);

    // Decodifica a resposta JSON
    $data = json_decode($response, true);

    // Verifica se a resposta contém streams
    if (isset($data['streams'])) {
        // Altera o valor do campo name para "OnePlay"
        foreach ($data['streams'] as &$stream) {
            if (isset($stream['name']) && $stream['name'] === "Rede Canais") {
                $stream['name'] = "OnePlay";
            }
        }
    }

    // Retorna os dados modificados como JSON
    return $data;
}

function streams_series($id) {
    // URL base para a requisição
    $url = "https://e78422d452bf-rede-canais-addon.baby-beamup.club/stream/series/{$id}.json";

    // Inicializa o cURL
    $ch = curl_init();

    // Configurações do cURL
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Desativa a verificação SSL para evitar problemas de certificado

    // Executa o cURL e armazena a resposta
    $response = curl_exec($ch);

    // Verifica se houve erro na execução
    if (curl_errno($ch)) {
        $error_msg = curl_error($ch);
        curl_close($ch);
        return ["error" => $error_msg];
    }

    // Fecha a conexão cURL
    curl_close($ch);

    // Decodifica a resposta JSON
    $data = json_decode($response, true);

    // Verifica se a resposta contém streams
    if (isset($data['streams'])) {
        // Altera o valor do campo name para "OnePlay"
        foreach ($data['streams'] as &$stream) {
            if (isset($stream['name']) && $stream['name'] === "Rede Canais") {
                $stream['name'] = "OnePlay";
            }
        }
    }

    // Retorna os dados modificados como JSON
    return $data;
}

// Exemplo de uso da função
// $id = "tt4701182"; // Substitua pelo ID do IMDb desejado
// $response = streams_movie($id);
// echo json_encode($response);
?>
