var x=8;
var y=8;

var chessBoard = document.getElementById("chessBoard");

for (var i=0; i<y; i++){
    var row = chessBoard.appendChild(document.createElement("div"));
    for (var j=0; j<x; j++){
        row.appendChild(document.createElement("span"));
    }
}

const letter = ["a","b","c","d","e","f","g","h"];

for (var i = 0; i < letter.lentgh(); i++) {
	letter_div = document.getElementById("letters");
	letter_span = document.createElement("p")
	letter_span.innerHTML = letter[i];
	letter_div.appendChild(letter_span);
	
}