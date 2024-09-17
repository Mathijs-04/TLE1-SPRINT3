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
            "url" => "",
        ],
        2 => [
            "experience" => "vijf",
            "expImage" => "",
            "information" => "",
            "url" => "",
        ],
        3 => [
            "experience" => "zes",
            "expImage" => "",
            "information" => "",
            "url" => "",
        ],
    ];
    return $tags[$id] ?? [];
}
