$(document).ready(function(){
	

			// strt checkboc section 

		$('#submit').click(function(e){
			var is_validate=false;

			if('#checkbox1' ==  '' && '#checkbox1' ==  null ){
				$('#checkbox1_error').text('').css('color','red');
				is_validate=true;
			}

			else{

				is_validate=false;

			}




			if(!is_validate){
				e.preventDefault();
			}


		});




});