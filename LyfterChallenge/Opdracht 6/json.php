<?php

$input1 = <<<JSON
{"name": "William Shakespeare", "wife": {"birthYear": 1555, "deathYear": 
"Fun fact, she's a vampire", "name": "Anne Hathaway", "dead": false}, 
"favoriteWebsites": ["dailysonneter", "dailyprogrammer", 
"vine (he's way into 6-second cat videos)"], "dead": true, "birthYear": 1564, 
"facebookProfile": null, "selectedWorks": [{"written": 1606, "name": 
"The Tragedy of Macbeth", "isItAwesome": true}, {"written": 1608, "name": 
"Coriolanus", "isItAwesome": "It's alright, but kinda fascist-y"}], "deathYear":
 1616}
JSON;


function find_path($json, $value, $path = "") {
    foreach($json as $k => $o) {
        if(is_array($o)) {
            $sub = $path . $k . " -> ";
            find_path($o, $value, $sub);
        }

        if($o === $value) {
            $path .= $value . "\n";
            echo $path;
        }
    }
}

find_path(json_decode($input1, true), "dailyprogrammer");


find_path(json_decode(file_get_contents("https://raw.githubusercontent.com/lyfter/stage-challenges/master/6/challenges/challenge2.txt"), true), "dailyprogrammer");