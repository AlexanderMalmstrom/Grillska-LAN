function seats() {
	//Platser 1-8
    var seats1_8 = "";
    var i;
    for (i = 1; i < 9; i++) {
        seats1_8  += '<input type="radio" name="seat" value="' + i + '">' ;
    }
    document.getElementById("seats1-8").innerHTML = seats1_8;

    //Platser 8-16
    var seats8_16 = "";
    var i;
    for (i = 9; i < 17; i++) {
        seats8_16 += '<input type="radio" name="seat" value="' + i + '">';
    }
    document.getElementById("seats8-16").innerHTML = seats8_16 + '<br>';

    //Platser 17-23
    var seats17_23 = "";
    var i;
    for (i = 16; i < 24; i++) {
        seats17_23  += '<input type="radio" name="seat" value="' + i + '">';
    }
    document.getElementById("seats17-23").innerHTML = seats17_23;

    //Platser 26-32
    var seats26_32 = "";
    var i;
    for (i = 25; i < 33; i++) {
        seats26_32 += '<input type="radio" name="seat" value="' + i + '">';
    }
    document.getElementById("seats24-32").innerHTML = seats26_32;
}