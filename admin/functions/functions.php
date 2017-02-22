<?php

function get_posts(){

    global $db;

    $req = $db->query("SELECT * FROM posts ORDER BY date DESC");

    $results = [];
    while($rows = $req->fetchObject()){
        $results[] = $rows;
    }

    return $results;
}


function get_post(){

    global $db;

    $req = $db->query("
        SELECT  posts.id,
                posts.title,
                posts.image,
                posts.date,
                posts.content,
                posts.posted
        FROM posts
        WHERE posts.id = '{$_GET['id']}'
    ");

    $result = $req->fetchObject();
    return $result;
}

function edit($title,$content,$posted,$id){

    global $db;

    $e = [
        'title'     => $title,
        'content'   => $content,
        'posted'    => $posted,
        'id'        => $id
    ];

    $sql = "UPDATE posts SET title=:title, content=:content, date=NOW(), posted=:posted WHERE id=:id";
    $req = $db->prepare($sql);
    $req->execute($e);

}