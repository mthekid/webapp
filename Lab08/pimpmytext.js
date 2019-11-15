function pimpMyText() {
    // document.getElementById("pimp").style.font.size = "30pt";
    var text = document.getElementById("pimp").style.fontSize = "12pt";
    var timer = setInterval("biggerfont()" , 5000);
}

function biggerfont() {
    var font = document.getElementById("pimp").style.fontSize;
    var fontIntSize = parseInt(font);
    fontIntSize += 2;
    var fontString = fontIntSize.toString() + "pt";
    document.getElementById("pimp").style.fontSize = fontString;
    console.log(fontString);
    console.log(typeof(font));
    console.log(fontIntSize);
}

function onChange() {
    var chk = document.getElementById("checkBox").checked;
    if( chk ) {
        document.getElementById("pimp").style.color = "green";
        document.getElementById("pimp").style.textDecorationLine = "underline";
    } else {
        document.getElementById("pimp").style.color = "black";
        document.getElementById("pimp").style.textDecorationLine = "none";
    }
}

function snoopify() {
    var text = document.getElementById("pimp").value;
    text = text.split(".").join("\-izzle.");
    var toUpperPimp = text.toUpperCase();
    document.getElementById("pimp").value = toUpperPimp;
}


function pigLatin() {
    var textString = document.getElementById("Gangsta").value;
    console.log(textString);
    var PGarray = textString.split(",");
    console.log(PGarray);

    for ( var i = 0; i < PGarray.length; i ++) {
        console.log(PGarray[i]);
        console.log(typeof(PGarray[i] ));
        console.log(PGarray[i].charAt(0) );
    }
}

function Malkovich() {
    var textString = document.getElementById("Gangsta").value;
    // document.getElementById("Gangsta").value = "string";
    console.log(textString);
}