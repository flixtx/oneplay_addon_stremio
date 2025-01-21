<?php
$subfolder = "/stremio_oneplay/";
$debug = false;
$manifest = [
    "id" => "community.oneplay",
    "version" => "1.0.0",
    "name" => "OnePlay",
    "description" => "OnePlay para Stremio (TV, Filmes, Séries)",
    "logo" => "https://i.imgur.com/WyZ8dSQ.png",
    "resources" => ["catalog", "meta", "stream"],
    "types" => ["tv", "movie", "series"],
    "catalogs" => [
        [
            "type" => "tv",
            "id" => "OnePlay",
            "name" => "OnePlay",
            "extra" => [
                [
                    "name" => "genre",
                    "options" => [
                        "Canais Abertos",
                        "Variedades",
                        "Filmes e Series",
                        "Documentarios",
                        "Esportes",
                        "Infantil",
                        "Noticias",
                        "PLUTO TV",
                        "CANAL 24H"
                    ],
                    "isRequired" => false
                ]
            ]
        ]
    ],
    "idPrefixes" => ["oneplay", "tt"]
];

?>