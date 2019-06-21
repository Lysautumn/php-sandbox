$(document).ready(onReady);

// function that runs when DOM loads
function onReady() {
    $('#addNewRecord').on('click', addRecord);
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
    }).catch(error => {
        console.log('error from POST', error);
    })
}