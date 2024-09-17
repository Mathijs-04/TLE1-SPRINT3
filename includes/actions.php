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
            "expImage" => "./img/placeholder.png",
            "information" => "Ervaar de rust van een boswandeling in onze Boswandeling Experience. Wandel over een zacht pad omringd door hoge bomen en groene bladeren. Terwijl je loopt, hoor je het zachte gezang van vogels en voel je de frisse lucht op je huid. De zon schijnt door de takken, wat een prettige sfeer creëert. Dit is een ideale manier om even uit te rusten en simpelweg te genieten van de natuurlijke schoonheid om je heen. Het is de meest gewone ervaring, maar eentje die je de kans geeft om te ontspannen en op te laden.",
            "Expurl" => "",
        ],
        2 => [
            "experience" => "Kantoorleven: Start Je Werkdag Goed",
            "expImage" => "./img/office_life_foto.webp",
            "information" => "Begin je dag in een stijlvolle, moderne kantoorruimte met een helder uitzicht over de stad in onze Kantoorleven Experience. Je pakt een kop koffie van een goede koffiemachine en gaat aan je bureau zitten, klaar om je werk te beginnen. De ruimte is rustig en overzichtelijk, ideaal om je te concentreren op je taken. Het is een gewone, maar efficiënte werkomgeving die je helpt om je dag goed en productief te starten. Geniet van de eenvoud en de focus die deze setting biedt.",
            "Expurl" => "",
        ],
        3 => [
            "experience" => "Avondje Uit met Vrienden: Gezellig Samen zijn",
            "expImage" => "./img/night_out_foto.webp",
            "information" => "Ervaar een gezellige avond met vrienden op een dakterras met uitzicht op de stad in onze Avondje Uit met Vrienden Experience. Het is een gewone avond waarop je samen met je vrienden lacht, gesprekken voert en een drankje doet, terwijl je geniet van het uitzicht en de sfeer. De lichte verlichting van de stad en de ontspannen omgeving maken het een aangename manier om samen tijd door te brengen. Het is een eenvoudige, maar heerlijke manier om het plezier en de gezelligheid van een avond uit te beleven.",
            "Expurl" => "",
        ],
        4 => [
            "experience" => "Relax Experience (Outdoor): Ontspan aan het Meer",
            "expImage" => "./img/lake_foto.webp",
            "information" => "Geniet van een rustige avond aan het meer met onze Relax lake Experience. Stel je voor dat je in een hangmat ligt tussen twee bomen, terwijl de zon ondergaat en een zachte, warme gloed over het water reflecteert. Je hoort het kalme geluid van golven die tegen de oever slaan en voelt de ontspannen sfeer om je heen. Het is een eenvoudige, maar perfecte manier om te ontspannen en tot rust te komen in de natuur. Laat de dagelijkse drukte achter je en ervaar de rust van een mooi meer bij zonsondergang.",
            "Expurl" => "",
        ],
        5 => [
            "experience" => "Daily Life Experience (Outdoor): Ontdek een Charmant Dorpsplein",
            "expImage" => "./img/morning_walk_foto.webp",
            "information" => "Begin je dag op een rustig dorpsplein met onze Daily Life morning Experience. Je zit aan een tafel op een terras van een gezellige bakkerij, genietend van een vers gezette koffie en een knapperige croissant. Terwijl je om je heen kijkt, zie je hoe de stad langzaam tot leven komt—mensen wandelen voorbij, en het plein vult zich met activiteit. Het is een gewone ochtend, maar het biedt een charmante en aangename manier om je dag te beginnen en te genieten van een eenvoudig, maar heerlijk moment.",
            "Expurl" => "",
        ],
        6 => [
            "experience" => "Avondje Uit met Vrienden: Gezellig Samen zijn",
            "expImage" => "./img/night_out_foto.webp",
            "information" => "",
            "Expurl" => "",
        ],
        7 => [
            "experience" => "Boswandeling: Geniet van de natuur",
            "expImage" => "./img/forest_walk_foto.webp",
            "information" => "Ervaar de rust van een boswandeling in onze Boswandeling Experience. Wandel over een zacht pad omringd door hoge bomen en groene bladeren. Terwijl je loopt, hoor je het zachte gezang van vogels en voel je de frisse lucht op je huid. De zon schijnt door de takken, wat een prettige sfeer creëert. Dit is een ideale manier om even uit te rusten en simpelweg te genieten van de natuurlijke schoonheid om je heen. Het is de meest gewone ervaring, maar eentje die je de kans geeft om te ontspannen en op te laden.",
            "Expurl" => "",
        ],
        8 => [
            "experience" => "Kantoorleven: Start Je Werkdag Goed",
            "expImage" => "./img/office_life_foto.webp",
            "information" => "Begin je dag in een stijlvolle, moderne kantoorruimte met een helder uitzicht over de stad in onze Kantoorleven Experience. Je pakt een kop koffie van een goede koffiemachine en gaat aan je bureau zitten, klaar om je werk te beginnen. De ruimte is rustig en overzichtelijk, ideaal om je te concentreren op je taken. Het is een gewone, maar efficiënte werkomgeving die je helpt om je dag goed en productief te starten. Geniet van de eenvoud en de focus die deze setting biedt.",
            "Expurl" => "",
        ],
        9 => [
            "experience" => "Avondje Uit met Vrienden: Gezellig Samen zijn",
            "expImage" => "./img/night_out_foto.webp",
            "information" => "Ervaar een gezellige avond met vrienden op een dakterras met uitzicht op de stad in onze Avondje Uit met Vrienden Experience. Het is een gewone avond waarop je samen met je vrienden lacht, gesprekken voert en een drankje doet, terwijl je geniet van het uitzicht en de sfeer. De lichte verlichting van de stad en de ontspannen omgeving maken het een aangename manier om samen tijd door te brengen. Het is een eenvoudige, maar heerlijke manier om het plezier en de gezelligheid van een avond uit te beleven.",
            "Expurl" => "",
        ],
        10 => [
            "experience" => "Boswandeling: Geniet van de natuur",
            "expImage" => "./img/forest_walk_foto.webp",
            "information" => "Ervaar de rust van een boswandeling in onze Boswandeling Experience. Wandel over een zacht pad omringd door hoge bomen en groene bladeren. Terwijl je loopt, hoor je het zachte gezang van vogels en voel je de frisse lucht op je huid. De zon schijnt door de takken, wat een prettige sfeer creëert. Dit is een ideale manier om even uit te rusten en simpelweg te genieten van de natuurlijke schoonheid om je heen. Het is de meest gewone ervaring, maar eentje die je de kans geeft om te ontspannen en op te laden.",
            "Expurl" => "",
        ],
        11 => [
            "experience" => "Kantoorleven: Start Je Werkdag Goed",
            "expImage" => "./img/office_life_foto.webp",
            "information" => "Begin je dag in een stijlvolle, moderne kantoorruimte met een helder uitzicht over de stad in onze Kantoorleven Experience. Je pakt een kop koffie van een goede koffiemachine en gaat aan je bureau zitten, klaar om je werk te beginnen. De ruimte is rustig en overzichtelijk, ideaal om je te concentreren op je taken. Het is een gewone, maar efficiënte werkomgeving die je helpt om je dag goed en productief te starten. Geniet van de eenvoud en de focus die deze setting biedt.",
            "Expurl" => "",
        ],
        12 => [
            "experience" => "Avondje Uit met Vrienden: Gezellig Samen zijn",
            "expImage" => "./img/night_out_foto.webp",
            "information" => "Ervaar een gezellige avond met vrienden op een dakterras met uitzicht op de stad in onze Avondje Uit met Vrienden Experience. Het is een gewone avond waarop je samen met je vrienden lacht, gesprekken voert en een drankje doet, terwijl je geniet van het uitzicht en de sfeer. De lichte verlichting van de stad en de ontspannen omgeving maken het een aangename manier om samen tijd door te brengen. Het is een eenvoudige, maar heerlijke manier om het plezier en de gezelligheid van een avond uit te beleven.",
            "Expurl" => "",
        ],
    ];
    return $tags[$id] ?? [];
}
