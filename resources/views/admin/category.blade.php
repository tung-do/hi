@extends('admin.master')
@section('main')
@section('title','Thương hiệu')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Thương hiệu sản phẩm</h1>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-xs-12 col-md-7 col-lg-7">
			<div class="panel panel-primary">
				<div class="panel-heading">Danh sách thương hiêu</div>
				<button class="add btn btn-primary" data-toggle="modal" data-target="#add">Thêm thương hiệu</button>
				<div class="panel-body">
					<div class="bootstrap-table">
						<table class="table table-bordered" id="id-bang">
							<thead>
								<tr class="bg-primary">
									<th>Tên thương hiệu</th>
									<th>Trạng thái</th>
									<th style="width:30%">Tùy chọn</th>
								</tr>
							</thead>
							<tbody>
								@foreach($category as $key=>$value)
								<tr>
									<td>{{$value->name}}</td>
									<td>
										@if($value->status==1)
										{{"Hiện thị"}}
										@else
										{{"Ẩn"}}
										@endif
									</td>
									<td>
										<button class="btn btn-primary edit" data-toggle="modal" data-target="#edit" data-id="{{$value->id}}">Sửa</button>
										<button class="btn btn-danger delete" data-toggle="modal" data-target="#delete" data-id="{{$value->id}}" >Xoá</button>
									</td>
								</tr>
								@endforeach
							</tbody>
						</table>
						<div class="pull-right">{{$category->links()}}</div>
					</div>
					<div class="clearfix"></div>
				</div>

				<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
												<label>Tên thương hiệu</label>
												<input required class="form-control " id="name">
												<span class="error" style="color: red;font-size: 1rem;"></span>
											</fieldset>
											<div class="form-group">
												<label>Trạng thái</label>
												<select class="form-control " id="status">
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
								<h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa<span class="title"></span></h5>
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
												<label>Tên thương hiệu</label>
												<input class="form-control name" name="name" required placeholder="Nhập tên category">
												<span class="error" style="color: red;font-size: 1rem;"></span>
											</fieldset>
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
								<h5 class="modal-title" id="exampleModalLabel">Bạn có muốn xóa ? Mọi thứ liên quan đến thương hiệu này cũng sẽ mất (bao gồm: Sản phẩm, Kiểu dáng,...) </h5>
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
							url:'admin/category/create',
							dataType: 'json',
							type:'get',
						});
						$('.addpro').click(function(){
							let name = $('#name').val();
							let status = $('#status').val();
							$.ajax({
								url:'admin/category',
								data:{
									name:name,
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
			</script>
		</div>	<!--/.main-->

		@stop