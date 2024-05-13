<?php

$textStorage = [];

function add ($title, $text, &$textStorage) {
    array_push ($textStorage, ['title' => $title, 'text' => $text]);
}


function remove ($index, &$textStorage){
    if (isset ($textStorage[$index])){
        unset ($textStorage[$index]);
        return true;
    } else {
        echo 'индекс не найден';
        return false;
    }
}

function edit (int$index, string$title, string$text, &$textStorage){
    if (isset ($textStorage[$index])){
        $textStorage[$index]['title'] = $title;
        $textStorage[$index]['text'] = $text;
        return true;
    }
    else {
        echo 'индекс не найден';
        return false;
    }
}


add ('лето', 'Отличное время', $textStorage);
add ('зима', 'Холодное время', $textStorage);

print_r($textStorage);

remove (0, $textStorage);
var_dump($textStorage);

remove (5, $textStorage);
var_dump($textStorage);

edit (1,'весна', $textStorage[1]['text'], $textStorage);
var_dump($textStorage);

edit (7,'осень', $textStorage[1]['text'], $textStorage);
var_dump($textStorage);





