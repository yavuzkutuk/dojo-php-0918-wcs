<?php
/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 08/01/19
 * Time: 08:56
 */

namespace BlackJack;


class BlackJack
{
    const HEADS = ['K', 'Q', 'J'];

    public function getScore(array $hand): int
    {

        $score = 0;

        foreach ($hand as $card) {
            if (in_array($card, self::HEADS)) {
                $card = 10;
            }
            if ($card == 'A') {
                $card = 1;
            }
            $score += $card;
        }
        if (in_array('A', $hand) && ($score <= 11)) {
            $score += 10;
        }
        return $score;
    }

    public function play(array $player, array $bank): string
    {

        $scorePlayer = $this->getScore($player);
        $scoreBank = $this->getScore($bank);


        if (($scorePlayer <= 21) && ($scorePlayer > $scoreBank) || ($scoreBank > 21)) {
            return 'player';
        }
        return 'bank';
    }
}