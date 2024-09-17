<?php
/**
 * @return array
 */

function experienceListMaker()
{
    return [
    [
        "id" => 1,
        "experience" => "",
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
}
/**
 * @param $id
 * @return mixed
 */
function experienceDetails($id)
{
    $tags = [
        1 => [
            "experience" => "",
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
}
