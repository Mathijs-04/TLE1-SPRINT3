<?php
/**
 * @param $
 * @return array
 */
function experienceDetails(): array
{
    $tags = [
        "Natuur" =>
            [
            "experience" => "Forest Walk: Enjoy the Outdoors",
            "Image" => "./img/forest_walk_foto.webp",
            "information" => "Experience the calm of a forest walk in our Forest Walk Experience. Stroll along a soft path surrounded by tall trees and green leaves. As you walk, you can hear the gentle song of birds and feel the fresh air on your skin. The sun shines through the branches, creating a pleasant atmosphere. This is an ideal way to relax and simply enjoy the natural beauty around you. It’s the most ordinary experience, but one that gives you the chance to unwind and recharge.",
            "Expurl" => "",
        ],
        "Entertainment" =>
            [
            "experience" => "Office Life: Start Your Day Right",
            "Image" => "./img/doffice_life_foto.webp",
            "information" => "Start your day in a stylish, modern office space with a clear view of the city in our Office Life Experience. You grab a cup of coffee from a good coffee machine and sit down at your desk, ready to start your work. The space is quiet and organized, perfect for focusing on your tasks. It’s a simple, yet efficient work environment that helps you start your day well and stay productive. Enjoy the simplicity and focus this setting offers.",
            "Expurl" => "",
        ],
        "Reizen" =>
            [
            "experience" => "Night Out with Friends: A Relaxed Evening Together",
            "Image" => "./img/dnight_out_foto.webp",
            "information" => "Enjoy a relaxed evening with friends on a rooftop terrace with a view of the city in our Night Out with Friends Experience. It’s an ordinary evening where you laugh, have conversations, and enjoy a drink with your friends while taking in the view and the atmosphere. The soft city lights and the relaxed environment make it a pleasant way to spend time together. It’s a simple, but delightful way to enjoy the fun and warmth of a night out.",
            "Expurl" => "",
        ],

    ];
    return $tags ?? [];
}
