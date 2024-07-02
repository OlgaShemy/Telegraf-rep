<?php

$textStorage = [];

function add (string $title, string $text, array &$textStorage): void
{
    $textStorage[] = ['title' => $title, 'text' => $text];
}


function remove (int $index, array &$textStorage): bool
{
    if (isset ($textStorage[$index])){
        unset ($textStorage[$index]);
        return true;
    }
        return false;
    }


function edit (int $index, string $title, string $text, array &$textStorage): bool
{
    if (isset ($textStorage[$index])){
        $textStorage[$index]['title'] = $title;
        $textStorage[$index]['text'] = $text;
        return true;
    }
        return false;
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





