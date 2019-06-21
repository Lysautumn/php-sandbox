$(document).ready(onReady);

// function that runs when DOM loads
function onReady() {
    $('#addNewRecord').on('click', addRecord);
    getAlbums();
}

// addRecord runs when add button is clicked. it gathers information from inputs
// sends ajax request to post new album
function addRecord() {
    console.log('button clicked!');
    let newTitle = $('#newAlbumName').val();
    let newArtist = $('#newAlbumArtist').val();
    let newRecord = {
        title: newTitle,
        artist: newArtist
    }
    console.log(newRecord);
    $.ajax({
        method: 'POST',
        url: 'post-album.php',
        data: newRecord
    }).then(response => {
        console.log('response from POST', response);
        getAlbums();
    }).catch(error => {
        console.log('error from POST', error);
    })
}

// function to get all albums from database
// this will happen when page loads and when a new album has been added
function getAlbums() {
    $.ajax({
        method: 'GET',
        url: 'get-albums.php'
    }).then(response => {
        console.log('response from GET', response);
        appendAlbums(response);
    }).catch(error => {
        console.log('error in GET', error);
    })
}

// function to append album information on the DOM
function appendAlbums(arrayOfAlbums) {
    let outputElement = $('#albumList');
    outputElement.empty();
    for(let album of arrayOfAlbums) {
        outputElement.append(`<li>${album.title} - ${album.artist}</li>`);
    }
}