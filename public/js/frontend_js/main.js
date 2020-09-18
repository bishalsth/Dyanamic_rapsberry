$().ready(function(){
    
    $("#cv").validate({
       
		rules:{
			file:{
				required:false,
				
				

			}

		},
		messages:{
			file: {required:"Please provide your Name"
			
			

			}
		}

	});

});