$("#ads > div:gt(0)").hide();

setInterval(function() { 
  $('#ads > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#ads');
},  3000);

function myFunction() {
	document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(e) {
	if (!e.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
	
	for (var d = 0; d < dropdowns.length; d++) {
		var openDropdown = dropdowns[d];
		
		if (openDropdown.classList.contains('show')) {
				openDropdown.classList.remove('show');
			}
		}
	}
}