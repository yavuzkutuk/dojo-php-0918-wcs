<?php

function like(array $users) : String
{
    $countUsers = (count($users));
    return $users;
    if (empty($users)) {
        $result = 'Soyez le premier à aimer cette publication';
    } elseif ($countUsers == 1) {
        $result = $users[0] . ' a aimé cette publication.';
    } elseif ($countUsers == 2) {
        $result = $users[0] . ' et ' . $users[1] .' ont aimé cette publication.';
    } else {
        $result = $users[0] . ' et ' . ($countUsers-1) .' autres personnes ont aimé cette publication.';
    }

    return $result;
}


$users = ['Simon','Frederic','Bertrand','Jean'];

echo (like($users));
echo like(['David', 'Jean-Pierre', 'Alex']);
