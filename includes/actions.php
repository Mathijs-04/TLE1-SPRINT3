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
    ],[
        "id" => 3,
        "experience" => "vijf",
        "expImage" => ""
    ],
    ];

} /**
 * @param $id
 * @return array
 */

function experienceDetails($id): array
{
    $tags = [
        1 => [
            "experience" => "gele voeten",
            "expImage" => "",
            "information" => "fietsen met voeten",
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
