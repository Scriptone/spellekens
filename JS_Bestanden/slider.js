var counter = 1;
setInterval(() => {
    var radioButton = document.getElementById("radio" + counter);
    var gameRadioButton = document.getElementById("game-radio" + counter);
    console.log(radioButton);
    console.log(gameRadioButton);
    radioButton.checked = true;
    gameRadioButton.checked = true;
    counter++;
    if (counter > 4) {
        counter = 1;
    }
}, 5000);



