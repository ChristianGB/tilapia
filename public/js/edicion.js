$(document).ready(function(){
   
   $('#content').click(function(evnt) {
	   
	    var hv = $('#SpecialV').map(function(){
        return $(this).val()
    }).get()

    		alert(hv);
	});

});