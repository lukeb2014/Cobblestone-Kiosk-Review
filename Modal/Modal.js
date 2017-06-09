window.onload = function () {
    // Get the modal
    var modal = document.getElementById("yes_modal");
    
    var modal_negative = document.getElementById("no_modal");
    
    // Get the button that opens the modal
    var btn = document.getElementById("positive_recommend");
    
    var btn_negative = document.getElementById("negative_recommend");
    
    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];
    var span_ = document.getElementsByClassName("close")[1];
    
    // When the user clicks on the button, open the modal 
    btn.onclick = function () {
        modal.style.display = "block";
    }
    btn_negative.onclick = function () {
        modal_negative.style.display = "block";
    }
    
    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }
    span_.onclick = function () {
        modal_negative.style.display = "none";
    }
    
    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
        if (event.target == modal || event.target == modal_negative) {
            modal.style.display = "none";
            modal_negative.style.display = "none";
        }
    }
}