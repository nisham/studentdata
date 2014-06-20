$(document).ready(function(){

	 $("#addnew").click(function(){
            // show bootstrap modal
            $('#form-Modal').modal('show');
            // focus the input field
            $("#fname").focus();

        });



	 $("#student-form").submit(function(e){

	 	e.preventDefault();// prevent default page refresh and submit
	 	  // get form field values
          
             jQuery.ajax({
			type: "POST", // HTTP method POST or GET
			url: "response.php", //Where to make Ajax calls
			dataType : 'json',
			data: {
				first_name :$("#fname").val(),
				phone :$("#phone").val(),
                email :$("#email").val(),
                address:$("#address").val()
			}, //Form variables
			success:function(response){
				//$("#responds").append(response);

				//$("#contentText").val(''); //empty text field on successful
				content+="<tr><td>"+1+"</td><td>"+$("#fname").val()+"</td><td>"+$("#phone").val()+"</td><td>"+$("#email").val()+""+"</td><td>"+$("#fname").val()+"</td></tr>";
				
				 $("#records tbody").html(content);
				 $('#form-Modal').modal('hide');
			},
			error:function (xhr, ajaxOptions, thrownError){
				alert(thrownError);
			}
			});


	 });
	});