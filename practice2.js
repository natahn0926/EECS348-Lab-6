function changeColor() {
    var borderR = document.getElementById("borderR").value;
    var borderG = document.getElementById("borderG").value;
    var borderB = document.getElementById("borderB").value;
    var borderWidth = document.getElementById("borderWidth").value;

    var bgR = document.getElementById("bgR").value;
    var bgG = document.getElementById("bgG").value;
    var bgB = document.getElementById("bgB").value;

    var paragraph = document.getElementById("targetParagraph");

    paragraph.style.border = borderWidth + "px solid rgb(" + borderR + "," + borderG + "," + borderB + ")";
    paragraph.style.backgroundColor = "rgb(" + bgR + "," + bgG + "," + bgB + ")";
}
