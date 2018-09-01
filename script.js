$(document).ready(function(){
	 $( window ).on("load", function() {
		loadData();
		$('#updateForm').hide();
	 });
	$("#insertForm").click(function(e){
		e.preventDefault();
		var name = $("#name").val();
		var email = $("#email").val();
		var phone = $("#phone").val();
		$.ajax({
			type :"POST",
			url:'add.php',
			data:{name:name,email:email,phone:phone},
			success:function(data){
				loadData();
			}
		});
	});

	$('body').on('click',".deletedata",function(e){
		e.preventDefault();
		console.log($(this).attr('id'));
		var id = $(this).attr('id');
		$.ajax({
			type :"POST",
			url:'delete.php',
			data:{id:id},
			success:function(data){
				loadData();
			}
		});
	});
	$('body').on('click',".editData",function(e){
		e.preventDefault();
		$('#updateForm').show();
		$('#insertForm').hide();

		// console.log($(this).attr('id'));
		var id = $(this).attr('id');
		$.ajax({
			type :"POST",
			url:'edit.php',
			data:{id:id},
			success:function(data){
				var face = JSON.parse(data);
				// console.log(face.name);
		var name = $("#name").val(face.name);
		var email = $("#email").val(face.email);
		var phone = $("#phone").val(face.phone);
		var id = $("#id").val(face.id);

				// loadData();
			}
		});
	});

		$("#updateForm").click(function(e){
		e.preventDefault();
		var name = $("#name").val();
		var email = $("#email").val();
		var phone = $("#phone").val();
		var id = $("#id").val();
		$.ajax({
			type :"POST",
			url:'update.php',
			data:{name:name,email:email,phone:phone,id:id},
			success:function(data){
				if(data ==1){
				loadData();
				}else{
					loadData();
				}
			}
		});
	});

});

function loadData() {
	$.ajax({
			type :"POST",
			url:'view.php',
			success:function(data){
				$("#view").html(data);
				var name = $("#name").val('');
		var email = $("#email").val('');
		var phone = $("#phone").val('');
			}
		});
	
}
