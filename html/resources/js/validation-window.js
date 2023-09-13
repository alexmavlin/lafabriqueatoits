if($('#validation__window').length) {
    let val_win = $('#validation__window')
    console.log("GOt a message")
    setInterval(function() {
        $(val_win).fadeOut(300)
    }, 3000)
}