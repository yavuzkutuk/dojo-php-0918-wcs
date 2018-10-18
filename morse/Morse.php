<?php
/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 18/10/18
 * Time: 09:34
 */

namespace Morse;


class Morse
{

    const MORSE = [
        "-.-.--" => "!",
        "....-" => "4",
        "..--.." => "?",
        "--..--" => ",",
        ".-.-.-" => ".",
        "..---" => "2",
        "...--" => "3",
        "--..." => "7",
        "-...." => "6",
        "....." => "5",
        "---.." => "8",
        "-..." => "B",
        "----." => "9",
        ".--." => "P",
        "-----" => "0",
        "--.." => "Z",
        "-.--" => "Y",
        "-..-" => "X",
        "-.-." => "C",
        "...-" => "V",
        ".----" => "1",
        "..-." => "F",
        "...." => "H",
        ".---" => "J",
        "--.-" => "Q",
        "-..-." => "/",
        ".-.." => "L",
        "..." => "S",
        "---" => "O",
        "-.-" => "K",
        ".-." => "R",
        "..-" => "U",
        "-.." => "D",
        ".--" => "W",
        "--." => "G",
        "-." => "N",
        "--" => "M",
        ".." => "I",
        ".-" => "A",
        "-" => "T",
        "." => "E",
    ];

    public function convertToLetters(string $morseInput) : string
    {
        //.-- ..   .-.. -..
        $morseInput = explode(' ',$morseInput);
        $result = '';

        for ($i = 0; $i < count($morseInput); $i++) {
            if($morseInput[$i] == '') {
                $i++;
                $result .= ' ';
                continue;
            }
            foreach (self::MORSE as $morse => $letter) {
                if ($morseInput[$i] == $morse) {
                    $result .= $letter;
                }
            }
        }
        return $result;
    }

}