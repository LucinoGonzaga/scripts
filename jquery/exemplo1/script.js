$("#campo, #campo2").ready(function (){
		// desabilitando o campo 
    
    // forma 1 - jQuery 1.5-
		$("#campo, #campo2").attr("disabled", true);
    
    // forma 2 - jQuery 1.6+
    //$('#campo').prop('disabled', true);
    
		// mudando a cor do campo
    $("#campo, #campo2").css("background-color", '#cccccc'); 
	});

    $(document).ready(function(){
            $("#campo3").click(function(){
            $("a").removeAttr("href");
            return false;
        });
    });


