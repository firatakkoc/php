<?php

header('Content-Type: text/plain');

$str = "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
Dignissimos perferendis quos repellendus libero recusandae 
repudiandae similique laborum sit exercitationem illo necessitatibus 
fuga accusamus, molestiae, est sequi? Alias soluta magnam optio?
";

// Anzahl der Wörter zählen

function count_words($text) {
    $words = explode(' ', $text);
    
    return count($words);
    
}



// Anzahl der Sekunden ausrechnen, um den Text zu lesen

function get_text_seconds($text) {
    $wordCount = count_words($text);
    return ceil($wordCount / 1.5);
}

// $s = get_text_seconds($str);
// var_dump($s);



// Text ausgeben: "Sie brauchen im Schritt § Minuten und 10 Sekunden, um diesen Text zu lesen"

function seconds_to_paragraph($seconds) {
    if($seconds === 1) {
        return "Sie benötigen eine Sekunden, um diesen Text zu lesen. ";
    }
    if($seconds <= 59) {
        return "Sie benötigen {$seconds} Sekunden, um diesen Text zu lesen. ";
    }
}

var_dump(seconds_to_paragraph(1));

?>