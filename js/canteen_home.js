
var form = document.getElementById('theForm');

// Get the button that opens the form
	var btn = document.getElementById("addItems");
		 btn.onclick = function() {
    form.style.display = "block";
}

// When the user clicks anywhere outside of the form, close it
window.onclick = function(event) {
    if (event.target == form) {
        form.style.display = "none";
    }
}