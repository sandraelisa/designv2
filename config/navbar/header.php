<?php
/**
 * Supply the basis for the navbar as an array.
 */
return [
    // Use for styling the menu
    "wrapper" => null,
    "class" => "my-navbar rm-default rm-desktop",

    // Here comes the menu items
    "items" => [
        [
            "text" => "Hem",
            "url" => "",
            "title" => "Första sidan, börja här.",
        ],
        [
            "text" => "Redovisning",
            "url" => "redovisning",
            "title" => "Redovisningstexter från kursmomenten.",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Kmom01",
                        "url" => "redovisning/kmom01",
                        "title" => "Redovisning för kmom01.",
                    ],
                    [
                        "text" => "Kmom02",
                        "url" => "redovisning/kmom02",
                        "title" => "Redovisning för kmom02.",
                    ],
                    [
                        "text" => "Kmom03",
                        "url" => "redovisning/kmom03",
                        "title" => "Redovisning för kmom03.",
                    ],
                    [
                        "text" => "Kmom04",
                        "url" => "redovisning/kmom04",
                        "title" => "Redovisning för kmom04.",
                    ],
                    [
                        "text" => "Kmom05",
                        "url" => "redovisning/kmom05",
                        "title" => "Redovisning för kmom05.",
                    ],
                ],
            ],
        ],
        [
            "text" => "Rapport",
            "url" => "rapport",
            "title" => "Rapporter.",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Färgschema kmom04",
                        "url" => "rapport/fargschema",
                        "title" => "Rapport färgschema",
                    ],
                    [
                        "text" => "Laddningstid kmom05",
                        "url" => "rapport/laddningstid",
                        "title" => "Rapport laddningstid",
                    ],
                ],
            ],
        ],
        [
            "text" => "Om",
            "url" => "om",
            "title" => "Om denna webbplats.",
        ],
        [
            "text" => "Styleväljare",
            "url" => "style",
            "title" => "Välj stylesheet.",
        ],
        [
            "text" => "Verktyg",
            "url" => "verktyg",
            "title" => "Verktyg och möjligheter för utveckling.",
        ],
        [
            "text" => "Blogg",
            "url" => "blogg",
            "title" => "Blogg.",
            "submenu" => [
                "items" => [
                    [
                        "text" => "Mitt första inlägg",
                        "url" => "blogg/mitt-forsta-inlagg",
                        "title" => "Första inlägget",
                    ],
                    [
                        "text" => "Andra inlägget",
                        "url" => "blogg/mitt-andra-inlagg",
                        "title" => "Andra inlägget",
                    ],
                    [
                        "text" => "Tredje inlägget",
                        "url" => "blogg/mitt-tredje-inlagg",
                        "title" => "Tredje inlägget",
                    ],
                ],
            ],
        ],
        [
            "text" => "Test",
            "url" => "test",
            "title" => "Testar markdown.",
        ],
    ],
];
