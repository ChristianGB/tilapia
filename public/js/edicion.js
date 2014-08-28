$(document).ready(function(){
   
   $('.geting').click(function(evnt) {
	   $variable=$(this).attr("data-contenido");
	   alert($variable);

$.post( 'edicionA', { id: $variable }) 
  .done(function( id ) {
    alert( "Data Loaded: " + id );
  });


    		//alert($(this).attr("data-contenido"));
	});

});