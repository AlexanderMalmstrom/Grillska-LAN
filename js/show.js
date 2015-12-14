$(document).ready(function(){
$('#grillska').change(function(){
if(this.checked)
$('#autoUpdate').fadeIn('fast');
else
$('#autoUpdate').fadeOut('fast');

});
});

$(document).ready(function(){
$('#age').change(function(){
if(this.checked)
$('#autoUpdateAge').fadeIn('fast');
else
$('#autoUpdateAge').fadeOut('fast');

});
});