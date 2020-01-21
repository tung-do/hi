@extends('admin.master')
@section('main')
@section('title','Kiểu dáng')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Kiểu dáng sản phẩm</h1>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-xs-12 col-md-7 col-lg-7">
			<div class="panel panel-primary">
				<div class="panel-heading">Danh sách kiểu dáng</div>
				<button class="add btn btn-primary" data-toggle="modal" data-target="#addpr">Thêm kiểu dáng</button>
				<div class="panel-body">
					<div class="bootstrap-table">
						<table class="table table-bordered" id="id-bang">
							<thead>
								<tr class="bg-primary">
									<th>Tên kiểu dáng</th>
									<th>Tên thương hiệu</th>
									<th>Trạng thái</th>
									<th style="width:30%">Tùy chọn</th>
								</tr>
							</thead>
							<tbody>
								@foreach($productstyle as $value)
								<tr>
									<td>{{$value->name}}</td>
									<td>{{$value->Category->name}}</td>
									<td>
										@if($value->status==1)
										{{"Hiện thị"}}
										@else
										{{"Ẩn"}}
										@endif
									</td>
									<td>
										<button class="btn btn-primary edit" data-toggle="modal" data-target="#edit" data-id="{{$value->id}}">Sửa</button>
										<button class="btn btn-danger delete" data-toggle="modal" data-target="#delete" data-id="{{$value->id}}">Xoá</button>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
						<div class="pull-right">{{$productstyle->links()}}</div>
					</div>
					<div class="clearfix"></div>
				</div>

				<div class="modal fade" id="addpr" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Thêm mới</h5>
								<button class="close" type="button" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="row" style="margin: 5px">
									<div class="col-lg-12">
										<form role="form">
											<!-- <input type="hidden" name="id" value=""> -->
											<fieldset class="form-group">
												<label>Tên kiểu dáng</label>
												<input required class="form-control name" name="name">
												<span class="error" style="color: red;font-size: 1rem;"></span>
											</fieldset>
											<div class="form-group">
												<label>Thương hiệu</label>
												<select class="form-control idCategory" name="idCategory">
													@foreach($category as $value)
														<option value="{{$value->id}}" >{{$value->name}}</option>
													@endforeach
												</select>
											</div>
											<div class="form-group">
												<label>Trạng thái</label>
												<select class="form-control status" name="status">
													<option value="1" class="ht">Hiển Thị</option>
													<option value="0" class="kht">Ẩn</option>
												</select>
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-success addpro">Save</button>
								<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
							</div>
						</div>
					</div>
				</div>

				<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa</h5>
								<button class="close" type="button" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="row" style="margin: 5px">
									<div class="col-lg-12">
										<form role="form">
											<!-- <input type="hidden" name="id" value=""> -->
											<fieldset class="form-group">
												<label>Tên kiểu dáng</label>
												<input class="form-control name" required name="name" id="name">
												<span class="error" style="color: red;font-size: 1rem;"></span>
											</fieldset>
											<div class="form-group">
												<label>Thương hiệu</label>
												<select class="form-control idCategory" id="idCategory">
													@foreach($category as $value)
														<option value="{{$value->id}}">{{$value->name}}</option>
													@endforeach
												</select>
											</div>
											<div class="form-group">
												<label>Trạng thái</label>
												<select class="form-control status" id="status">
													<option value="1" class="ht">Hiển Thị</option>
													<option value="0" class="kht">Ẩn</option>
												</select>
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-success update">Save</button>
								<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
							</div>
						</div>
					</div>
				</div>
				<!-- delete Modal-->
				<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Bạn có muốn xóa ?</h5>
								<button class="close" type="button" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body" style="margin-left: 183px;">
								<button type="button" class=" btn btn-success xoa ">Có</button>
								<button class="btn btn-secondary" type="button" data-dismiss="modal">Không</button>
								<div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div><!--/.row-->
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
			<script type="text/javascript">
				$(document).ready(function(){
					$('.add').click(function(){
						$.ajax({
							url:'admin/productstyle/create',
							dataType: 'json',
							type:'get',
						});
						$('.addpro').click(function(){
							let name = $('.name').val();
							let idCategory = $('.idCategory').val();
							let status = $('.status').val();
							$.ajax({
								url:'admin/productstyle',
								data:{
									name:name,
									idCategory:idCategory,
									status:status
								},
								dataType:'json',
								type:'post',
								
									
								
								
							});
							location.reload();
						});
					});

					$('.edit').click(function(){
						let id = $(this).data('id');
					// alert(id);
						$.ajax({
							url:'admin/productstyle/'+id+'/edit',
							dataType: 'json',
							type:'get',
							success:function($result){
								$('.name').val($result.name); //lay du lieu tu name result.name truyền vào thẻ có class name
								$('.idCategory').val($result.idCategory); 
								if($result.status == 1){
									$('.ht').attr('selected','selected');
								}else{
									$('.kht').attr('selected','selected');
								}
							}
						});
						$('.update').click(function(){
							let name = $('#name').val();
							console.log(name);
							let idCategory = $('#idCategory').val();
							let status = $('#status').val();
							$.ajax({
								url:'admin/productstyle/'+id,
								dataType:'json',
								data:{
									name:name,
									idCategory:idCategory,
									status:status
								},
								
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
								url:'admin/productstyle/'+id,
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
			</script>
		</div>	<!--/.main-->
		@stop