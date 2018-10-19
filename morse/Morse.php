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

    public function convertToLetters(string $morseInputSentence): string
    {
        $morseInputWord = explode('   ', $morseInputSentence);
        var_dump($morseInputWord);
        foreach ($morseInputWord as $word) {
            $morseInputLetter = explode(' ', $word);
            for ($i = 0; $i < count($morseInputLetter); $i++) {

                /**
                 * foreach (self::MORSE as $morse => $letter) {
                 *     if ($morseInputLetter[$i] == $morse) {
                 *         $result .= $letter;
                 *     }
                 * }*/

                $result .= self::MORSE[$morseInputLetter[$i]];
            }
            $result .= ' ';
        }
        return trim($result);
    }
}
