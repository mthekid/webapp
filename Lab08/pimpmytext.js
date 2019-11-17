function pimpMyText() {
    // document.getElementById("pimp").style.font.size = "30pt";
    var text = document.getElementById("pimp").style.fontSize = "12pt";
    var timer = setInterval("biggerfont()" , 5000);
}

function biggerfont() {
    var fontIntSize = parseInt( document.getElementById("pimp").style.fontSize );
    // var fontIntSize = parseInt(font);
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
    var text = document.getElementById("pimp").value.split(".").join("\-izzle.");
    // text = text.split(".").join("\-izzle.");
    // var toUpperPimp = text.toUpperCase();
    document.getElementById("pimp").value = text.toUpperCase();
}


function pigLatin() {
    // var textString = document.getElementById("Gangsta").value;
    // console.log(textString);
    var PGarray = document.getElementById("Gangsta").value.split(",");
    var result = "";
    console.log(PGarray);

    for ( var i = 0; i < PGarray.length; i ++) {
        console.log( "array[ " + i + " ]:" + PGarray[i]);
        var is = toPigLatin(PGarray[i].trim());
        console.log(is);
        result += is + ", " ;
    }
    document.getElementById("Gangsta").value = result;
}

function Malkovich() {
    // var textString = document.getElementById("Gangsta").value;
    var result = "";
    var PGarray = document.getElementById("Gangsta").value.split(",");
    for ( var i = 0; i < PGarray.length; i ++) {
        console.log( "array[ " + i + " ]:" + PGarray[i]);
        if(PGarray[i].trim().length >= 5) {
            console.log('length and array is ' + PGarray[i] + " " + PGarray[i].length );
            PGarray[i] = ",Malkovich";
            result += PGarray[i];
        } else {
            result += PGarray[i];
        }
    }
    document.getElementById("Gangsta").value = result;
}


function toPigLatin(thing) {
    const consonant = ["i","e","a","o","u"];
    for(var i = 0 ; i < thing.length ; i++) {
        if(consonant.includes(thing.charAt(i))  ) {
            var piglatinValue = thing.substring(0, i) + "ay";
            thing = thing.substring(i, thing.length);
            thing += piglatinValue;
            break;
        }
    }
    return thing;
}