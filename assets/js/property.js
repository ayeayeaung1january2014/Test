$(document).ready(function(){
	
	/*
	*method GET
	*DataType Json
	*return json object
	*/				
	function load_data(){
		var id             = $("#id").html();
		var shortlist_flag = $("#shortlist_flag").html();

		$.ajax({
			url: "/Test/get-property-by-id/"+ id,
			method:"GET",
			dataType:"json",
			async:false,			
			success: function(data){
				shortlist_flag = data.shortlist_flag; 
				$("#shortlist_flag").html(shortlist_flag);
				
				if(shortlist_flag == 0){
					$("#detail_button").html("shortlist");
				}
				else{
					$("#detail_button").html("unshortlist");
				}
    		}
    	}); 
	}
	/*
	*details view button click
	*method POST
	*DataType Json
	*return json object
	*/	
    $("#detail_button").click(function(){
    	var id             = $("#id").html();
		var shortlist_flag = $("#shortlist_flag").html();

		$.ajax({
			url:"/Test/change-shortlist-flag/"+ id,
			method:"POST",
			data:{shortlist_flag:shortlist_flag},
			async: false,
			success: function(data){						
				console.log("success");	
    		}
    	});		    	
		load_data();	    	
    });
    

    /*
    *remove view button click
	*method POST
	*DataType Json
	*return json object
	*/
    $(".remove_button").click(function(){	    	
    	var id = $(this).attr("property_id");
    	var shortlist_flag = $(this).attr("property_shortlist_flag");

		$.ajax({
			url:"/Test/change-shortlist-flag/"+ id,
			method:"POST",
			dataType: "json",
			data:{shortlist_flag:shortlist_flag},
            success: function(data){                        
                console.log("success");  
            }										
    	});

    	$(this).parent().remove();
    });

});