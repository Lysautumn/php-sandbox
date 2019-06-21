<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Hello PHP!</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" 
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
        <script src="client.js"></script>
    </head>
    <body>
        <?php
            echo "<h1>Welcome to the record store!</h1>"
        ?>
        <h2>Add a new record:</h2>
        <input type="text" placeholder="Album Name" id="newAlbumName" />
        <input type="text" placeholder="Artist" id="newAlbumArtist" />
        <button id="addNewRecord">Add Album</button>
    </body>
</html>