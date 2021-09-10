<?php
$provincies = [
    [
        'provincie' => 'Groningen',
        'hoofdstad' => 'Groningen',
        'bevolking' => 585866,
        'inwoners_gemeente'=> 'Groningen'
    ],
    [
        'provincie' => 'Friesland ',
        'hoofdstad' => 'Leeuwarden',
        'bevolking' => 649957,
        'inwoners_gemeente'=> 'Leeuwarden'
    ],
    [
        'provincie' => 'Drenthe',
        'hoofdstad' => 'Assen',
        'bevolking' => 493682,
        'inwoners_gemeente'=> 'Emmen'
    ],
    [
        'provincie' => 'Overijssel',
        'hoofdstad' => 'Zwolle',
        'bevolking' => 1162406,
        'inwoners_gemeente'=> 'Enschede'
    ],
    [
        'provincie' => 'Flevoland',
        'hoofdstad' => 'Lelystad',
        'bevolking' => 423021,
        'inwoners_gemeente'=> 'Almere'
    ],
    [
        'provincie' => 'Gelderland',
        'hoofdstad' => 'Arnhem',
        'bevolking' => 2085952,
        'inwoners_gemeente'=> 'Nijmegen'
    ],
    [
        'provincie' => 'Utrecht',
        'hoofdstad' => 'Utrecht',
        'bevolking' => 1354834,
        'inwoners_gemeente'=>'Utrecht'
    ],
    [
        'provincie' => 'Noord-Holland',
        'hoofdstad' => 'Haarlem',
        'bevolking' => 2879527,
        'inwoners_gemeente'=> 'Amsterdam'
    ],
    [
        'provincie' => 'Zuid-Holland',
        'hoofdstad' => 'Den Haag',
        'bevolking' => 3708696,
        'inwoners_gemeente'=>'Rotterdam' 
    ],
    [
        'provincie' => 'Zeeland',
        'hoofdstad' => 'Middelburg',
        'bevolking' => 383488,
        'inwoners_gemeente'=> 'Terneuzen'
    ],
    [
        'provincie' => 'Noord-Brabant',
        'hoofdstad' => 's-Hertogenbosch',
        'bevolking' => 2562955,
        'inwoners_gemeente'=> 'Eindhoven'
    ],
    [
        'provincie' => 'Limburg',
        'hoofdstad' => 'Maastricht',
        'bevolking' => 1117201 ,
        'inwoners_gemeente'=> 'Maastricht'
    ],


];

foreach($provincies as $provincie ){
    echo '<h2>' . $provincie['provincie']. '</h2>';
    echo '<ul>';
    echo '<li>hoofdstad: ' . $provincie['hoofdstad']. '</li>';
    echo '<li>bevolking: ' . $provincie['bevolking']. '</li>';
    echo '<li>meeste inwoners: ' . $provincie['inwoners_gemeente']. '</li>';
    echo '</ul>';

}
?>