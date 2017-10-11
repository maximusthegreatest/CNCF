$(document).ready(function() {
	// Set title
	function capitalize(string) {
	    return string.charAt(0).toUpperCase() + string.slice(1);
	}

	var title = window.location.pathname.split("/").pop().slice(0, -4);
	title = capitalize(title);

	$("title").html("Children's Neuroblastoma Cancer Foundation - " + title);

	// Set active tab
	var url = window.location.pathname;
	url = url.split("/").pop();
	$("a.nav-link[href='" + url + "']").addClass("active");
});