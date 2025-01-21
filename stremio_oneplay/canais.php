<?php
$host = $_SERVER['HTTP_HOST']; // Obtém o host do servidor
// Lista de canais
$canais = [
    [
        'id' => 'oneplay:globosp',
        'type' => 'tv',
        'name' => 'Globo SP',
        'poster' => "https://$host/stremio_oneplay/logos/globo.png",
        'background' => "https://$host/stremio_oneplay/logos/globo.png",
        'description' => 'Canal Globo SP ao vivo.',
        'genres' => ['Canais Abertos'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/GloboSP/index.fmp4.m3u8",
                "title" => "Globo SP",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/GloboSP/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:globonordeste',
        'type' => 'tv',
        'name' => 'Globo Nordeste',
        'poster' => "https://$host/stremio_oneplay/logos/globo.png",
        'background' => "https://$host/stremio_oneplay/logos/globo.png",
        'description' => 'Canal Globo Nordeste ao vivo.',
        'genres' => ['Canais Abertos'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/GLOBO_NORDESTE/index.fmp4.m3u8",
                "title" => "Globo Nordeste",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/GLOBO_NORDESTE/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:sbtsp',
        'type' => 'tv',
        'name' => 'SBT SP',
        'poster' => "https://$host/stremio_oneplay/logos/sbt.jpg",
        'background' => "https://$host/stremio_oneplay/logos/sbt.jpg",
        'description' => 'Canal SBT ao vivo.',
        'genres' => ['Canais Abertos'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/SBTSP/index.fmp4.m3u8",
                "title" => "SBT SP",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/SBTSP/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:bandsp',
        'type' => 'tv',
        'name' => 'BAND SP',
        'poster' => "https://$host/stremio_oneplay/logos/band.jpg",
        'background' => "https://$host/stremio_oneplay/logos/band.jpg",
        'description' => 'Canal BAND ao vivo.',
        'genres' => ['Canais Abertos'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/BANDSP/index.fmp4.m3u8",
                "title" => "BAND SP",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/BANDSP/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],    
    [
        'id' => 'oneplay:redetv',
        'type' => 'tv',
        'name' => 'REDE TV',
        'poster' => "https://$host/stremio_oneplay/logos/redetv.jpg",
        'background' => "https://$host/stremio_oneplay/logos/redetv.jpg",
        'description' => 'Canal REDE TV ao vivo.',
        'genres' => ['Canais Abertos'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/REDETV/index.fmp4.m3u8",
                "title" => "REDE TV",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/REDETV/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ], 
    [
        'id' => 'oneplay:tvbrasil',
        'type' => 'tv',
        'name' => 'TV BRASIL',
        'poster' => "https://$host/stremio_oneplay/logos/tvbrasil.jpg",
        'background' => "https://$host/stremio_oneplay/logos/tvbrasil.jpg",
        'description' => 'Canal TV BRASIL ao vivo.',
        'genres' => ['Canais Abertos'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/TVBRASIL/index.fmp4.m3u8",
                "title" => "TV BRASIL",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/TVBRASIL/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ], 
    [
        'id' => 'oneplay:futura',
        'type' => 'tv',
        'name' => 'FUTURA',
        'poster' => "https://$host/stremio_oneplay/logos/futura.png",
        'background' => "https://$host/stremio_oneplay/logos/futura.png",
        'description' => 'Canal FUTURA ao vivo.',
        'genres' => ['Canais Abertos'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/FUTURA/index.fmp4.m3u8",
                "title" => "FUTURA",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/FUTURA/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],  
    [
        'id' => 'oneplay:recordsp',
        'type' => 'tv',
        'name' => 'RECORD SP',
        'poster' => "https://$host/stremio_oneplay/logos/record.jpg",
        'background' => "https://$host/stremio_oneplay/logos/record.jpg",
        'description' => 'Canal RECORD SP ao vivo.',
        'genres' => ['Canais Abertos'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/RECORDSP/index.fmp4.m3u8",
                "title" => "RECORD SP",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/RECORDSP/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],  
    [
        'id' => 'oneplay:viva',
        'type' => 'tv',
        'name' => 'VIVA',
        'poster' => "https://$host/stremio_oneplay/logos/viva.jpg",
        'background' => "https://$host/stremio_oneplay/logos/viva.jpg",
        'description' => 'Canal VIVA ao vivo.',
        'genres' => ['Variedades'],
        'streams' => [
            [
                "url" => "https://anonstream.zip/viva/index.m3u8",
                "title" => "VIVA",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Origin" => "https://embedstream.org",
                            "Referer" => "https://embedstream.org/"
                        ]
                    ]
                ]
            ]
        ]
    ],  
    [
        'id' => 'oneplay:bis',
        'type' => 'tv',
        'name' => 'BIS',
        'poster' => "https://$host/stremio_oneplay/logos/bis.png",
        'background' => "https://$host/stremio_oneplay/logos/bis.png",
        'description' => 'Canal BIS ao vivo.',
        'genres' => ['Variedades'],
        'streams' => [
            [
                "url" => "https://anonstream.zip/bis/index.m3u8",
                "title" => "BIS",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Origin" => "https://embedstream.org",
                            "Referer" => "https://embedstream.org/"
                        ]
                    ]
                ]
            ]
        ]
    ],     
    [
        'id' => 'oneplay:gnt',
        'type' => 'tv',
        'name' => 'GNT',
        'poster' => "https://$host/stremio_oneplay/logos/gnt.jpg",
        'background' => "https://$host/stremio_oneplay/logos/gnt.jpg",
        'description' => 'Canal GNT ao vivo.',
        'genres' => ['Variedades'],
        'streams' => [
            [
                "url" => "https://anonstream.zip/gnt/index.m3u8",
                "title" => "GNT",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Origin" => "https://embedstream.org",
                            "Referer" => "https://embedstream.org/"
                        ]
                    ]
                ]
            ]
        ]
    ],  
    [
        'id' => 'oneplay:multishow',
        'type' => 'tv',
        'name' => 'MULTISHOW',
        'poster' => "https://$host/stremio_oneplay/logos/multishow.png",
        'background' => "https://$host/stremio_oneplay/logos/multishow.png",
        'description' => 'Canal MULTISHOW ao vivo.',
        'genres' => ['Variedades'],
        'streams' => [
            [
                "url" => "https://anonstream.zip/multishow/index.m3u8",
                "title" => "MULTISHOW",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Origin" => "https://embedstream.org",
                            "Referer" => "https://embedstream.org/"
                        ]
                    ]
                ]
            ]
        ]
    ],   
    [
        'id' => 'oneplay:off',
        'type' => 'tv',
        'name' => 'CANAL OFF',
        'poster' => "https://$host/stremio_oneplay/logos/off.png",
        'background' => "https://$host/stremio_oneplay/logos/off.png",
        'description' => 'Canal OFF ao vivo.',
        'genres' => ['Variedades'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/CANAL_OFF/index.fmp4.m3u8",
                "title" => "CANAL OFF",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/CANAL_OFF/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],  
    [
        'id' => 'oneplay:adultswim',
        'type' => 'tv',
        'name' => 'ADULT SWIM',
        'poster' => "https://$host/stremio_oneplay/logos/adultswim.jpg",
        'background' => "https://$host/stremio_oneplay/logos/adultswim.jpg",
        'description' => 'Canal ADULT SWIM ao vivo.',
        'genres' => ['Variedades'],
        'streams' => [
            [
                "url" => "https://anonstream.zip/adultswim/index.m3u8",
                "title" => "MULTISHOW",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Origin" => "https://embedstream.org",
                            "Referer" => "https://embedstream.org/"
                        ]
                    ]
                ]
            ]
        ]
    ],   
    [
        'id' => 'oneplay:amc',
        'type' => 'tv',
        'name' => 'AMC',
        'poster' => "https://$host/stremio_oneplay/logos/amc.jpg",
        'background' => "https://$host/stremio_oneplay/logos/amc.jpg",
        'description' => 'Canal AMC ao vivo.',
        'genres' => ['Filmes e Series'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/AMC/index.fmp4.m3u8",
                "title" => "AMC",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/AMC/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:animalplanet',
        'type' => 'tv',
        'name' => 'ANIMAL PLANET',
        'poster' => "https://$host/stremio_oneplay/logos/animalplanet.jpg",
        'background' => "https://$host/stremio_oneplay/logos/animalplanet.jpg",
        'description' => 'Canal ANIMAL PLANET ao vivo.',
        'genres' => ['Documentarios'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/ANIMAL_PLANET/index.fmp4.m3u8",
                "title" => "ANIMAL PLANET",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/ANIMAL_PLANET/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],  
    [
        'id' => 'oneplay:arte1',
        'type' => 'tv',
        'name' => 'ARTE 1',
        'poster' => "https://$host/stremio_oneplay/logos/arte1.jpg",
        'background' => "https://$host/stremio_oneplay/logos/arte1.jpg",
        'description' => 'Canal ARTE 1 ao vivo.',
        'genres' => ['Filmes e Series'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/ARTE1/index.fmp4.m3u8",
                "title" => "ARTE 1",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/ARTE1/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ], 
    [
        'id' => 'oneplay:axn',
        'type' => 'tv',
        'name' => 'AXN',
        'poster' => "https://$host/stremio_oneplay/logos/axn.jpg",
        'background' => "https://$host/stremio_oneplay/logos/axn.jpg",
        'description' => 'Canal AXN ao vivo.',
        'genres' => ['Filmes e Series'],
        'streams' => [
            [
                "url" => "https://anonstream.zip/axn/index.m3u8",
                "title" => "AXN",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Origin" => "https://embedstream.org",
                            "Referer" => "https://embedstream.org/"
                        ]
                    ]
                ]
            ]
        ]
    ],   
    [
        'id' => 'oneplay:canalbrasil',
        'type' => 'tv',
        'name' => 'CANAL BRASIL',
        'poster' => "https://$host/stremio_oneplay/logos/canalbrasil.jpg",
        'background' => "https://$host/stremio_oneplay/logos/canalbrasil.jpg",
        'description' => 'Canal BRASIL ao vivo.',
        'genres' => ['Filmes e Series'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/CANAL_BRASIL/index.fmp4.m3u8",
                "title" => "CANAL BRASIL",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/CANAL_BRASIL/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],  
    [
        'id' => 'oneplay:discoverychannel',
        'type' => 'tv',
        'name' => 'DISCOVERY CHANNEL',
        'poster' => "https://$host/stremio_oneplay/logos/discovery.jpg",
        'background' => "https://$host/stremio_oneplay/logos/discovery.jpg",
        'description' => 'Canal DISCOVERY CHANNEL ao vivo.',
        'genres' => ['Documentarios'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/DISCOVERY_channel/index.fmp4.m3u8",
                "title" => "DISCOVERY CHANNEL",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/DISCOVERY_channel/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ], 
    [
        'id' => 'oneplay:discoveryheh',
        'type' => 'tv',
        'name' => 'DISCOVERY HOME & HEALTH',
        'poster' => "https://$host/stremio_oneplay/logos/discoveryhomeihealth.jpg",
        'background' => "https://$host/stremio_oneplay/logos/discoveryhomeihealth.jpg",
        'description' => 'Canal DISCOVERY HOME & HEALTH ao vivo.',
        'genres' => ['Documentarios'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/DISCOVERY_h&h/index.fmp4.m3u8",
                "title" => "DISCOVERY HOME & HEALTH",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/DISCOVERY_h&h/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:discoveryturbo',
        'type' => 'tv',
        'name' => 'DISCOVERY TURBO',
        'poster' => "https://$host/stremio_oneplay/logos/discoveryturbo.png",
        'background' => "https://$host/stremio_oneplay/logos/discoveryturbo.png",
        'description' => 'Canal DISCOVERY TURBO ao vivo.',
        'genres' => ['Documentarios'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/DISCOVERY_turbo/index.fmp4.m3u8",
                "title" => "DISCOVERY TURBO",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/DISCOVERY_turbo/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:discoverytheater',
        'type' => 'tv',
        'name' => 'DISCOVERY THEATER',
        'poster' => "https://$host/stremio_oneplay/logos/discoverytheater.png",
        'background' => "https://$host/stremio_oneplay/logos/discoverytheater.png",
        'description' => 'canal DISCOVERY THEATER ao vivo.',
        'genres' => ['Documentarios'],
        'streams' => [
            [
                "url" => "https://anonstream.zip/discoverytheater/index.m3u8",
                "title" => "DISCOVERY THEATER",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Origin" => "https://embedstream.org",
                            "Referer" => "https://embedstream.org/"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:discoveryworld',
        'type' => 'tv',
        'name' => 'DISCOVERY WORLD',
        'poster' => "https://$host/stremio_oneplay/logos/discoveryworld.png",
        'background' => "https://$host/stremio_oneplay/logos/discoveryworld.png",
        'description' => 'canal DISCOVERY WORLD ao vivo.',
        'genres' => ['Documentarios'],
        'streams' => [
            [
                "url" => "https://anonstream.zip/discoveryworld/index.m3u8",
                "title" => "DISCOVERY WORLD",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Origin" => "https://embedstream.org",
                            "Referer" => "https://embedstream.org/"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:discoveryscience',
        'type' => 'tv',
        'name' => 'DISCOVERY SCIENCE',
        'poster' => "https://$host/stremio_oneplay/logos/discoveryscience.png",
        'background' => "https://$host/stremio_oneplay/logos/discoveryscience.png",
        'description' => 'canal DISCOVERY SCIENCE ao vivo.',
        'genres' => ['Documentarios'],
        'streams' => [
            [
                "url" => "https://anonstream.zip/discoveryscience/index.m3u8",
                "title" => "DISCOVERY SCIENCE",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Origin" => "https://embedstream.org",
                            "Referer" => "https://embedstream.org/"
                        ]
                    ]
                ]
            ]
        ]
    ],         
    [
        'id' => 'oneplay:fx',
        'type' => 'tv',
        'name' => 'FX',
        'poster' => "https://$host/stremio_oneplay/logos/fx.jpg",
        'background' => "https://$host/stremio_oneplay/logos/fx.jpg",
        'description' => 'Canal FX ao vivo.',
        'genres' => ['Filmes e Series'],
        'streams' => [
            [
                "url" => "https://anonstream.zip/fx/index.m3u8",
                "title" => "FX",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Origin" => "https://embedstream.org",
                            "Referer" => "https://embedstream.org/"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:hbo',
        'type' => 'tv',
        'name' => 'HBO',
        'poster' => "https://$host/stremio_oneplay/logos/hbo.jpg",
        'background' => "https://$host/stremio_oneplay/logos/hbo.jpg",
        'description' => 'Canal HBO ao vivo.',
        'genres' => ['Filmes e Series'],
        'streams' => [
            [
                "url" => "https://anonstream.zip/hbo/index.m3u8",
                "title" => "HBO",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Origin" => "https://embedstream.org",
                            "Referer" => "https://embedstream.org/"
                        ]
                    ]
                ]
            ]
        ]
    ], 
    [
        'id' => 'oneplay:hbo2',
        'type' => 'tv',
        'name' => 'HBO 2',
        'poster' => "https://$host/stremio_oneplay/logos/hbo2.jpg",
        'background' => "https://$host/stremio_oneplay/logos/hbo2.jpg",
        'description' => 'Canal HBO 2 ao vivo.',
        'genres' => ['Filmes e Series'],
        'streams' => [
            [
                "url" => "https://anonstream.zip/hbo2/index.m3u8",
                "title" => "HBO 2",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Origin" => "https://embedstream.org",
                            "Referer" => "https://embedstream.org/"
                        ]
                    ]
                ]
            ]
        ]
    ],  
    [
        'id' => 'oneplay:hbofamily',
        'type' => 'tv',
        'name' => 'HBO FAMILY',
        'poster' => "https://$host/stremio_oneplay/logos/hbofamily.jpg",
        'background' => "https://$host/stremio_oneplay/logos/hbofamily.jpg",
        'description' => 'Canal HBO FAMILY ao vivo.',
        'genres' => ['Filmes e Series'],
        'streams' => [
            [
                "url" => "https://anonstream.zip/hbofamily/index.m3u8",
                "title" => "HBO FAMILY",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Origin" => "https://embedstream.org",
                            "Referer" => "https://embedstream.org/"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:hboplus',
        'type' => 'tv',
        'name' => 'HBO PLUS',
        'poster' => "https://$host/stremio_oneplay/logos/hboplus.jpg",
        'background' => "https://$host/stremio_oneplay/logos/hboplus.jpg",
        'description' => 'Canal HBO PLUS ao vivo.',
        'genres' => ['Filmes e Series'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/HBOPLUS/index.fmp4.m3u8",
                "title" => "HBO PLUS",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/HBOPLUS/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:hboxtreme',
        'type' => 'tv',
        'name' => 'HBO XTREME',
        'poster' => "https://$host/stremio_oneplay/logos/hbo_xtreme.png",
        'background' => "https://$host/stremio_oneplay/logos/hbo_xtreme.png",
        'description' => 'canal HBO XTREME ao vivo.',
        'genres' => ['Filmes e Series'],
        'streams' => [
            [
                "url" => "https://anonstream.zip/hboxtreme/index.m3u8",
                "title" => "HBO XTREME",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Origin" => "https://embedstream.org",
                            "Referer" => "https://embedstream.org/"
                        ]
                    ]
                ]
            ]
        ]
    ], 
    [
        'id' => 'oneplay:hbosignature',
        'type' => 'tv',
        'name' => 'HBO SIGNATURE',
        'poster' => "https://$host/stremio_oneplay/logos/hbo_signature.png",
        'background' => "https://$host/stremio_oneplay/logos/hbo_signature.png",
        'description' => 'canal HBO SIGNATURE ao vivo.',
        'genres' => ['Filmes e Series'],
        'streams' => [
            [
                "url" => "https://anonstream.zip/hbosignature/index.m3u8",
                "title" => "HBO SIGNATURE",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Origin" => "https://embedstream.org",
                            "Referer" => "https://embedstream.org/"
                        ]
                    ]
                ]
            ]
        ]
    ],        
    [
        'id' => 'oneplay:history',
        'type' => 'tv',
        'name' => 'HISTORY',
        'poster' => "https://$host/stremio_oneplay/logos/history.jpg",
        'background' => "https://$host/stremio_oneplay/logos/history.jpg",
        'description' => 'Canal HISTORY ao vivo.',
        'genres' => ['Documentarios'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/HISTORY_CHANEL/index.fmp4.m3u8",
                "title" => "HISTORY",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/HISTORY_CHANEL/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:history2',
        'type' => 'tv',
        'name' => 'HISTORY 2',
        'poster' => "https://$host/stremio_oneplay/logos/history2.jpg",
        'background' => "https://$host/stremio_oneplay/logos/history2.jpg",
        'description' => 'Canal HISTORY 2 ao vivo.',
        'genres' => ['Documentarios'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/HISTORY2/index.fmp4.m3u8",
                "title" => "HISTORY 2",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/HISTORY2/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],  
    [
        'id' => 'oneplay:mtv',
        'type' => 'tv',
        'name' => 'MTV',
        'poster' => "https://$host/stremio_oneplay/logos/mtv.jpg",
        'background' => "https://$host/stremio_oneplay/logos/mtv.jpg",
        'description' => 'Canal MTV ao vivo.',
        'genres' => ['Variedades'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/mtv/index.fmp4.m3u8",
                "title" => "MTV",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/mtv/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ], 
    [
        'id' => 'oneplay:nationalgeographic',
        'type' => 'tv',
        'name' => 'NATIONAL GEOGRAPHIC',
        'poster' => "https://$host/stremio_oneplay/logos/natgeo.jpg",
        'background' => "https://$host/stremio_oneplay/logos/natgeo.jpg",
        'description' => 'Canal NATIONAL GEOGRAPHIC ao vivo.',
        'genres' => ['Documentarios'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/national_geographic/index.fmp4.m3u8",
                "title" => "NATIONAL GEOGRAPHIC",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/national_geographic/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ], 
    [
        'id' => 'oneplay:paramountnetwork',
        'type' => 'tv',
        'name' => 'PARAMOUNT NETWORK',
        'poster' => "https://$host/stremio_oneplay/logos/paramount.jpg",
        'background' => "https://$host/stremio_oneplay/logos/paramount.jpg",
        'description' => 'Canal PARAMOUNT NETWORK ao vivo.',
        'genres' => ['Filmes e Series'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/PARAMOUNT/index.fmp4.m3u8",
                "title" => "PARAMOUNT NETWORK",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/PARAMOUNT/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:space',
        'type' => 'tv',
        'name' => 'SPACE',
        'poster' => "https://$host/stremio_oneplay/logos/space.jpg",
        'background' => "https://$host/stremio_oneplay/logos/space.jpg",
        'description' => 'Canal SPACE ao vivo.',
        'genres' => ['Filmes e Series'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/space/index.fmp4.m3u8",
                "title" => "SPACE",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/space/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ], 
    [
        'id' => 'oneplay:tnt',
        'type' => 'tv',
        'name' => 'TNT',
        'poster' => "https://$host/stremio_oneplay/logos/tnt.jpg",
        'background' => "https://$host/stremio_oneplay/logos/tnt.jpg",
        'description' => 'Canal TNT ao vivo.',
        'genres' => ['Filmes e Series'],
        'streams' => [
            [
                "url" => "https://super-cdn.link/tnt/index.m3u8",
                "title" => "TNT",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Origin" => "https://embedstream.org",
                            "Referer" => "https://embedstream.org/"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:telecineaction',
        'type' => 'tv',
        'name' => 'TELECINE ACTION',
        'poster' => "https://$host/stremio_oneplay/logos/telecineaction.jpg",
        'background' => "https://$host/stremio_oneplay/logos/telecineaction.jpg",
        'description' => 'Canal TELECINE ACTION ao vivo.',
        'genres' => ['Filmes e Series'],
        'streams' => [
            [
                "url" => "https://super-cdn.link/telecineaction/index.m3u8",
                "title" => "TELECINE ACTION",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Origin" => "https://embedstream.org",
                            "Referer" => "https://embedstream.org/"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:telecinecult',
        'type' => 'tv',
        'name' => 'TELECINE CULT',
        'poster' => "https://$host/stremio_oneplay/logos/telecinecult.jpg",
        'background' => "https://$host/stremio_oneplay/logos/telecinecult.jpg",
        'description' => 'Canal TELECINE CULT ao vivo.',
        'genres' => ['Filmes e Series'],
        'streams' => [
            [
                "url" => "https://super-cdn.link/telecinecult/index.m3u8",
                "title" => "TELECINE CULT",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Origin" => "https://embedstream.org",
                            "Referer" => "https://embedstream.org/"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:telecinefun',
        'type' => 'tv',
        'name' => 'TELECINE FUN',
        'poster' => "https://$host/stremio_oneplay/logos/telecinefun.jpg",
        'background' => "https://$host/stremio_oneplay/logos/telecinefun.jpg",
        'description' => 'Canal TELECINE FUN ao vivo.',
        'genres' => ['Filmes e Series'],
        'streams' => [
            [
                "url" => "https://super-cdn.link/telecinefun/index.m3u8",
                "title" => "TELECINE FUN",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Origin" => "https://embedstream.org",
                            "Referer" => "https://embedstream.org/"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:telecinepipoca',
        'type' => 'tv',
        'name' => 'TELECINE PIPOCA',
        'poster' => "https://$host/stremio_oneplay/logos/telecinepipoca.jpg",
        'background' => "https://$host/stremio_oneplay/logos/telecinepipoca.jpg",
        'description' => 'Canal TELECINE PIPOCA ao vivo.',
        'genres' => ['Filmes e Series'],
        'streams' => [
            [
                "url" => "https://super-cdn.link/telecinepipoca/index.m3u8",
                "title" => "TELECINE PIPOCA",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Origin" => "https://embedstream.org",
                            "Referer" => "https://embedstream.org/"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:telecinepremium',
        'type' => 'tv',
        'name' => 'TELECINE PREMIUM',
        'poster' => "https://$host/stremio_oneplay/logos/telecinepremium.png",
        'background' => "https://$host/stremio_oneplay/logos/telecinepremium.png",
        'description' => 'Canal TELECINE PREMIUM ao vivo.',
        'genres' => ['Filmes e Series'],
        'streams' => [
            [
                "url" => "https://super-cdn.link/telecinepremium/index.m3u8",
                "title" => "TELECINE PREMIUM",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Origin" => "https://embedstream.org",
                            "Referer" => "https://embedstream.org/"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:telecinetouch',
        'type' => 'tv',
        'name' => 'TELECINE TOUCH',
        'poster' => "https://$host/stremio_oneplay/logos/telecinetouch.png",
        'background' => "https://$host/stremio_oneplay/logos/telecinetouch.png",
        'description' => 'Canal TELECINE TOUCH ao vivo.',
        'genres' => ['Filmes e Series'],
        'streams' => [
            [
                "url" => "https://super-cdn.link/telecinetouch/index.m3u8",
                "title" => "TELECINE TOUCH",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Origin" => "https://embedstream.org",
                            "Referer" => "https://embedstream.org/"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:universal',
        'type' => 'tv',
        'name' => 'UNIVERSAL TV',
        'poster' => "https://$host/stremio_oneplay/logos/universal.jpg",
        'background' => "https://$host/stremio_oneplay/logos/universal.jpg",
        'description' => 'Canal UNIVERSAL ao vivo.',
        'genres' => ['Filmes e Series'],
        'streams' => [
            [
                "url" => "https://anonstream.zip/universaltv/index.m3u8",
                "title" => "UNIVERSAL TV",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Origin" => "https://embedstream.org",
                            "Referer" => "https://embedstream.org/"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:syfy',
        'type' => 'tv',
        'name' => 'SYFY',
        'poster' => "https://$host/stremio_oneplay/logos/syfy.jpg",
        'background' => "https://$host/stremio_oneplay/logos/syfy.jpg",
        'description' => 'Canal SYFY ao vivo.',
        'genres' => ['Filmes e Series'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/SYFY/index.fmp4.m3u8",
                "title" => "SYFY",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/SYFY/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ], 
    [
        'id' => 'oneplay:cinemax',
        'type' => 'tv',
        'name' => 'CINEMAX',
        'poster' => "https://$host/stremio_oneplay/logos/cinemax.jpg",
        'background' => "https://$host/stremio_oneplay/logos/cinemax.jpg",
        'description' => 'Canal CINEMAX ao vivo.',
        'genres' => ['Filmes e Series'],
        'streams' => [
            [
                "url" => "https://anonstream.zip/cinemax/index.m3u8",
                "title" => "CINEMAX",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Origin" => "https://embedstream.org",
                            "Referer" => "https://embedstream.org/"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:comedycentral',
        'type' => 'tv',
        'name' => 'COMEDY CENTRAL',
        'poster' => "https://$host/stremio_oneplay/logos/comedycentral.jpg",
        'background' => "https://$host/stremio_oneplay/logos/comedycentral.jpg",
        'description' => 'Canal COMEDY CENTRAL ao vivo.',
        'genres' => ['Variedades'],
        'streams' => [
            [
                "url" => "https://anonstream.zip/comedycentral/index.m3u8",
                "title" => "COMEDY CENTRAL",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Origin" => "https://embedstream.org",
                            "Referer" => "https://embedstream.org/"
                        ]
                    ]
                ]
            ]
        ]
    ], 
    [
        'id' => 'oneplay:sony',
        'type' => 'tv',
        'name' => 'SONY CHANNEL',
        'poster' => "https://$host/stremio_oneplay/logos/sony.jpg",
        'background' => "https://$host/stremio_oneplay/logos/sony.jpg",
        'description' => 'SONY CHANNEL ao vivo.',
        'genres' => ['Filmes e Series'],
        'streams' => [
            [
                "url" => "https://anonstream.zip/sonychannel/index.m3u8",
                "title" => "SONY CHANNEL",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Origin" => "https://embedstream.org",
                            "Referer" => "https://embedstream.org/"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:starchannel',
        'type' => 'tv',
        'name' => 'STAR CHANNEL',
        'poster' => "https://$host/stremio_oneplay/logos/starchannel.jpg",
        'background' => "https://$host/stremio_oneplay/logos/starchannel.jpg",
        'description' => 'STAR CHANNEL ao vivo.',
        'genres' => ['Filmes e Series'],
        'streams' => [
            [
                "url" => "https://anonstream.zip/starchannel/index.m3u8",
                "title" => "STAR CHANNEL",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Origin" => "https://embedstream.org",
                            "Referer" => "https://embedstream.org/"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:warnertv',
        'type' => 'tv',
        'name' => 'WARNER TV',
        'poster' => "https://$host/stremio_oneplay/logos/warner.jpg",
        'background' => "https://$host/stremio_oneplay/logos/warner.jpg",
        'description' => 'canal WARNER TV ao vivo.',
        'genres' => ['Filmes e Series'],
        'streams' => [
            [
                "url" => "https://anonstream.zip/warnerchannel/index.m3u8",
                "title" => "WARNER TV",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Origin" => "https://embedstream.org",
                            "Referer" => "https://embedstream.org/"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:aie',
        'type' => 'tv',
        'name' => 'A&E',
        'poster' => "https://$host/stremio_oneplay/logos/aie.jpg",
        'background' => "https://$host/stremio_oneplay/logos/aie.jpg",
        'description' => 'canal A&E ao vivo.',
        'genres' => ['Filmes e Series'],
        'streams' => [
            [
                "url" => "https://anonstream.zip/aee/index.m3u8",
                "title" => "A&E",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Origin" => "https://embedstream.org",
                            "Referer" => "https://embedstream.org/"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:aie',
        'type' => 'tv',
        'name' => 'A&E',
        'poster' => "https://$host/stremio_oneplay/logos/aie.jpg",
        'background' => "https://$host/stremio_oneplay/logos/aie.jpg",
        'description' => 'canal A&E ao vivo.',
        'genres' => ['Filmes e Series'],
        'streams' => [
            [
                "url" => "https://anonstream.zip/aee/index.m3u8",
                "title" => "A&E",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Origin" => "https://embedstream.org",
                            "Referer" => "https://embedstream.org/"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:investigacao',
        'type' => 'tv',
        'name' => 'INVESTIGAÇÃO DISCOVERY',
        'poster' => "https://$host/stremio_oneplay/logos/iddiscovery.jpeg",
        'background' => "https://$host/stremio_oneplay/logos/iddiscovery.jpeg",
        'description' => 'canal INVESTIGAÇÃO DISCOVERY ao vivo.',
        'genres' => ['Documentarios'],
        'streams' => [
            [
                "url" => "https://anonstream.zip/discoveryid/index.m3u8",
                "title" => "INVESTIGAÇÃO DISCOVERY",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Origin" => "https://embedstream.org",
                            "Referer" => "https://embedstream.org/"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:tlc',
        'type' => 'tv',
        'name' => 'TLC',
        'poster' => "https://$host/stremio_oneplay/logos/tlc.png",
        'background' => "https://$host/stremio_oneplay/logos/tlc.png",
        'description' => 'canal TLC ao vivo.',
        'genres' => ['Documentarios'],
        'streams' => [
            [
                "url" => "https://anonstream.zip/tlc/index.m3u8",
                "title" => "TLC",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Origin" => "https://embedstream.org",
                            "Referer" => "https://embedstream.org/"
                        ]
                    ]
                ]
            ]
        ]
    ], 
    [
        'id' => 'oneplay:megapix',
        'type' => 'tv',
        'name' => 'MEGAPIX',
        'poster' => "https://$host/stremio_oneplay/logos/megapix.jpg",
        'background' => "https://$host/stremio_oneplay/logos/megapix.jpg",
        'description' => 'canal MEGAPIX ao vivo.',
        'genres' => ['Filmes e Series'],
        'streams' => [
            [
                "url" => "https://anonstream.zip/megapix/index.m3u8",
                "title" => "MEGAPIX",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Origin" => "https://embedstream.org",
                            "Referer" => "https://embedstream.org/"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:studiouniversal',
        'type' => 'tv',
        'name' => 'STUDIO UNIVERSAL',
        'poster' => "https://$host/stremio_oneplay/logos/studiouniversal.png",
        'background' => "https://$host/stremio_oneplay/logos/studiouniversal.png",
        'description' => 'canal STUDIO UNIVERSAL ao vivo.',
        'genres' => ['Filmes e Series'],
        'streams' => [
            [
                "url" => "https://anonstream.zip/studiouniversal/index.m3u8",
                "title" => "STUDIO UNIVERSAL",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Origin" => "https://embedstream.org",
                            "Referer" => "https://embedstream.org/"
                        ]
                    ]
                ]
            ]
        ]
    ], 
    [
        'id' => 'oneplay:lifetime',
        'type' => 'tv',
        'name' => 'LIFETIME',
        'poster' => "https://$host/stremio_oneplay/logos/lifetime.jpg",
        'background' => "https://$host/stremio_oneplay/logos/lifetime.jpg",
        'description' => 'canal LIFETIME ao vivo.',
        'genres' => ['Filmes e Series'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/lifetime/index.fmp4.m3u8",
                "title" => "LIFETIME",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/lifetime/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:cinecanal',
        'type' => 'tv',
        'name' => 'CINE CANAL',
        'poster' => "https://$host/stremio_oneplay/logos/cinecanal.png",
        'background' => "https://$host/stremio_oneplay/logos/cinecanal.png",
        'description' => 'CINE CANAL ao vivo.',
        'genres' => ['Filmes e Series'],
        'streams' => [
            [
                "url" => "https://anonstream.zip/cinecanal/index.m3u8",
                "title" => "CINE CANAL",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Origin" => "https://embedstream.org",
                            "Referer" => "https://embedstream.org/"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:eentertainment',
        'type' => 'tv',
        'name' => '!E',
        'poster' => "https://$host/stremio_oneplay/logos/e.png",
        'background' => "https://$host/stremio_oneplay/logos/e.png",
        'description' => 'canal !E ao vivo.',
        'genres' => ['Variedades'],
        'streams' => [
            [
                "url" => "https://anonstream.zip/e/index.m3u8",
                "title" => "!E",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Origin" => "https://embedstream.org",
                            "Referer" => "https://embedstream.org/"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:bandsports',
        'type' => 'tv',
        'name' => 'BANDSPORTS',
        'poster' => "https://$host/stremio_oneplay/logos/bandsports.jpg",
        'background' => "https://$host/stremio_oneplay/logos/bandsports.jpg",
        'description' => 'canal BANDSPORTS ao vivo.',
        'genres' => ['Esportes'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/BANDSPORTS/index.fmp4.m3u8",
                "title" => "BANDSPORTS",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/BANDSPORTS/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ], 
    [
        'id' => 'oneplay:espn',
        'type' => 'tv',
        'name' => 'ESPN',
        'poster' => "https://$host/stremio_oneplay/logos/espn.jpg",
        'background' => "https://$host/stremio_oneplay/logos/espn.jpg",
        'description' => 'canal ESPN ao vivo.',
        'genres' => ['Esportes'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/ESPN1/index.fmp4.m3u8",
                "title" => "ESPN",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/ESPN1/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:espn2',
        'type' => 'tv',
        'name' => 'ESPN 2',
        'poster' => "https://$host/stremio_oneplay/logos/espn2.jpg",
        'background' => "https://$host/stremio_oneplay/logos/espn2.jpg",
        'description' => 'canal ESPN 2 ao vivo.',
        'genres' => ['Esportes'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/ESPN2/index.fmp4.m3u8",
                "title" => "ESPN 2",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/ESPN2/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:espn3',
        'type' => 'tv',
        'name' => 'ESPN 3',
        'poster' => "https://$host/stremio_oneplay/logos/espn3.jpg",
        'background' => "https://$host/stremio_oneplay/logos/espn3.jpg",
        'description' => 'canal ESPN 3 ao vivo.',
        'genres' => ['Esportes'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/ESPN3/index.fmp4.m3u8",
                "title" => "ESPN 3",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/ESPN3/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:espn4',
        'type' => 'tv',
        'name' => 'ESPN 4',
        'poster' => "https://$host/stremio_oneplay/logos/espn4.jpg",
        'background' => "https://$host/stremio_oneplay/logos/espn4.jpg",
        'description' => 'canal ESPN 4 ao vivo.',
        'genres' => ['Esportes'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/ESPN4/index.fmp4.m3u8",
                "title" => "ESPN 4",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/ESPN4/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:espn5',
        'type' => 'tv',
        'name' => 'ESPN 5',
        'poster' => "https://$host/stremio_oneplay/logos/espn5.jpg",
        'background' => "https://$host/stremio_oneplay/logos/espn5.jpg",
        'description' => 'canal ESPN 5 ao vivo.',
        'genres' => ['Esportes'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/ESPN5/index.fmp4.m3u8",
                "title" => "ESPN 5",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/ESPN5/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:espn6',
        'type' => 'tv',
        'name' => 'ESPN 6',
        'poster' => "https://$host/stremio_oneplay/logos/espn6.jpg",
        'background' => "https://$host/stremio_oneplay/logos/espn6.jpg",
        'description' => 'canal ESPN 6 ao vivo.',
        'genres' => ['Esportes'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/ESPN6/index.fmp4.m3u8",
                "title" => "ESPN 6",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/ESPN6/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:sportv',
        'type' => 'tv',
        'name' => 'SPORTV',
        'poster' => "https://$host/stremio_oneplay/logos/sportv.jpg",
        'background' => "https://$host/stremio_oneplay/logos/sportv.jpg",
        'description' => 'canal SPORTV ao vivo.',
        'genres' => ['Esportes'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/SPORTTV1/index.fmp4.m3u8",
                "title" => "SPORTV",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/SPORTTV1/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:sportv2',
        'type' => 'tv',
        'name' => 'SPORTV 2',
        'poster' => "https://$host/stremio_oneplay/logos/sportv2.jpg",
        'background' => "https://$host/stremio_oneplay/logos/sportv2.jpg",
        'description' => 'canal SPORTV 2 ao vivo.',
        'genres' => ['Esportes'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/SPORTTV2/index.fmp4.m3u8",
                "title" => "SPORTV 2",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/SPORTTV2/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:sportv3',
        'type' => 'tv',
        'name' => 'SPORTV 3',
        'poster' => "https://$host/stremio_oneplay/logos/sportv3.jpg",
        'background' => "https://$host/stremio_oneplay/logos/sportv3.jpg",
        'description' => 'canal SPORTV 3 ao vivo.',
        'genres' => ['Esportes'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/SPORTTV3/index.fmp4.m3u8",
                "title" => "SPORTV 3",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/SPORTTV3/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ], 
    [
        'id' => 'oneplay:premiereclubes',
        'type' => 'tv',
        'name' => 'PREMIERE CLUBES',
        'poster' => "https://$host/stremio_oneplay/logos/premiereclubes.jpg",
        'background' => "https://$host/stremio_oneplay/logos/premiereclubes.jpg",
        'description' => 'canal PREMIERE CLUBES ao vivo.',
        'genres' => ['Esportes'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/PREMIERE_CLUBES/index.fmp4.m3u8",
                "title" => "PREMIERE CLUBES",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/PREMIERE_CLUBES/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:premiere2',
        'type' => 'tv',
        'name' => 'PREMIERE 2',
        'poster' => "https://$host/stremio_oneplay/logos/premiere2.jpg",
        'background' => "https://$host/stremio_oneplay/logos/premiere2.jpg",
        'description' => 'canal PREMIERE 2 ao vivo.',
        'genres' => ['Esportes'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/PREMIERE2/index.fmp4.m3u8",
                "title" => "PREMIERE 2",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/PREMIERE2/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:premiere3',
        'type' => 'tv',
        'name' => 'PREMIERE 3',
        'poster' => "https://$host/stremio_oneplay/logos/premiere3.jpg",
        'background' => "https://$host/stremio_oneplay/logos/premiere3.jpg",
        'description' => 'canal PREMIERE 3 ao vivo.',
        'genres' => ['Esportes'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/PREMIERE3/index.fmp4.m3u8",
                "title" => "PREMIERE 3",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/PREMIERE3/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:premiere4',
        'type' => 'tv',
        'name' => 'PREMIERE 4',
        'poster' => "https://$host/stremio_oneplay/logos/premiere4.jpg",
        'background' => "https://$host/stremio_oneplay/logos/premiere4.jpg",
        'description' => 'canal PREMIERE 4 ao vivo.',
        'genres' => ['Esportes'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/PREMIERE4/index.fmp4.m3u8",
                "title" => "PREMIERE 4",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/PREMIERE4/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:premiere5',
        'type' => 'tv',
        'name' => 'PREMIERE 5',
        'poster' => "https://$host/stremio_oneplay/logos/premiere5.jpg",
        'background' => "https://$host/stremio_oneplay/logos/premiere5.jpg",
        'description' => 'canal PREMIERE 5 ao vivo.',
        'genres' => ['Esportes'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/PREMIERE5/index.fmp4.m3u8",
                "title" => "PREMIERE 5",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/PREMIERE5/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:premiere6',
        'type' => 'tv',
        'name' => 'PREMIERE 6',
        'poster' => "https://$host/stremio_oneplay/logos/premiere6.jpg",
        'background' => "https://$host/stremio_oneplay/logos/premiere6.jpg",
        'description' => 'canal PREMIERE 6 ao vivo.',
        'genres' => ['Esportes'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/PREMIERE6/index.fmp4.m3u8",
                "title" => "PREMIERE 6",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/PREMIERE6/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:premiere7',
        'type' => 'tv',
        'name' => 'PREMIERE 6',
        'poster' => "https://$host/stremio_oneplay/logos/premiere7.jpg",
        'background' => "https://$host/stremio_oneplay/logos/premiere7.jpg",
        'description' => 'canal PREMIERE 7 ao vivo.',
        'genres' => ['Esportes'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/PREMIERE7/index.fmp4.m3u8",
                "title" => "PREMIERE 7",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/PREMIERE7/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:paramountplus',
        'type' => 'tv',
        'name' => 'PARAMOUNT+',
        'poster' => "https://$host/stremio_oneplay/logos/paramountplus1.jpg",
        'background' => "https://$host/stremio_oneplay/logos/paramountplus1.jpg",
        'description' => 'canal PARAMOUNT+ ao vivo.',
        'genres' => ['Esportes'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/PARAMOUNT+1/index.fmp4.m3u8",
                "title" => "PARAMOUNT+",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/PARAMOUNT+1/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:paramountplus2',
        'type' => 'tv',
        'name' => 'PARAMOUNT+ 2',
        'poster' => "https://$host/stremio_oneplay/logos/paramountplus2.jpg",
        'background' => "https://$host/stremio_oneplay/logos/paramountplus2.jpg",
        'description' => 'canal PARAMOUNT+ 2 ao vivo.',
        'genres' => ['Esportes'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/PARAMOUNT+2/index.fmp4.m3u8",
                "title" => "PARAMOUNT+ 2",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/PARAMOUNT+2/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:paramountplus3',
        'type' => 'tv',
        'name' => 'PARAMOUNT+ 3',
        'poster' => "https://$host/stremio_oneplay/logos/paramountplus3.jpg",
        'background' => "https://$host/stremio_oneplay/logos/paramountplus3.jpg",
        'description' => 'canal PARAMOUNT+ 3 ao vivo.',
        'genres' => ['Esportes'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/PARAMOUNT+3/index.fmp4.m3u8",
                "title" => "PARAMOUNT+ 3",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/PARAMOUNT+3/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ], 
    [
        'id' => 'oneplay:paramountplus4',
        'type' => 'tv',
        'name' => 'PARAMOUNT+ 4',
        'poster' => "https://$host/stremio_oneplay/logos/paramountplus4.jpg",
        'background' => "https://$host/stremio_oneplay/logos/paramountplus4.jpg",
        'description' => 'canal PARAMOUNT+ 4 ao vivo.',
        'genres' => ['Esportes'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/PARAMOUNT+4/index.fmp4.m3u8",
                "title" => "PARAMOUNT+ 4",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/PARAMOUNT+4/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:combate',
        'type' => 'tv',
        'name' => 'COMBATE',
        'poster' => "https://$host/stremio_oneplay/logos/combate.jpg",
        'background' => "https://$host/stremio_oneplay/logos/combate.jpg",
        'description' => 'canal COMBATE ao vivo.',
        'genres' => ['Esportes'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/COMBATE/index.fmp4.m3u8",
                "title" => "COMBATE",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/COMBATE/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:cazetv1',
        'type' => 'tv',
        'name' => 'CAZE TV 1',
        'poster' => "https://$host/stremio_oneplay/logos/cazetv.png",
        'background' => "https://$host/stremio_oneplay/logos/cazetv.png",
        'description' => 'canal CAZE TV 1 ao vivo.',
        'genres' => ['Esportes'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/CAZETV1/index.fmp4.m3u8",
                "title" => "CAZE TV 1",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/CAZETV1/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:cazetv2',
        'type' => 'tv',
        'name' => 'CAZE TV 2',
        'poster' => "https://$host/stremio_oneplay/logos/cazetv.png",
        'background' => "https://$host/stremio_oneplay/logos/cazetv.png",
        'description' => 'canal CAZE TV 2 ao vivo.',
        'genres' => ['Esportes'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/CAZETV2/index.fmp4.m3u8",
                "title" => "CAZE TV 2",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/CAZETV2/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:cazetv3',
        'type' => 'tv',
        'name' => 'CAZE TV 3',
        'poster' => "https://$host/stremio_oneplay/logos/cazetv.png",
        'background' => "https://$host/stremio_oneplay/logos/cazetv.png",
        'description' => 'canal CAZE TV 3 ao vivo.',
        'genres' => ['Esportes'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/CAZETV3/index.fmp4.m3u8",
                "title" => "CAZE TV 3",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/CAZETV3/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:goat1',
        'type' => 'tv',
        'name' => 'CANAL GOAT 1',
        'poster' => "https://$host/stremio_oneplay/logos/canalgoat.jpg",
        'background' => "https://$host/stremio_oneplay/logos/canalgoat.jpg",
        'description' => 'CANAL GOAT 1 ao vivo.',
        'genres' => ['Esportes'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/CANALGOAT1/index.fmp4.m3u8",
                "title" => "CANAL GOAT 1",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/CANALGOAT1/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:goat2',
        'type' => 'tv',
        'name' => 'CANAL GOAT 2',
        'poster' => "https://$host/stremio_oneplay/logos/canalgoat.jpg",
        'background' => "https://$host/stremio_oneplay/logos/canalgoat.jpg",
        'description' => 'CANAL GOAT 2 ao vivo.',
        'genres' => ['Esportes'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/CANALGOAT2/index.fmp4.m3u8",
                "title" => "CANAL GOAT 2",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/CANALGOAT2/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:goat3',
        'type' => 'tv',
        'name' => 'CANAL GOAT 3',
        'poster' => "https://$host/stremio_oneplay/logos/canalgoat.jpg",
        'background' => "https://$host/stremio_oneplay/logos/canalgoat.jpg",
        'description' => 'CANAL GOAT 3 ao vivo.',
        'genres' => ['Esportes'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/CANALGOAT3/index.fmp4.m3u8",
                "title" => "CANAL GOAT 3",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/CANALGOAT3/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:goat4',
        'type' => 'tv',
        'name' => 'CANAL GOAT 4',
        'poster' => "https://$host/stremio_oneplay/logos/canalgoat.jpg",
        'background' => "https://$host/stremio_oneplay/logos/canalgoat.jpg",
        'description' => 'CANAL GOAT 4 ao vivo.',
        'genres' => ['Esportes'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/CANALGOAT4/index.fmp4.m3u8",
                "title" => "CANAL GOAT 4",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/CANALGOAT4/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:ufcfightpass1',
        'type' => 'tv',
        'name' => 'UFC FIGHT PASS 1',
        'poster' => "https://$host/stremio_oneplay/logos/ufcfightpass.jpg",
        'background' => "https://$host/stremio_oneplay/logos/ufcfightpass.jpg",
        'description' => 'canal UFC FIGHT PASS 1 ao vivo.',
        'genres' => ['Esportes'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/UFCFIGHTPASS1/index.fmp4.m3u8",
                "title" => "UFC FIGHT PASS 1",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/UFCFIGHTPASS1/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:ufcfightpass2',
        'type' => 'tv',
        'name' => 'UFC FIGHT PASS 2',
        'poster' => "https://$host/stremio_oneplay/logos/ufcfightpass.jpg",
        'background' => "https://$host/stremio_oneplay/logos/ufcfightpass.jpg",
        'description' => 'canal UFC FIGHT PASS 2 ao vivo.',
        'genres' => ['Esportes'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/UFCFIGHTPASS2/index.fmp4.m3u8",
                "title" => "UFC FIGHT PASS 2",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/UFCFIGHTPASS2/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:ufcfightpass3',
        'type' => 'tv',
        'name' => 'UFC FIGHT PASS 3',
        'poster' => "https://$host/stremio_oneplay/logos/ufcfightpass.jpg",
        'background' => "https://$host/stremio_oneplay/logos/ufcfightpass.jpg",
        'description' => 'canal UFC FIGHT PASS 3 ao vivo.',
        'genres' => ['Esportes'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/UFCFIGHTPASS3/index.fmp4.m3u8",
                "title" => "UFC FIGHT PASS 3",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/UFCFIGHTPASS3/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:disneyplus1',
        'type' => 'tv',
        'name' => 'DISNEY+ 1',
        'poster' => "https://$host/stremio_oneplay/logos/disneyplus.png",
        'background' => "https://$host/stremio_oneplay/logos/disneyplus.png",
        'description' => 'canal DISNEY+ 1 ao vivo.',
        'genres' => ['Esportes'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/DISNEY+1/index.fmp4.m3u8",
                "title" => "DISNEY+ 1",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/DISNEY+1/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:disneyplus2',
        'type' => 'tv',
        'name' => 'DISNEY+ 2',
        'poster' => "https://$host/stremio_oneplay/logos/disneyplus.png",
        'background' => "https://$host/stremio_oneplay/logos/disneyplus.png",
        'description' => 'canal DISNEY+ 2 ao vivo.',
        'genres' => ['Esportes'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/DISNEY+2/index.fmp4.m3u8",
                "title" => "DISNEY+ 2",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/DISNEY+2/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:disneyplus3',
        'type' => 'tv',
        'name' => 'DISNEY+ 3',
        'poster' => "https://$host/stremio_oneplay/logos/disneyplus.png",
        'background' => "https://$host/stremio_oneplay/logos/disneyplus.png",
        'description' => 'canal DISNEY+ 3 ao vivo.',
        'genres' => ['Esportes'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/DISNEY+3/index.fmp4.m3u8",
                "title" => "DISNEY+ 3",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/DISNEY+3/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:disneyplus4',
        'type' => 'tv',
        'name' => 'DISNEY+ 4',
        'poster' => "https://$host/stremio_oneplay/logos/disneyplus.png",
        'background' => "https://$host/stremio_oneplay/logos/disneyplus.png",
        'description' => 'canal DISNEY+ 4 ao vivo.',
        'genres' => ['Esportes'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/DISNEY+4/index.fmp4.m3u8",
                "title" => "DISNEY+ 4",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/DISNEY+4/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:disneyplus5',
        'type' => 'tv',
        'name' => 'DISNEY+ 5',
        'poster' => "https://$host/stremio_oneplay/logos/disneyplus.png",
        'background' => "https://$host/stremio_oneplay/logos/disneyplus.png",
        'description' => 'canal DISNEY+ 5 ao vivo.',
        'genres' => ['Esportes'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/DISNEY+5/index.fmp4.m3u8",
                "title" => "DISNEY+ 5",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/DISNEY+5/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:disneyplus6',
        'type' => 'tv',
        'name' => 'DISNEY+ 6',
        'poster' => "https://$host/stremio_oneplay/logos/disneyplus.png",
        'background' => "https://$host/stremio_oneplay/logos/disneyplus.png",
        'description' => 'canal DISNEY+ 6 ao vivo.',
        'genres' => ['Esportes'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/DISNEY+6/index.fmp4.m3u8",
                "title" => "DISNEY+ 6",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/DISNEY+6/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:eventosextra',
        'type' => 'tv',
        'name' => 'EVENTOS EXTRAS',
        'poster' => "https://$host/stremio_oneplay/logos/ppv.jpg",
        'background' => "https://$host/stremio_oneplay/logos/ppv.jpg",
        'description' => 'canal EVENTOS EXTRAS ao vivo.',
        'genres' => ['Esportes'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/Eventos_Extras_01/index.fmp4.m3u8",
                "title" => "EVENTOS EXTRAS",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/Eventos_Extras_01/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:dazn1',
        'type' => 'tv',
        'name' => 'DAZN 1',
        'poster' => "https://$host/stremio_oneplay/logos/dazn.png",
        'background' => "https://$host/stremio_oneplay/logos/dazn.png",
        'description' => 'canal DAZN 1 ao vivo.',
        'genres' => ['Esportes'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/DAZN_1/index.fmp4.m3u8",
                "title" => "DAZN 1",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/DAZN_1/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:dazn2',
        'type' => 'tv',
        'name' => 'DAZN 2',
        'poster' => "https://$host/stremio_oneplay/logos/dazn.png",
        'background' => "https://$host/stremio_oneplay/logos/dazn.png",
        'description' => 'canal DAZN 2 ao vivo.',
        'genres' => ['Esportes'],
        'streams' => [
            [
                "url" => "https://panel.embehub.com/DAZN_2/index.fmp4.m3u8",
                "title" => "DAZN 2",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://panel.embehub.com/DAZN_2/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:dazn3',
        'type' => 'tv',
        'name' => 'DAZN 3',
        'poster' => "https://$host/stremio_oneplay/logos/dazn.png",
        'background' => "https://$host/stremio_oneplay/logos/dazn.png",
        'description' => 'canal DAZN 3 ao vivo.',
        'genres' => ['Esportes'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/DAZN_3/index.fmp4.m3u8",
                "title" => "DAZN 3",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/DAZN_3/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:dazn4',
        'type' => 'tv',
        'name' => 'DAZN 4',
        'poster' => "https://$host/stremio_oneplay/logos/dazn.png",
        'background' => "https://$host/stremio_oneplay/logos/dazn.png",
        'description' => 'canal DAZN 4 ao vivo.',
        'genres' => ['Esportes'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/DAZN_4/index.fmp4.m3u8",
                "title" => "DAZN 4",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/DAZN_4/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:cartoon',
        'type' => 'tv',
        'name' => 'CARTOON NETWORK',
        'poster' => "https://$host/stremio_oneplay/logos/cartoon.jpg",
        'background' => "https://$host/stremio_oneplay/logos/cartoon.jpg",
        'description' => 'canal CARTOON NETWORK ao vivo.',
        'genres' => ['Infantil'],
        'streams' => [
            [
                "url" => "https://embedcanaistv.club/cartoonnetwork/video.m3u8",
                "title" => "CARTOON NETWORK",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Origin" => "https://embedcanaistv.com",
                            "Referer" => "https://embedcanaistv.com/"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:discoverykids',
        'type' => 'tv',
        'name' => 'DISCOVERY KIDS',
        'poster' => "https://$host/stremio_oneplay/logos/discoverykids.jpg",
        'background' => "https://$host/stremio_oneplay/logos/discoverykids.jpg",
        'description' => 'canal DISCOVERY KIDS ao vivo.',
        'genres' => ['Infantil'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/DISCOVERY_kids/index.fmp4.m3u8",
                "title" => "DISCOVERY KIDS",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/DISCOVERY_kids/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:disney',
        'type' => 'tv',
        'name' => 'DISNEY CHANNEL',
        'poster' => "https://$host/stremio_oneplay/logos/disney.jpg",
        'background' => "https://$host/stremio_oneplay/logos/disney.jpg",
        'description' => 'canal DISNEY CHANNEL ao vivo.',
        'genres' => ['Infantil'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/disney_channel/index.fmp4.m3u8",
                "title" => "DISNEY CHANNEL",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/disney_channel/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:nick',
        'type' => 'tv',
        'name' => 'NICKELODEON',
        'poster' => "https://$host/stremio_oneplay/logos/nick.jpg",
        'background' => "https://$host/stremio_oneplay/logos/nick.jpg",
        'description' => 'canal NICKELODEON ao vivo.',
        'genres' => ['Infantil'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/Nickelodeon/index.fmp4.m3u8",
                "title" => "NICKELODEON",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/Nickelodeon/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:nickjr',
        'type' => 'tv',
        'name' => 'NICK JR.',
        'poster' => "https://$host/stremio_oneplay/logos/nickjr.jpg",
        'background' => "https://$host/stremio_oneplay/logos/nickjr.jpg",
        'description' => 'canal NICK JR. ao vivo.',
        'genres' => ['Infantil'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/NICK_JR/index.fmp4.m3u8",
                "title" => "NICK JR.",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/NICK_JR/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:cartoonito',
        'type' => 'tv',
        'name' => 'CARTOONITO',
        'poster' => "https://$host/stremio_oneplay/logos/cartoonito.jpg",
        'background' => "https://$host/stremio_oneplay/logos/cartoonito.jpg",
        'description' => 'canal CARTOONITO ao vivo.',
        'genres' => ['Infantil'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/cartoonito/index.fmp4.m3u8",
                "title" => "CARTOONITO",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/cartoonito/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:globinho',
        'type' => 'tv',
        'name' => 'GLOBINHO',
        'poster' => "https://$host/stremio_oneplay/logos/globinho.png",
        'background' => "https://$host/stremio_oneplay/logos/globinho.png",
        'description' => 'canal GLOBINHO ao vivo.',
        'genres' => ['Infantil'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/GLOOBINHO/index.fmp4.m3u8",
                "title" => "GLOBINHO",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/GLOOBINHO/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:gloob',
        'type' => 'tv',
        'name' => 'GLOOB',
        'poster' => "https://$host/stremio_oneplay/logos/gloob.png",
        'background' => "https://$host/stremio_oneplay/logos/gloob.png",
        'description' => 'canal GLOOB ao vivo.',
        'genres' => ['Infantil'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/GLOOB/index.fmp4.m3u8",
                "title" => "GLOOB",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/GLOOB/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:bandnews',
        'type' => 'tv',
        'name' => 'BAND NEWS',
        'poster' => "https://$host/stremio_oneplay/logos/bandnews.jpg",
        'background' => "https://$host/stremio_oneplay/logos/bandnews.jpg",
        'description' => 'canal BAND NEWS ao vivo.',
        'genres' => ['Noticias'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/BANDNEWS/index.fmp4.m3u8",
                "title" => "BAND NEWS",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/BANDNEWS/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:cnnbrasil',
        'type' => 'tv',
        'name' => 'CNN BRASIL',
        'poster' => "https://$host/stremio_oneplay/logos/cnnbrasil.jpg",
        'background' => "https://$host/stremio_oneplay/logos/cnnbrasil.jpg",
        'description' => 'canal CNN BRASIL ao vivo.',
        'genres' => ['Noticias'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/CNNBRASIL/index.fmp4.m3u8",
                "title" => "CNN BRASIL",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/CNNBRASIL/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:jovempannews',
        'type' => 'tv',
        'name' => 'JOVEM PAN NEWS',
        'poster' => "https://$host/stremio_oneplay/logos/jovempannews.jpg",
        'background' => "https://$host/stremio_oneplay/logos/jovempannews.jpg",
        'description' => 'canal JOVEM PAN NEWS ao vivo.',
        'genres' => ['Noticias'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/JOVEMPANNEWS/index.fmp4.m3u8",
                "title" => "JOVEM PAN NEWS",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/JOVEMPANNEWS/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:recordnews',
        'type' => 'tv',
        'name' => 'RECORD NEWS',
        'poster' => "https://$host/stremio_oneplay/logos/recordnews.png",
        'background' => "https://$host/stremio_oneplay/logos/recordnews.png",
        'description' => 'canal RECORD NEWS ao vivo.',
        'genres' => ['Noticias'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/RECORDNEWS/index.fmp4.m3u8",
                "title" => "RECORD NEWS",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/RECORDNEWS/index.fmp4.m3u8"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:globonews',
        'type' => 'tv',
        'name' => 'GLOBO NEWS',
        'poster' => "https://$host/stremio_oneplay/logos/globonews.png",
        'background' => "https://$host/stremio_oneplay/logos/globonews.png",
        'description' => 'canal GLOBO NEWS ao vivo.',
        'genres' => ['Noticias'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/GLOBONEWS/index.fmp4.m3u8",
                "title" => "GLOBO NEWS",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/GLOBONEWS/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:plutoanime',
        'type' => 'tv',
        'name' => 'PLUTO ANIME',
        'poster' => "https://$host/stremio_oneplay/logos/plutotv.png",
        'background' => "https://$host/stremio_oneplay/logos/plutotv.png",
        'description' => 'canal PLUTO ANIME ao vivo.',
        'genres' => ['PLUTO TV'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/Anime/index.fmp4.m3u8",
                "title" => "PLUTO ANIME",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/Anime/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:plutoanime',
        'type' => 'tv',
        'name' => 'PLUTO ANIME AÇÃO',
        'poster' => "https://$host/stremio_oneplay/logos/plutotv.png",
        'background' => "https://$host/stremio_oneplay/logos/plutotv.png",
        'description' => 'canal PLUTO ANIME AÇÃO ao vivo.',
        'genres' => ['PLUTO TV'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/Animeacao/index.fmp4.m3u8",
                "title" => "PLUTO ANIME AÇÃO",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/Animeacao/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:betplutotv',
        'type' => 'tv',
        'name' => 'BET PLUTO TV',
        'poster' => "https://$host/stremio_oneplay/logos/plutotv.png",
        'background' => "https://$host/stremio_oneplay/logos/plutotv.png",
        'description' => 'canal BET PLUTO TV ao vivo.',
        'genres' => ['PLUTO TV'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/BETPlutoTV/index.fmp4.m3u8",
                "title" => "BET PLUTO TV",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/BETPlutoTV/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:plutotvcineclassicos',
        'type' => 'tv',
        'name' => 'PLUTO TV CINE CLASSICOS',
        'poster' => "https://$host/stremio_oneplay/logos/plutotv.png",
        'background' => "https://$host/stremio_oneplay/logos/plutotv.png",
        'description' => 'canal PLUTO TV CINE CLASSICOS ao vivo.',
        'genres' => ['PLUTO TV'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/CineClassicos/index.fmp4.m3u8",
                "title" => "PLUTO TV CINE CLASSICOS",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/CineClassicos/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:plutocinecomedia',
        'type' => 'tv',
        'name' => 'PLUTO CINE COMÉDIA',
        'poster' => "https://$host/stremio_oneplay/logos/plutotv.png",
        'background' => "https://$host/stremio_oneplay/logos/plutotv.png",
        'description' => 'canal PLUTO CINE COMÉDIA ao vivo.',
        'genres' => ['PLUTO TV'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/CineComedia/index.fmp4.m3u8",
                "title" => "PLUTO CINE COMÉDIA",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/CineComedia/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:plutocinedrama',
        'type' => 'tv',
        'name' => 'PLUTO CINE DRAMA',
        'poster' => "https://$host/stremio_oneplay/logos/plutotv.png",
        'background' => "https://$host/stremio_oneplay/logos/plutotv.png",
        'description' => 'canal PLUTO CINE DRAMA ao vivo.',
        'genres' => ['PLUTO TV'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/CineDrama/index.fmp4.m3u8",
                "title" => "PLUTO CINE DRAMA",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/CineDrama/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:plutocinefamilia',
        'type' => 'tv',
        'name' => 'PLUTO CINE FAMILIA',
        'poster' => "https://$host/stremio_oneplay/logos/plutotv.png",
        'background' => "https://$host/stremio_oneplay/logos/plutotv.png",
        'description' => 'canal PLUTO CINE FAMILIA ao vivo.',
        'genres' => ['PLUTO TV'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/CineFamilia/index.fmp4.m3u8",
                "title" => "PLUTO CINE FAMILIA",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/CineFamilia/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:plutocineromance',
        'type' => 'tv',
        'name' => 'PLUTO CINE ROMANCE',
        'poster' => "https://$host/stremio_oneplay/logos/plutotv.png",
        'background' => "https://$host/stremio_oneplay/logos/plutotv.png",
        'description' => 'canal PLUTO CINE ROMANCE ao vivo.',
        'genres' => ['PLUTO TV'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/CineRomance/index.fmp4.m3u8",
                "title" => "PLUTO CINE ROMANCE",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/CineRomance/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:plutocinesucessos',
        'type' => 'tv',
        'name' => 'PLUTO CINE SUCESSOS',
        'poster' => "https://$host/stremio_oneplay/logos/plutotv.png",
        'background' => "https://$host/stremio_oneplay/logos/plutotv.png",
        'description' => 'canal PLUTO CINE SUCESSOS ao vivo.',
        'genres' => ['PLUTO TV'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/CineSucessos/index.fmp4.m3u8",
                "title" => "PLUTO CINE SUCESSOS",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/CineSucessos/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:plutocineterror',
        'type' => 'tv',
        'name' => 'PLUTO CINE TERROR',
        'poster' => "https://$host/stremio_oneplay/logos/plutotv.png",
        'background' => "https://$host/stremio_oneplay/logos/plutotv.png",
        'description' => 'canal PLUTO CINE TERROR ao vivo.',
        'genres' => ['PLUTO TV'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/CineTerror/index.fmp4.m3u8",
                "title" => "PLUTO CINE TERROR",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/CineTerror/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:plutocomedia',
        'type' => 'tv',
        'name' => 'PLUTO COMÉDIA',
        'poster' => "https://$host/stremio_oneplay/logos/plutotv.png",
        'background' => "https://$host/stremio_oneplay/logos/plutotv.png",
        'description' => 'canal PLUTO COMÉDIA ao vivo.',
        'genres' => ['PLUTO TV'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/Comedia/index.fmp4.m3u8",
                "title" => "PLUTO COMÉDIA",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/Comedia/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:plutocomedycentral',
        'type' => 'tv',
        'name' => 'PLUTO COMEDY CENTRAL',
        'poster' => "https://$host/stremio_oneplay/logos/plutotv.png",
        'background' => "https://$host/stremio_oneplay/logos/plutotv.png",
        'description' => 'canal PLUTO COMEDY CENTRAL ao vivo.',
        'genres' => ['PLUTO TV'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/ComedyCentral/index.fmp4.m3u8",
                "title" => "PLUTO COMEDY CENTRAL",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/ComedyCentral/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:plutofilmesacao',
        'type' => 'tv',
        'name' => 'PLUTO FILMES AÇÃO',
        'poster' => "https://$host/stremio_oneplay/logos/plutotv.png",
        'background' => "https://$host/stremio_oneplay/logos/plutotv.png",
        'description' => 'canal PLUTO FILMES AÇÃO ao vivo.',
        'genres' => ['PLUTO TV'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/FilmesAcao/index.fmp4.m3u8",
                "title" => "PLUTO FILMES AÇÃO",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/FilmesAcao/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:plutofilmenacionais',
        'type' => 'tv',
        'name' => 'PLUTO FILMES NACIONAIS',
        'poster' => "https://$host/stremio_oneplay/logos/plutotv.png",
        'background' => "https://$host/stremio_oneplay/logos/plutotv.png",
        'description' => 'canal PLUTO FILMES NACIONAIS ao vivo.',
        'genres' => ['PLUTO TV'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/FilmesNacionais/index.fmp4.m3u8",
                "title" => "PLUTO FILMES NACIONAIS",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/FilmesNacionais/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:plutoinvestigacao',
        'type' => 'tv',
        'name' => 'PLUTO INVESTIGAÇÃO',
        'poster' => "https://$host/stremio_oneplay/logos/plutotv.png",
        'background' => "https://$host/stremio_oneplay/logos/plutotv.png",
        'description' => 'canal PLUTO INVESTIGAÇÃO ao vivo.',
        'genres' => ['PLUTO TV'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/Investigacao/index.fmp4.m3u8",
                "title" => "PLUTO INVESTIGAÇÃO",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/Investigacao/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:plutokids',
        'type' => 'tv',
        'name' => 'PLUTO KIDS',
        'poster' => "https://$host/stremio_oneplay/logos/plutotv.png",
        'background' => "https://$host/stremio_oneplay/logos/plutotv.png",
        'description' => 'canal PLUTO KIDS ao vivo.',
        'genres' => ['PLUTO TV'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/PlutoKids/index.fmp4.m3u8",
                "title" => "PLUTO KIDS",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/PlutoKids/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:plutonatureza',
        'type' => 'tv',
        'name' => 'PLUTO NATUREZA',
        'poster' => "https://$host/stremio_oneplay/logos/plutotv.png",
        'background' => "https://$host/stremio_oneplay/logos/plutotv.png",
        'description' => 'canal PLUTO NATUREZA ao vivo.',
        'genres' => ['PLUTO TV'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/Plutonatureza/index.fmp4.m3u8",
                "title" => "PLUTO NATUREZA",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/Plutonatureza/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:plutoretro',
        'type' => 'tv',
        'name' => 'PLUTO RETRÔ',
        'poster' => "https://$host/stremio_oneplay/logos/plutotv.png",
        'background' => "https://$host/stremio_oneplay/logos/plutotv.png",
        'description' => 'canal PLUTO RETRÔ ao vivo.',
        'genres' => ['PLUTO TV'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/Plutoretro/index.fmp4.m3u8",
                "title" => "PLUTO RETRÔ",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/Plutoretro/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:plutoshowsstingray',
        'type' => 'tv',
        'name' => 'PLUTO SHOWS POR STINGRAY',
        'poster' => "https://$host/stremio_oneplay/logos/plutotv.png",
        'background' => "https://$host/stremio_oneplay/logos/plutotv.png",
        'description' => 'canal PLUTO SHOWS POR STINGRAY ao vivo.',
        'genres' => ['PLUTO TV'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/PlutoShowsporStingray/index.fmp4.m3u8",
                "title" => "PLUTO SHOWS POR STINGRAY",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/PlutoShowsporStingray/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:plutomisterios',
        'type' => 'tv',
        'name' => 'PLUTO MISTÉRIOS',
        'poster' => "https://$host/stremio_oneplay/logos/plutotv.png",
        'background' => "https://$host/stremio_oneplay/logos/plutotv.png",
        'description' => 'canal PLUTO MISTÉRIOS ao vivo.',
        'genres' => ['PLUTO TV'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/Plutomisterios/index.fmp4.m3u8",
                "title" => "PLUTO MISTÉRIOS",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/Plutomisterios/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:24hvaiqcola',
        'type' => 'tv',
        'name' => '24H VAI QUE COLA',
        'poster' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'background' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'description' => 'canal 24H VAI QUE COLA ao vivo.',
        'genres' => ['CANAL 24H'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/24H_vai_que_cola/index.fmp4.m3u8",
                "title" => "24H VAI QUE COLA",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/24H_vai_que_cola/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:24hxena',
        'type' => 'tv',
        'name' => '24H XENA',
        'poster' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'background' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'description' => 'canal 24H XENA ao vivo.',
        'genres' => ['CANAL 24H'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/24H_Xena/index.fmp4.m3u8",
                "title" => "24H XENA",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/24H_Xena/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ], 
    [
        'id' => 'oneplay:24hummaluco',
        'type' => 'tv',
        'name' => '24H UM MALUCO NO PEDAÇO',
        'poster' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'background' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'description' => 'canal 24H UM MALUCO NO PEDAÇO ao vivo.',
        'genres' => ['CANAL 24H'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/24H_um_maluco_no_pedaco/index.fmp4.m3u8",
                "title" => "24H UM MALUCO NO PEDAÇO",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/24H_um_maluco_no_pedaco/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:24htresespias',
        'type' => 'tv',
        'name' => '24H TRÊS ESPIÃS DEMAIS',
        'poster' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'background' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'description' => 'canal 24H 24H TRÊS ESPIÃS DEMAIS ao vivo.',
        'genres' => ['CANAL 24H'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/24H_tres_espias_demais/index.fmp4.m3u8",
                "title" => "24H TRÊS ESPIÃS DEMAIS",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/24H_tres_espias_demais/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:24htodomundoodeia',
        'type' => 'tv',
        'name' => '24H TODO MUNDO ODEIA O CHRIS',
        'poster' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'background' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'description' => 'canal 24H TODO MUNDO ODEIA O CHRIS ao vivo.',
        'genres' => ['CANAL 24H'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/24H_todo_mundo_odeia_o_chris/index.fmp4.m3u8",
                "title" => "24H TODO MUNDO ODEIA O CHRIS",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/24H_todo_mundo_odeia_o_chris/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:24htartarugasninjas',
        'type' => 'tv',
        'name' => '24H TARTARUGAS NINJAS',
        'poster' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'background' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'description' => 'canal 24H TARTARUGAS NINJAS ao vivo.',
        'genres' => ['CANAL 24H'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/24H_tartarugas_ninjas/index.fmp4.m3u8",
                "title" => "24H TARTARUGAS NINJAS",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/24H_tartarugas_ninjas/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:24hsobrenatural',
        'type' => 'tv',
        'name' => '24H SOBRENATURAL',
        'poster' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'background' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'description' => 'canal 24H SOBRENATURAL ao vivo.',
        'genres' => ['CANAL 24H'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/24H_Sobrenatural/index.fmp4.m3u8",
                "title" => "24H SOBRENATURAL",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/24H_Sobrenatural/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:24hsmallville',
        'type' => 'tv',
        'name' => '24H SMALLVILLE',
        'poster' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'background' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'description' => 'canal 24H SOBRENATURAL ao vivo.',
        'genres' => ['CANAL 24H'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/24H_SMALLVILLE/index.fmp4.m3u8",
                "title" => "24H SMALLVILLE",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/24H_SMALLVILLE/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:24hkenanekel',
        'type' => 'tv',
        'name' => '24H KENAN E KEL',
        'poster' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'background' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'description' => 'canal 24H KENAN E KEL ao vivo.',
        'genres' => ['CANAL 24H'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/24H_Kenan_e_Kel/index.fmp4.m3u8",
                "title" => "24H KENAN E KEL",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/24H_Kenan_e_Kel/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:24hhercules',
        'type' => 'tv',
        'name' => '24H HERCULES',
        'poster' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'background' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'description' => 'canal 24H HERCULES ao vivo.',
        'genres' => ['CANAL 24H'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/24H_HeRCULES/index.fmp4.m3u8",
                "title" => "24H HERCULES",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/24H_HeRCULES/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:24hapatroa',
        'type' => 'tv',
        'name' => '24H EU, A PATROA E AS CRIANÇAS',
        'poster' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'background' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'description' => 'canal 24H EU, A PATROA E AS CRIANÇAS ao vivo.',
        'genres' => ['CANAL 24H'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/24H_A_PATROA_E_AS_CRIANCAS/index.fmp4.m3u8",
                "title" => "24H EU, A PATROA E AS CRIANÇAS",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/24H_A_PATROA_E_AS_CRIANCAS/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:24hdoishomensemeio',
        'type' => 'tv',
        'name' => '24H DOIS HOMENS E MEIO',
        'poster' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'background' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'description' => 'canal 24H DOIS HOMENS E MEIO ao vivo.',
        'genres' => ['CANAL 24H'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/24H_DOIS_HOMENS_E_MEIO/index.fmp4.m3u8",
                "title" => "24H DOIS HOMENS E MEIO",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/24H_DOIS_HOMENS_E_MEIO/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:24hcaocoragem',
        'type' => 'tv',
        'name' => '24H CÃO CORAGEM',
        'poster' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'background' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'description' => 'canal 24H CÃO CORAGEM ao vivo.',
        'genres' => ['CANAL 24H'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/24H_CAO_CORAGEM/index.fmp4.m3u8",
                "title" => "24H CÃO CORAGEM",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/24H_CAO_CORAGEM/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:24hchaves',
        'type' => 'tv',
        'name' => '24H CHAVES',
        'poster' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'background' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'description' => 'canal 24H CHAVES ao vivo.',
        'genres' => ['CANAL 24H'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/24H_Chaves/index.fmp4.m3u8",
                "title" => "24H CHAVES",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/24H_Chaves/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:24hchapolimcolorado',
        'type' => 'tv',
        'name' => '24H CHAPOLIM COLORADO',
        'poster' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'background' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'description' => 'canal 24H CHAPOLIM COLORADO ao vivo.',
        'genres' => ['CANAL 24H'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/24H_CHAPOLIM_COLORADO/index.fmp4.m3u8",
                "title" => "24H CHAPOLIM COLORADO",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/24H_CHAPOLIM_COLORADO/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:24hbreakingbad',
        'type' => 'tv',
        'name' => '24H BREAKING BAD',
        'poster' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'background' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'description' => 'canal 24H BREAKING BAD ao vivo.',
        'genres' => ['CANAL 24H'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/24H_BREAKING_BAD/index.fmp4.m3u8",
                "title" => "24H BREAKING BAD",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/24H_BREAKING_BAD/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:24hagrandefamilia',
        'type' => 'tv',
        'name' => '24H A GRANDE FAMILIA',
        'poster' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'background' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'description' => 'canal 24H A GRANDE FAMILIA ao vivo.',
        'genres' => ['CANAL 24H'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/24H_A_GRANDE_FAMILIA/index.fmp4.m3u8",
                "title" => "24H A GRANDE FAMILIA",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/24H_A_GRANDE_FAMILIA/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:24hxman',
        'type' => 'tv',
        'name' => '24H X MAN',
        'poster' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'background' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'description' => 'canal 24H X MAN ao vivo.',
        'genres' => ['CANAL 24H'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/24H_x_man/index.fmp4.m3u8",
                "title" => "24H X MAN",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/24H_x_man/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:24htonejerry',
        'type' => 'tv',
        'name' => '24H TON E JERRY',
        'poster' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'background' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'description' => 'canal 24H TON E JERRY ao vivo.',
        'genres' => ['CANAL 24H'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/24H_tom_e_jerry/index.fmp4.m3u8",
                "title" => "24H TON E JERRY",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/24H_tom_e_jerry/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:24hsuperman',
        'type' => 'tv',
        'name' => '24H SUPERMAN',
        'poster' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'background' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'description' => 'canal 24H SUPERMAN ao vivo.',
        'genres' => ['CANAL 24H'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/24H_SUPERMAN/index.fmp4.m3u8",
                "title" => "24H SUPERMAN",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/24H_SUPERMAN/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:24hsuperchoque',
        'type' => 'tv',
        'name' => '24H SUPER CHOQUE',
        'poster' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'background' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'description' => 'canal 24H SUPER CHOQUE ao vivo.',
        'genres' => ['CANAL 24H'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/24H_SUPER_CHOQUE/index.fmp4.m3u8",
                "title" => "24H SUPER CHOQUE",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/24H_SUPER_CHOQUE/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:24hsouthpark',
        'type' => 'tv',
        'name' => '24H SOUTH PARK',
        'poster' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'background' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'description' => 'canal 24H SOUTH PARK ao vivo.',
        'genres' => ['CANAL 24H'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/24H_SOUTH_PARK/index.fmp4.m3u8",
                "title" => "24H SOUTH PARK",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/24H_SOUTH_PARK/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:24hscoobydoo',
        'type' => 'tv',
        'name' => '24H SCOOBY DOO',
        'poster' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'background' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'description' => 'canal 24H SCOOBY DOO ao vivo.',
        'genres' => ['CANAL 24H'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/24H_SCOOBY_DOO/index.fmp4.m3u8",
                "title" => "24H SCOOBY DOO",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/24H_SCOOBY_DOO/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:24hpokemon',
        'type' => 'tv',
        'name' => '24H POKEMON',
        'poster' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'background' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'description' => 'canal 24H POKEMON ao vivo.',
        'genres' => ['CANAL 24H'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/24H_POKEMON/index.fmp4.m3u8",
                "title" => "24H POKEMON",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/24H_POKEMON/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:24hpeppapig',
        'type' => 'tv',
        'name' => '24H PEPPA PIG',
        'poster' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'background' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'description' => 'canal 24H PEPPA PIG ao vivo.',
        'genres' => ['CANAL 24H'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/24H_PEPPA_PIG/index.fmp4.m3u8",
                "title" => "24H PEPPA PIG",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/24H_PEPPA_PIG/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:24hossimpsons',
        'type' => 'tv',
        'name' => '24H OS SIMPSONS',
        'poster' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'background' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'description' => 'canal 24H OS SIMPSONS ao vivo.',
        'genres' => ['CANAL 24H'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/24H_OS_SIMPSONS/index.fmp4.m3u8",
                "title" => "24H OS SIMPSONS",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/24H_OS_SIMPSONS/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:24hcavernadodragao',
        'type' => 'tv',
        'name' => '24H CAVERNA DO DRAGÃO',
        'poster' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'background' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'description' => 'canal 24H CAVERNA DO DRAGÃO ao vivo.',
        'genres' => ['CANAL 24H'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/24H_CAVERNA_DO_DRAGAO/index.fmp4.m3u8",
                "title" => "24H CAVERNA DO DRAGÃO",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/24H_CAVERNA_DO_DRAGAO/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:24hnarutoshippuden',
        'type' => 'tv',
        'name' => '24H NARUTO SHIPPUDEN',
        'poster' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'background' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'description' => 'canal 24H NARUTO SHIPPUDEN ao vivo.',
        'genres' => ['CANAL 24H'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/24H_NARUTO_SHIPPUDEN/index.fmp4.m3u8",
                "title" => "24H NARUTO SHIPPUDEN",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/24H_NARUTO_SHIPPUDEN/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:24hnaruto',
        'type' => 'tv',
        'name' => '24H NARUTO',
        'poster' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'background' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'description' => 'canal 24H NARUTO ao vivo.',
        'genres' => ['CANAL 24H'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/24H_Naruto/index.fmp4.m3u8",
                "title" => "24H NARUTO",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/24H_Naruto/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:24hdragonballz',
        'type' => 'tv',
        'name' => '24H DRAGON BALL Z',
        'poster' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'background' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'description' => 'canal 24H DRAGON BALL Z ao vivo.',
        'genres' => ['CANAL 24H'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/24H_DRAGON_BALL_Z/index.fmp4.m3u8",
                "title" => "24H DRAGON BALL Z",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/24H_DRAGON_BALL_Z/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:24hdragonsuper',
        'type' => 'tv',
        'name' => '24H DRAGON SUPER',
        'poster' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'background' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'description' => 'canal 24H DRAGON SUPER ao vivo.',
        'genres' => ['CANAL 24H'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/24H_DRAGON_SUPER/index.fmp4.m3u8",
                "title" => "24H DRAGON SUPER",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/24H_DRAGON_SUPER/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:24hdragonsuper',
        'type' => 'tv',
        'name' => '24H DRAGON SUPER',
        'poster' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'background' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'description' => 'canal 24H DRAGON SUPER ao vivo.',
        'genres' => ['CANAL 24H'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/24H_DRAGON_SUPER/index.fmp4.m3u8",
                "title" => "24H DRAGON SUPER",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/24H_DRAGON_SUPER/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:24hdragonball',
        'type' => 'tv',
        'name' => '24H DRAGON BALL',
        'poster' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'background' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'description' => 'canal 24H DRAGON BALL ao vivo.',
        'genres' => ['CANAL 24H'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/24H_DRAGON_BALL/index.fmp4.m3u8",
                "title" => "24H DRAGON BALL",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/24H_DRAGON_BALL/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:24hchavesdesenho',
        'type' => 'tv',
        'name' => '24H CHAVES DESENHO',
        'poster' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'background' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'description' => 'canal 24H CHAVES DESENHO ao vivo.',
        'genres' => ['CANAL 24H'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/24H_CHAVES_DESENHO/index.fmp4.m3u8",
                "title" => "24H CHAVES DESENHO",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/24H_CHAVES_DESENHO/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:24hbobesponja',
        'type' => 'tv',
        'name' => '24H BOB ESPONJA',
        'poster' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'background' => "https://$host/stremio_oneplay/logos/canal24h.png",
        'description' => 'canal 24H BOB ESPONJA ao vivo.',
        'genres' => ['CANAL 24H'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/24H_BOB_ESPONJA/index.fmp4.m3u8",
                "title" => "24H BOB ESPONJA",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/24H_BOB_ESPONJA/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:bbb25cam1',
        'type' => 'tv',
        'name' => 'BBB 25 CAM 1',
        'poster' => "https://$host/stremio_oneplay/logos/bbb25.png",
        'background' => "https://$host/stremio_oneplay/logos/bbb25.png",
        'description' => 'canal BBB 25 CAM 1 ao vivo.',
        'genres' => ['Variedades'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/bbbcam01/index.fmp4.m3u8",
                "title" => "BBB 25 CAM 1",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/bbbcam01/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:bbb25cam2',
        'type' => 'tv',
        'name' => 'BBB 25 CAM 2',
        'poster' => "https://$host/stremio_oneplay/logos/bbb25.png",
        'background' => "https://$host/stremio_oneplay/logos/bbb25.png",
        'description' => 'canal BBB 25 CAM 2 ao vivo.',
        'genres' => ['Variedades'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/bbbcam02/index.fmp4.m3u8",
                "title" => "BBB 25 CAM 2",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/bbbcam02/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:bbb25cam3',
        'type' => 'tv',
        'name' => 'BBB 25 CAM 3',
        'poster' => "https://$host/stremio_oneplay/logos/bbb25.png",
        'background' => "https://$host/stremio_oneplay/logos/bbb25.png",
        'description' => 'canal BBB 25 CAM 3 ao vivo.',
        'genres' => ['Variedades'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/bbbcam03/index.fmp4.m3u8",
                "title" => "BBB 25 CAM 3",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/bbbcam03/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:bbb25cam4',
        'type' => 'tv',
        'name' => 'BBB 25 CAM 4',
        'poster' => "https://$host/stremio_oneplay/logos/bbb25.png",
        'background' => "https://$host/stremio_oneplay/logos/bbb25.png",
        'description' => 'canal BBB 25 CAM 4 ao vivo.',
        'genres' => ['Variedades'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/bbbcam04/index.fmp4.m3u8",
                "title" => "BBB 25 CAM 4",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/bbbcam04/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:bbb25cam5',
        'type' => 'tv',
        'name' => 'BBB 25 CAM 5',
        'poster' => "https://$host/stremio_oneplay/logos/bbb25.png",
        'background' => "https://$host/stremio_oneplay/logos/bbb25.png",
        'description' => 'canal BBB 25 CAM 5 ao vivo.',
        'genres' => ['Variedades'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/bbbcam05/index.fmp4.m3u8",
                "title" => "BBB 25 CAM 5",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/bbbcam05/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:bbb25cam6',
        'type' => 'tv',
        'name' => 'BBB 25 CAM 6',
        'poster' => "https://$host/stremio_oneplay/logos/bbb25.png",
        'background' => "https://$host/stremio_oneplay/logos/bbb25.png",
        'description' => 'canal BBB 25 CAM 6 ao vivo.',
        'genres' => ['Variedades'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/bbbcam06/index.fmp4.m3u8",
                "title" => "BBB 25 CAM 6",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/bbbcam06/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:bbb25cam7',
        'type' => 'tv',
        'name' => 'BBB 25 CAM 7',
        'poster' => "https://$host/stremio_oneplay/logos/bbb25.png",
        'background' => "https://$host/stremio_oneplay/logos/bbb25.png",
        'description' => 'canal BBB 25 CAM 7 ao vivo.',
        'genres' => ['Variedades'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/bbbcam07/index.fmp4.m3u8",
                "title" => "BBB 25 CAM 7",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/bbbcam07/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:bbb25cam8',
        'type' => 'tv',
        'name' => 'BBB 25 CAM 8',
        'poster' => "https://$host/stremio_oneplay/logos/bbb25.png",
        'background' => "https://$host/stremio_oneplay/logos/bbb25.png",
        'description' => 'canal BBB 25 CAM 8 ao vivo.',
        'genres' => ['Variedades'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/bbbcam08/index.fmp4.m3u8",
                "title" => "BBB 25 CAM 8",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/bbbcam08/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],  
    [
        'id' => 'oneplay:bbb25cam9',
        'type' => 'tv',
        'name' => 'BBB 25 CAM 9',
        'poster' => "https://$host/stremio_oneplay/logos/bbb25.png",
        'background' => "https://$host/stremio_oneplay/logos/bbb25.png",
        'description' => 'canal BBB 25 CAM 9 ao vivo.',
        'genres' => ['Variedades'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/bbbcam09/index.fmp4.m3u8",
                "title" => "BBB 25 CAM 9",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/bbbcam09/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:bbb25cam10',
        'type' => 'tv',
        'name' => 'BBB 25 CAM 10',
        'poster' => "https://$host/stremio_oneplay/logos/bbb25.png",
        'background' => "https://$host/stremio_oneplay/logos/bbb25.png",
        'description' => 'canal BBB 25 CAM 10 ao vivo.',
        'genres' => ['Variedades'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/bbbcam10/index.fmp4.m3u8",
                "title" => "BBB 25 CAM 10",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/bbbcam10/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:bbb25mosaico',
        'type' => 'tv',
        'name' => 'BBB 25 MOSAICO',
        'poster' => "https://$host/stremio_oneplay/logos/bbb25.png",
        'background' => "https://$host/stremio_oneplay/logos/bbb25.png",
        'description' => 'canal BBB 25 MOSAICO ao vivo.',
        'genres' => ['Variedades'],
        'streams' => [
            [
                "url" => "https://play.embehub.com/bbbmosaico/index.fmp4.m3u8",
                "title" => "BBB 25 MOSAICO",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36",
                            "Referer" => "https://play.embehub.com/bbbmosaico/embed.html"
                        ]
                    ]
                ]
            ]
        ]
    ],
    [
        'id' => 'oneplay:kpoptv',
        'type' => 'tv',
        'name' => 'KPOP TV',
        'poster' => "https://$host/stremio_oneplay/logos/kpoptv.png",
        'background' => "https://$host/stremio_oneplay/logos/kpoptv.png",
        'description' => 'canal KPOP TV ao vivo.',
        'genres' => ['Variedades'],
        'streams' => [
            [
                "url" => "https://giatv.bozztv.com/giatv/giatv-kpoptvplay/kpoptvplay/playlist.m3u8",
                "title" => "KPOP TV",
                "behaviorHints" => [
                    "notWebReady" => true,
                    "proxyHeaders" => [
                        "request" => [
                            "User-Agent" => "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/115.0.0.0 Safari/537.36"
                        ]
                    ]
                ]
            ]
        ]
    ]                    


];

// https://embehub.com/ PAGINA 2 esportes
// https://embedmax.site/
//https://embedflix.top/tv/
//https://multicanais.art/ao-vivo/canais-de-esporte-ao-vivo/
//https://reidoscanais.tv/
//https://embedmax.site/
//https://embedstream.org
?>