require('./bootstrap');

document.getElementById("termsandcond").onchange = function(){
    document.getElementById("submitform").disabled = !!this.checked;
};
