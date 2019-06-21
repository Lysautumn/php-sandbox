<?php

    // getting information from POSt data object
    $new_album_title = $_POST['title'];
    $new_album_artist = $_POST['artist'];

    // creating database connection
    $conn_string = "host=localhost port=5432 dbname=php_albums";
    $connection = pg_connect($conn_string);

    // creating DB query to insert new album
    $query_text = "INSERT INTO albums (title, artist) VALUES ('$new_album_title', '$new_album_artist')";

    // setting db response to variable
    $result = pg_query($connection, $query_text);

    // headers
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    // response
    http_response_code(201);
    echo json_encode(array("message" => "new album added" . $new_album_title));
?>