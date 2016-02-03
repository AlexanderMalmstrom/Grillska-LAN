function seats() {
	//Platser 1-8
    var seats1_8 = "";
    var i;
    for (i = 1; i < 9; i++) {
        seats1_8  += '<input type="radio" name="seat" value="' + i + '"></input>';
    }
    document.getElementById("seats1-8").innerHTML = seats1_8;

    //Platser 9-16
    var seats9_16 = "";
    var i;
    for (i = 9; i <= 16; i++) {
        seats9_16 += '<input type="radio" name="seat" value="' + i + '">';
    }
    document.getElementById("seats9-16").innerHTML = seats9_16;

    //Platser 17-24
    var seats17_24 = "";
    var i;
    for (i = 17; i <= 24; i++) {
        seats17_24  += '<input type="radio" name="seat" value="' + i + '">';
    }
    document.getElementById("seats17-24").innerHTML = seats17_24;

    //Platser 26-32
    var seats25_32 = "";
    var i;
    for (i = 25; i <= 32; i++) {
        seats25_32 += '<input type="radio" name="seat" value="' + i + '">';
    }
    document.getElementById("seats25-32").innerHTML = seats25_32;
}

    document.getElementById("age").onchange = function() {
        document.getElementById("parentConsent").style.display = this.checked ? 'block' : 'none';

        if (document.getElementById("age").checked){
            document.getElementById("parentConsent").style.display = "inline";
            document.getElementById("parentName").setAttribute("required");
            document.getElementById("parentNumber").setAttribute("required");
        }
};
