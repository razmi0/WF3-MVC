<?php

function getArticles()
{
    $bdd = new PDO('mysql:host=localhost;dbname=wf3_blog;charset=utf8', 'root', '');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $req = $bdd->query("select id,title, created_at from article order by id desc");
    $req->execute();
    $data = $req->fetchAll(PDO::FETCH_OBJ);
    return $data;
}

