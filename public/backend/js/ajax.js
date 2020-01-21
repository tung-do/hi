$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(function(){
	$('.edit').click(function(){
		let id = $(this).data('id');
		// alert(id);
		$.ajax({
			url:'admin/category/'+id+'/edit',
			dataType: 'json',
			type:'get',
			success:function($result){
				$('.name').val($result.name); //lay du lieu tu name result.name truyền vào thẻ có class name
				if($result.status == 1){
					$('.ht').attr('selected','selected');
				}else{
					$('.kht').attr('selected','selected');
				}
			}
		});
		$('.update').click(function(){
			let name = $('.name').val();
			let status = $('.status').val();
			$.ajax({
				url:'admin/category/'+id,
				data:{
					name:name,
					status:status
				},
				dataType:'json',
				type:'put',
				success:function($result){
					$('#edit').modal('hide');
					location.reload();
				}
			});
		});
	});
	$('.delete').click(function(){
		let id = $(this).data('id');
		// alert(id);
		$('.xoa').click(function(){
			$.ajax({
			url:'admin/category/'+id,
			dataType:'json',
			type:'delete',
			success:function($result){
				$('.delete').modal('hide');
				location.reload();
			}
		});
		});
	});
});