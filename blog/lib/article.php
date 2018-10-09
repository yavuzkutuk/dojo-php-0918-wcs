<?php

function addArticle(array $data, \PDO $pdo)
{

    $insert = "INSERT INTO article (`titre`, `contenu`, `auteur`) VALUES (:titre, :contenu, :auteur)";
    $prepared = $pdo->prepare($insert);
    $prepared->bindValue(':titre', $data['titre'], PDO::PARAM_STR);
    $prepared->bindValue(':contenu', $data['contenu'], PDO::PARAM_STR);
    $prepared->bindValue(':auteur', $data['auteur'], PDO::PARAM_STR);
    $prepared->execute();
}

function showArticles(\PDO $pdo) : array
{
    $select = "SELECT * FROM article";
    $result = $pdo->query($select);
    return $result->fetchAll(PDO::FETCH_ASSOC);
}

function showArticle(int $id, \PDO $pdo): stdClass
{
    $select = "SELECT * FROM article WHERE id = :id;";
    $prepared = $pdo->prepare($select);
    $prepared->bindValue(':id', $id, PDO::PARAM_INT);
    $prepared->execute();
    return $prepared->fetch(PDO::FETCH_OBJ);
}
