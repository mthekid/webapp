/* CSE3026 : Web Application Development
 * Lab 09 - Maze
 */
"use strict";
var loser = null;  // whether the user has hit a wall

//page 4 , EX01
window.onload = function() {

    var boundary = $$(".boundary");  // 
    for(var i = 0; i < boundary.length; i++ ) {
        boundary[i].onmouseover = overBoundary; //EX02
    }

    // this.alert($$(".boundary"))
    var winBox = this.$("end"); //EX03
    winBox.onmouseover = overEnd;

    var resetBox = this.$("start"); 
    resetBox.onclick = this.startClick;

    var checkcheat = this.$("maze");
    checkcheat.onmouseleave = this.overBody;
};

// 내가 임의로 추가한 함수이다.어디에 둬야할 지 몰라서..
// function turnred() {
//     // alert("booyah");
//     document.getElementById("boundary1").classList.add("youlose");
// }
// test


// called when mouse enters the walls; 
// signals the end of the game with a loss

function overBoundary(event) { //EX03
    // document.getElementById("boundary1").classList.add("youlose"); //EX 01
    if(loser) {
        var boundary = $$(".boundary"); 
        // alert("You lose!:(") //EX03
        $("status").innerHTML = "you lose!:("; 
        for(var i = 0 ; i < boundary.length; i++) {
            boundary[i].classList.add("youlose");
        }
    }
}

// called when mouse is clicked on Start div;
// sets the maze back to its initial playable state
function startClick() { // EX04
    var boundary = $$(".boundary"); 
    $("status").innerHTML = "Click the \"S\" to begin.";
    for(var i = 0; i < boundary.length; i++) {
        boundary[i].classList.remove("youlose");
    }
    loser = true;
    console.log(loser);
}

// called when mouse is on top of the End div.
// signals the end of the game with a win
// EX05
function overEnd() {
    // alert("You win! :)"); EX03
    if(loser) {
        $("status").innerHTML = "you win!:)"; 
        loser = null;
    }
}

// test for mouse being over document.body so that the player
// can't cheat by going outside the maze
function overBody(event) {
    if(loser) {
        overBoundary();
    }
}



