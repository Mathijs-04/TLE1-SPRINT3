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
        "image" => ""
    ],
    [
        "id" => 2,
        "experience" => "vier",
        "image" => ""
    ],[
        "id" => 3,
        "experience" => "vijf",
        "image" => ""
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
            "image" => "",
            "info" => "",
            "url" => "",
        ],
        2 => [
            "experience" => "vijf",
            "image" => "",
            "info" => "",
            "url" => "",
        ],
        3 => [
            "experience" => "zes",
            "image" => "",
            "info" => "",
            "url" => "",
        ],
    ];
    return $tags[$id] ?? [];
}
