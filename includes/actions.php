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
        "experience" => "",
        "image" => ""
    ],[
        "id" => 2,
        "experience" => "",
        "image" => ""
    ],[
        "id" => 2,
        "experience" => "",
        "image" => ""
    ],[
        "id" => 2,
        "experience" => "",
        "image" => ""
    ],
    ];
    /**
     * @param $id
     * @return mixed
     */
}

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
            "experience" => "",
            "image" => "",
            "info" => "",
            "url" => "",
        ],
        3 => [
            "experience" => "",
            "image" => "",
            "info" => "",
            "url" => "",
        ],
    ];
    return $tags[$id];
    /**
     * @param $id
     * @return mixed
     */
}
