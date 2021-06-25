// Constants
const playerNameInputField = document.querySelector('.input-field-player-name');
const addPlayerButton = document.querySelector('.add-player-button');
const resetGameButton = document.querySelector('.reset-game-button');
const resetBoardButton = document.querySelector('.reset-board-button');

// Player One items
const playerOneLabel = document.querySelector('.player-one-label');

// Player Two items
const playerTwoLabel = document.querySelector('.player-two-label');

// Variables
const players = []; // Array to store (2) players

// Event listeners
if (addPlayerButton) {
    addPlayerButton.addEventListener("click", addPlayer);
}

if (resetGameButton) {
	resetGameButton.addEventListener("click", resetGame);
}

if (resetBoardButton) {
	resetBoardButton.addEventListener("click", resetBoard);
}

// Here players are created
function addPlayer() {

    if (players.length >= 2) {
        alert("There are 2 players (or more) already. Press Reset button to start a new game.");       
        return;
    }

    if (playerNameInputField.value == "") {
        window.alert("Fill in a name...")
    }else {
        const playerName = playerNameInputField.value;
        let symbol = "X";
        let turn = true;
        if (players.length == 1) {
            symbol = "O";
            turn = false;
        }
        
        const newPlayer = new Player(playerName, symbol, turn);
        players.push(newPlayer);
        printPlayers();
    }
}

function printPlayers() {
    playerNameInputField.value = "";
    
    if (players.length == 0) {
        console.log("No one to play");
        playerOneLabel.innerHTML = "Enter player one..";
        playerTwoLabel.innerHTML = "Enter player two..";

        return;
    }

    let playersText = "";

    for(let i = 0; i < players.length; i++) {
        let player = players[i];
        //let playersText = "Name: " + player.playerName + "<br>"; etc..

        if (i == 0) { // Player One
            //Set text of player One label
            playerOneLabel.innerHTML = "Name: " + players[0].getName()  + "<br> Points: " + players[0].getPoints() + "<br> Symbol: " + players[0].symbol;
        } else if (i == 1) {            
            //Set text of player One label
            playerTwoLabel.innerHTML = "Name: " + players[1].getName() + "<br> Points: " + players[1].getPoints() + "<br> Symbol: " + players[1].symbol;

            //addPointsPlayerTwoButton.parentElement.style.visibility = "visible";// Show add points button
        } else {
            return;
        }
    }
}

function resetGame() {
    //reset the game

    let vak=document.querySelectorAll('.box')

    console.log("Resetting the game");
    players.length = 0;
    playerOneLabel.innerHTML = "Player One";
    playerTwoLabel.innerHTML = "Player Two";
    playerTurn.innerHTML = "✌️ It takes two to Tic Tac Toe! ✌️";

    for (let i = 0; i < model.length; i++) {
        model[i]="Leeg";
        vak[i].innerHTML= "";
    }
}

function resetBoard() {
    //reset the board

    let vak=document.querySelectorAll('.box')

    console.log("Resetting the board");

    for (let i = 0; i < model.length; i++) {
        model[i]="Leeg";
        vak[i].innerHTML= "";
    }
}
//Array for the board
let model= new Array(9);
for (let i = 0; i < model.length; i++) {
    model[i]="Leeg";
}

let vakjes=document.querySelector('.tic-tac-toe-board')
let playerTurn = document.querySelector('#playerTurnElement')

vakjes.addEventListener('click', handleClickSpeelveld);
//turn of X and O
function handleClickSpeelveld(event){
    if (players[1].turn === false) 
    {
        let vakje=event.target;
        let index = vakje.id;
        if (vakje.innerHTML == "") {
            vakje.innerHTML="X";
            model[index]="X";
            console.log(model);
            players[1].turn = true;
            playerTurn.innerHTML = "It's the turn of: " + players[1].name;
        }
    }
    else{
        let vakje=event.target;
        let index = vakje.id;
        if (vakje.innerHTML == "") {
            vakje.innerHTML="O";
            model[index]="O";
            console.log(model);
            players[1].turn = false;
            playerTurn.innerHTML = "It's the turn of: " + players[0].name;
        }
    }
    Win();
}
//win function for x or o
function Win() {
        
    if (model[0]=== "X" && model[1]=== "X" && model[2]=== "X") {
        players[0].points++;
        playerOneLabel.innerHTML = "Name: " + players[0].name  + "<br> Points: " + players[0].points + "<br> Symbol: " + players[0].symbol;
        resetBoard();
    }
    else if (model[3]=== "X" && model[4]=== "X" && model[5]=== "X") {
        players[0].points++;
        playerOneLabel.innerHTML = "Name: " + players[0].name  + "<br> Points: " + players[0].points + "<br> Symbol: " + players[0].symbol;
        resetBoard();
    }
    else if (model[6]=== "X" && model[7]=== "X" && model[8]=== "X") {
        players[0].points++;
        playerOneLabel.innerHTML = "Name: " + players[0].name  + "<br> Points: " + players[0].points + "<br> Symbol: " + players[0].symbol;
        resetBoard();
    }
    else if (model[0]=== "X" && model[3]=== "X" && model[6]=== "X") {
        players[0].points++;
        playerOneLabel.innerHTML = "Name: " + players[0].name  + "<br> Points: " + players[0].points + "<br> Symbol: " + players[0].symbol;
        resetBoard();
    }
    else if (model[1]=== "X" && model[4]=== "X" && model[7]=== "X") {
        players[0].points++;
        playerOneLabel.innerHTML = "Name: " + players[0].name  + "<br> Points: " + players[0].points + "<br> Symbol: " + players[0].symbol;
        resetBoard();
    }
    else if (model[2]=== "X" && model[5]=== "X" && model[8]=== "X") {
        players[0].points++;
        playerOneLabel.innerHTML = "Name: " + players[0].name  + "<br> Points: " + players[0].points + "<br> Symbol: " + players[0].symbol;
        resetBoard();
    }
    else if (model[0]=== "X" && model[4]=== "X" && model[8]=== "X") {
        players[0].points++;
        playerOneLabel.innerHTML = "Name: " + players[0].name  + "<br> Points: " + players[0].points + "<br> Symbol: " + players[0].symbol;
        resetBoard();
    }
    else if (model[2]=== "X" && model[4]=== "X" && model[6]=== "X") {
        players[0].points++;
        playerOneLabel.innerHTML = "Name: " + players[0].name  + "<br> Points: " + players[0].points + "<br> Symbol: " + players[0].symbol;
        resetBoard();
    }

    if (model[0]=== "O" && model[1]=== "O" && model[2]=== "O") {
        players[1].points++;
        playerTwoLabel.innerHTML = "Name: " + players[1].name  + "<br> Points: " + players[1].points + "<br> Symbol: " + players[1].symbol;
        resetBoard();
    }
    else if (model[3]=== "O" && model[4]=== "O" && model[5]=== "O") {
        players[1].points++;
        playerTwoLabel.innerHTML = "Name: " + players[1].name  + "<br> Points: " + players[1].points + "<br> Symbol: " + players[1].symbol;
        resetBoard();
    }
    else if (model[6]=== "O" && model[7]=== "O" && model[8]=== "O") {
        players[1].points++;
        playerTwoLabel.innerHTML = "Name: " + players[1].name  + "<br> Points: " + players[1].points + "<br> Symbol: " + players[1].symbol;
        resetBoard();
    }
    else if (model[0]=== "O" && model[3]=== "O" && model[6]=== "O") {
        players[1].points++;
        playerTwoLabel.innerHTML = "Name: " + players[1].name  + "<br> Points: " + players[1].points + "<br> Symbol: " + players[1].symbol;
        resetBoard();
    }
    else if (model[1]=== "O" && model[4]=== "O" && model[7]=== "O") {
        players[1].points++;
        playerTwoLabel.innerHTML = "Name: " + players[1].name  + "<br> Points: " + players[1].points + "<br> Symbol: " + players[1].symbol;
        resetBoard();
    }
    else if (model[2]=== "O" && model[5]=== "O" && model[8]=== "O") {
        players[1].points++;
        playerTwoLabel.innerHTML = "Name: " + players[1].name  + "<br> Points: " + players[1].points + "<br> Symbol: " + players[1].symbol;
        resetBoard();
    }
    else if (model[0]=== "O" && model[4]=== "O" && model[8]=== "O") {
        players[1].points++;
        playerTwoLabel.innerHTML = "Name: " + players[1].name  + "<br> Points: " + players[1].points + "<br> Symbol: " + players[1].symbol;
        resetBoard();
    }
    else if (model[2]=== "O" && model[4]=== "O" && model[6]=== "O") {
        players[1].points++;
        playerTwoLabel.innerHTML = "Name: " + players[1].name  + "<br> Points: " + players[1].points + "<br> Symbol: " + players[1].symbol;
        resetBoard();
    }
}