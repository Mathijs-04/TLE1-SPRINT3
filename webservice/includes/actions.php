<?php
/**
 * @return array
 */
function getDishes()
{
    return [
        [

        ]
    ];
}

/**
 * @param $id
 * @return mixed
 */
function getDishDetails($id)
{
    $tags = [
        "Natuur" => [
            "experience" => "Mystieke Schoonheid van Navagio",
            "Image" => "./img/Navagio_360.webp",
            "information" => "Beleef een prachtige reis naar een bijzondere plek, zonder je huis te verlaten. Stel je voor dat je op het strand staat van een baai op het eiland Zakynthos in Griekenland. Het heldere, blauwe water schittert, hoge rotsen omringen je, en in het zand ligt een oud scheepswrak. Met deze VR-ervaring kun je de rustige schoonheid van 'Shipwreck Bay' zelf ontdekken. Hoor het zachte geluid van de golven en zie de zon die schittert op het water. Geniet van de rust en de natuur, alsof je er echt bent. Deze ervaring is ideaal om even te ontspannen en iets nieuws te beleven. Maak een rustige reis naar dit mooie landschap, zonder dat je je huis uit hoeft..",
            "Expurl" => ""
        ],[
           "experience" => "Verken de Trinity in Shasta-Trinity National Forest",
           "Image" => "./img/Trinity_360.webp",
           "information" => "Stap in een wereld van rust en natuur, waar je de schoonheid van de Trinity-rivier kunt ervaren zonder je huis te verlaten. Deze kalme rivier slingert door het Shasta-Trinity National Forest in Californië, omringd door uitgestrekte bossen en groene heuvels. Met deze VR-ervaring kun je genieten van de serene waterstromen, de frisse lucht en de rustige geluiden van de natuur. Voel je alsof je langs de rivier wandelt, terwijl het water zachtjes kabbelt en de bomen zacht ruisen in de wind. Of je nu even wilt ontsnappen aan de drukte of gewoon wilt genieten van een vredig moment in de natuur, deze ervaring biedt je een ontspannen reis naar een prachtige plek. Ontdek de rust van de Trinity-rivier, allemaal vanuit het comfort van je eigen huis.",
           "Expurl" => "",
        ],[
           "experience" => "Panoramisch Uitzicht over Zakynthos",
           "Image" => "./img/Zonsondergang_360.webp",
           "information" => "Beleef een magische zonsondergang op het prachtige eiland Zakynthos, zonder je huis te verlaten. Vanaf een eeuwenoude Venetiaanse wachttoren kijk je uit over het adembenemende landschap, terwijl de lucht oranje en roze kleurt en de zon langzaam ondergaat.Met deze VR-ervaring sta je midden in deze serene omgeving en voel je de rust van de natuur om je heen. Zie hoe de zon zachtjes verdwijnt achter de horizon en de eilanden baden in het laatste licht van de dag. Het panoramische uitzicht laat je de schoonheid van dit bijzondere moment volledig beleven.Of je nu van prachtige uitzichten houdt of gewoon even wilt ontspannen, deze ervaring biedt je een unieke reis naar een van de mooiste plekken van Griekenland, direct vanuit je eigen woonkamer.",
           "Expurl" => "",
        ],
        "Entertaiment" => [
            "recipe" => "You can make this delicious Dutch meal by ...",
            "tags" => ['unox', 'healthy', 'stamppot', 'boerenkool']
        ],[
            "recipe" => "You can make this delicious Dutch meal by ...",
            "tags" => ['unox', 'healthy', 'stamppot', 'boerenkool']
        ],[
            "recipe" => "You can make this delicious Dutch meal by ...",
            "tags" => ['unox', 'healthy', 'stamppot', 'boerenkool']
        ],
        "Reizen" => [
            "recipe" => "Very nice when your grandma prepares this meal",
            "tags" => ['omnomnom']
        ],[
            "recipe" => "Very nice when your grandma prepares this meal",
            "tags" => ['omnomnom']
        ],[
            "recipe" => "Very nice when your grandma prepares this meal",
            "tags" => ['omnomnom']
        ],

    ];

    return $tags[$id];
}