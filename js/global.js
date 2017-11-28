/*----------------------------------
Dropdown menu for account settings*/
    function myFunction() {
    	document.getElementById("myMenu").classList.toggle("show-menu");
    }

 /*------------------------------------------
 Close dropdown on clicking outside of menu*/

window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("menu");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show-menu')) {
        openDropdown.classList.remove('show-menu');
      }
    }
  }
}