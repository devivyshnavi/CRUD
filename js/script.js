$(document).ready(function(){
	var mem_id;
	
	DisplayData();
	
	$('#update').hide();
	
	$('#save').on('click', function(){
		if($('#list1').val() == "" || $('#description').val() == ""){
			alert("TODO");
		}else{
			var list1 = $('#list1').val();
			
			var description = $('#description').val();
			
			$.ajax({
				url: 'save_query.php',
				type: 'POST',
				data: {
					list1: list1,
		
					description: description
				},
				success: function(data){
					 $('#list1').val('');
					
					 $('#description').val('');
					 DisplayData();
				}
			});
		}
		
	});
	
	function DisplayData(){
		$.ajax({
			url: 'data_query.php',
			type: 'POST',
			data: {
				res: 1
			},
			success: function(response){
				$('#data').html(response);
			}
		})
	}
	
	$(document).on('click', '.delete', function(){
		var id = $(this).attr('name');
		
		$.ajax({
			url: 'delete_query.php',
			type: 'POST',
			data: {
				id: id
			},
			success: function(data){
				DisplayData();
				$('#update').hide();
				$('#save').show();	
				$('#list1').val('');
				
				$('#description').val('');
			}
		});
	})
	
	$(document).on('click', '.edit', function(){
		var id = $(this).attr('name');
		
		$.ajax({
			url: 'edit.php',
			type: 'POST',
			data: {
				id: id
			},
			success: function(response){
				var getArray = jQuery.parseJSON(response);
				
				mem_id = getArray.mem_id;
				
				$('#list1').val(getArray.list1);
			
				$('#description').val(getArray.description);
				
				$('#update').show();
				$('#save').hide();	
			}
		})
	});
	
	$('#update').on('click', function(){
		var list1 = $('#list1').val();
		
		var description = $('#description').val();
		
		
		$.ajax({
			url: 'update_query.php',
			type: 'POST',
			data: {
				id: mem_id,
				list1: list1,
			
				description: description
			},
			success: function(){
				DisplayData();
				$('#list1').val('');
			
				$('#description').val('');
				
				alert("Successfully Updated!");
				
				$('#update').hide();
				$('#save').show();	
				
				mem_id = "";
			}
		});
	});
});