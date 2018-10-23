<?php

function dna(string $a, string $b) :int {
    $counting = 0;
    for($i = 0; $i < strlen($a); $i++) {
        if($a[$i] !== $b[$i]) {
            $counting +=1;
        }
    }
}

echo dna('GAGCCTACTAACGGGAT', 'CATCGTAATGACGGCCT');
