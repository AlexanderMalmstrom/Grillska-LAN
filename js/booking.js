function seats() {
	//Platser 1-8
    var seats1_8 = "";
    var i;
    for (i = 1; i < 8; i++) {
        seats1_8  += '<input type="radio" name="seat" value="' + i + '"></input>';
    }
    document.getElementById("seats1-8").innerHTML = seats1_8;

    //Platser 8-16
    var seats8_16 = "";
    var i;
    for (i = 8; i < 17; i++) {
        seats8_16 += '<input type="radio" name="seat" value="' + i + '">';
    }
    document.getElementById("seats8-16").innerHTML = seats8_16;

    //Platser 17-23
    var seats17_23 = "";
    var i;
    for (i = 17; i < 24; i++) {
        seats17_23  += '<input type="radio" name="seat" value="' + i + '">';
    }
    document.getElementById("seats17-23").innerHTML = seats17_23;

    //Platser 26-32
    var seats26_32 = "";
    var i;
    for (i = 24; i < 33; i++) {
        seats26_32 += '<input type="radio" name="seat" value="' + i + '">';
    }
    document.getElementById("seats24-32").innerHTML = seats26_32;
}

    document.getElementById("age").onchange = function() {
        document.getElementById("parentConsent").style.display = this.checked ? 'block' : 'none';

        if (document.getElementById("age").checked){
            document.getElementById("parentConsent").innerHTML = '<input type="text" name="parentName" placeholder="Vårdnadshavares namn" required>' +
                '<input type="text" name="parentName" placeholder="Vårdnadshavares nummer" required>'
        }
};
