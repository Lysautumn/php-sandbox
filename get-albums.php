<?php

    $albums_array = [];

    // creating database connection
    $conn_string = "host=localhost port=5432 dbname=php_albums";
    $connection = pg_connect($conn_string);

    // creating db query to get all albums
    $query_text = "SELECT * FROM albums;";

    // setting db response to variable
    $result = pg_query($connection, $query_text);

    // loop through rows in database, push into $books_array
    while($row = pg_fetch_array($result)) {
        $new_album = ["title" => $row['title'], "artist" => $row['artist']];

        array_push($albums_array, $new_album);
    }

    // headers
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");

    // response code and array
    http_response_code(200);
    echo json_encode($albums_array);

?>