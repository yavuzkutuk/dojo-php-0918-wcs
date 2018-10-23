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


    public function convertToLetters(string $str): string
    {
        $result = '';
        $words = explode('   ', $str);
        foreach ($words as $word) {
            $letters = explode(' ', $word);
            foreach ($letters as $letter) {
                if (key_exists($letter, self::MORSE)) {
                    $result .= self::MORSE[$letter];
                }
            }
           $result .= ' ';
        }
        return trim($result);
    }
}
