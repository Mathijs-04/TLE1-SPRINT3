<?php
/**
 * @return array
 */

function experienceListMaker(): array
{
    return [
        [
            "id" => 1,
            "experience" => "groene draak",
            "expImage" => ""
        ],
        [
            "id" => 2,
            "experience" => "vier",
            "expImage" => ""
        ], [
            "id" => 3,
            "experience" => "vijf",
            "expImage" => ""
        ],
    ];

}

/**
 * @param $id
 * @return array
 */

function experienceDetails($id): array
{
    $tags = [
        1 => [
            "experience" => "Boswandeling: Geniet van de natuur",
            "expImage" => "./img/forest_walk_foto.webp",
            "information" => "Ervaar de rust van een boswandeling in onze Boswandeling Experience. Wandel over een zacht pad omringd door hoge bomen en groene bladeren. Terwijl je loopt, hoor je het zachte gezang van vogels en voel je de frisse lucht op je huid. De zon schijnt door de takken, wat een prettige sfeer creëert. Dit is een ideale manier om even uit te rusten en simpelweg te genieten van de natuurlijke schoonheid om je heen. Het is de meest gewone ervaring, maar eentje die je de kans geeft om te ontspannen en op te laden.",
            "Expurl" => "",
        ],
        2 => [
            "experience" => "vijf",
            "expImage" => "",
            "information" => "",
            "Expurl" => "",
        ],
        3 => [
            "experience" => "zes",
            "expImage" => "",
            "information" => "",
            "Expurl" => "",
        ],
    ];
    return $tags[$id] ?? [];
}
