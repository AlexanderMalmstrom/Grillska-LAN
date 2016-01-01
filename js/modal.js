/**
 * Created by Alex on 2016-01-01.
 */
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");
var link = document.getElementById("avtal");
// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
link.onclick = function() {openFunc()};
function openFunc() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {closeFunc()};
function closeFunc() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event){
    if (event.target == modal) {
        modal.style.display = "none";
    }
}