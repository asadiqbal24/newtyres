	<script type="text/javascript">
	
		$('.sweet-approve').click(function(e){
			var link = $(this).attr('data-url');
			e.preventDefault(); // <--- prevent form from submitting

			  swal({
			      title: "Are you sure?",
			      icon: "warning",
			      buttons: [
			        'No, cancel it!',
			        'Yes, I am sure!'
			      ],
			      dangerMode: true,
			    }).then(function(isConfirm) {
			      if (isConfirm) {
			     
			      		window.location.href = link;

			      } else {
			        swal("Cancelled");
			      }
			    })



		});	

		$('.sweet-multiple').click(function(e){
			var link = $(this).attr('data-url');
			e.preventDefault(); // <--- prevent form from submitting

			  swal({
			      title: "Are you sure?",
			      icon: "warning",
			      buttons: [
			        'No, cancel it!',
			        'Yes, I am sure!'
			      ],
			      dangerMode: true,
			    }).then(function(isConfirm) {
			      if (isConfirm) {
			     
					var len = $(".check-id:checked").length;	
						if(len==0){
							swal("Nothing Selected...!!!");
						}else{

							$form = $("<form action='"+link+"' method='post'></form>");

							var x = '{{csrf_field()}}';
							$form.append(x);							
							$('.check-id').each(function(){

								if($(this).prop("checked") == true){
									value = $(this).val();

									var x = '<input type="hidden" name="ids[]" value="'+value+'">';
									$form.append(x);									    

								}


					          });

							$(document.body).append($form);
							$form.submit();
						}

			      } else {
			        swal("Cancelled");
			      }
			    })



		});			

	</script>