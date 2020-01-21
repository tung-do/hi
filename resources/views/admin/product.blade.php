@extends('admin.master')
@section('main')
@section('title','Sản Phẩm')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Sản phẩm</h1>
		</div>
	</div><!--/.row-->

	<div class="row">
		<div class="col-xs-12 col-md-12 col-lg-12">
			<div class="panel panel-primary">
				<div class="panel-heading">Danh sách sản phẩm</div>
				<a class="btn btn-primary" href="{{route('product.create')}}">Thêm sản phẩm</a>
				<div class="panel-body">
					<div class="bootstrap-table">
						<table class="table table-bordered" id="id-bang">
							<thead>
								<tr class="bg-primary">
									<th>Tên sản phẩm</th>
									<th>Thương hiệu</th>
									<th width="120px">Ảnh sản phẩm</th>
									<th>Số lượng</th>
									<th>Giá tiền</th>
									<th>Mô tả</th>
									<th>Kiểu dáng</th>
									<th>Giới tính</th>
									<th>Trạng thái</th>
									<th>Tùy chọn</th>
								</tr>
							</thead>
							<tbody>
								@foreach($product as $value)
								<tr>
									<td>{{$value->name}}</td>
									<td>{{$value->Category->name}}</td>
									{{-- ->Category là trỏ đến function mà trong model của Product đã create --}}
									<td><img src="imgupload/{{$value->image}}" width="100px" height="100px"></td>
									<td>{{$value->quantity}}</td>
									<td>{{ number_format($value->price,0,',','.')}}</td>
									<td><?php echo substr($value->description,0,150);?>...</td>
									<td>{{$value->ProductStyle->name}}</td>
									<td>
										@if($value->idSex==3)
										{{"Nam"}}
										@elseif($value->idSex==4)
										{{"Nữ"}}
										@elseif($value->idSex==5)
										{{"Tất cả"}}
										@endif
									</td>
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
						<div class="pull-right">{{$product->links()}}</div>
					</div>
					<div class="clearfix"></div>
				</div>

				<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Chỉnh sửa sản phẩm</h5>
								<button class="close" type="button" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>
							<div class="modal-body">
								<div class="row" style="margin: 5px">
									<div class="col-lg-12">
										<form role="form" class="updateProduct" method="post" enctype="multipart/form-data">
											<input type="hidden" name="id" class="idProduct">
											<fieldset class="form-group">
												<label>Tên sản phẩm</label>
												<input class="form-control name" required name="name">
											</fieldset>
											<div class="form-group">
												<label>Thương hiệu</label>
												<select class="form-control idCategory" name="idCategory">
													@foreach($category as $value)
													<option value="{{$value->id}}">{{$value->name}}</option>
													@endforeach
												</select>
											</div>
											<img class="img img-thumbnail imageThum" width="100" height="100" lign="center">
											<div class="form-group">
												<label for="price">Ảnh sản phẩm</label>
												<input type="file" name="image"  class="form-control image">
											</div>
											<div class="form-group">
												<label for="quantity">Số lượng</label>
												<input type="number" name="quantity" min="1" required value="1" class="form-control quantity">
											</div>
											<div class="form-group">
												<label for="price">Giá tiền</label>
												<input type="text" name="price" required class="form-control price">
											</div>
											<div class="form-group">
												<label>Mô tả</label>
												<textarea name="description" required id="description" cols="5" rows="5" class="form-control description"></textarea>
											</div>
											<div class="form-group">
												<label>Kiểu dáng</label>
												<select class="form-control idProductStyle" name="idProductStyle">
													@foreach($style as $value)
													<option value="{{$value->id}}">{{$value->name}}</option>
													@endforeach
												</select>
											</div>
											<div class="form-group">
												<label>Giới tính</label>
												<select class="form-control sex" name="sex">
													<option value="3" class="nam">Nam</option>
													<option value="4" class="nữ">Nữ</option>
													<option value="5" class="all">Tất cả</option>
												</select>
											</div>
											<div class="form-group">
												<label>Trạng thái</label>
												<select class="form-control status" name="status">
													<option value="1" class="ht">Hiển Thị</option>
													<option value="0" class="kht">Ẩn</option>
												</select>
											</div>
											<input type="submit" class="btn btn-success" value="Sửa" id="suasp">
											<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
										</form>
									</div>
								</div>
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
								<button type="button" class="btn btn-success delProduct">Có</button>
								<button class="btn btn-secondary" type="button" data-dismiss="modal">Không</button>
							</div>
						</div>
					</div>
				</div>
			</div><!--/.row-->
			<script type="text/javascript">
				CKEDITOR.replace('description');
			</script>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

			<script type="text/javascript">
				$.ajaxSetup({
					headers: {
						'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
					}
				});
				$(document).ready(function(){
					$('.edit').click(function(){
						let id = $(this).data('id');
						$.ajax({
							url : 'admin/product/'+id+'/edit',
							dataType : 'json',
							type : 'get',
							success : function(data){
								$('.name').val(data.product.name);
								$('.quantity').val(data.product.quantity);
								$('.price').val(data.product.price);
								$('.imageThum').attr('src','imgupload/'+data.product.image);
								if(data.product.sex == 3){
									$('.nam').attr('selected','selected');
								}else{
									if(data.product.sex == 4){
										$('.nu').attr('selected','selected');
									}else{
										if(data.product.sex == 5){
											$('.all').attr('selected','selected');
										}
									}
								}

								if(data.product.status == 1){
									$('.ht').attr('selected','selected');
								}else{
									$('.kht').attr('selected','selected');
								}
								CKEDITOR.instances['description'].setData(data.product.description);
								$('.idCategory').val(data.product.idCategory);
								$('.idProductStyle').val(data.product.idProductStyle);
							}
						});
						$('.updateProduct').on('submit',function(event){
							//chặn form submit
							event.preventDefault();
							$.ajax({
								url : 'admin/updatePro/'+id,
								data : new FormData(this),
								contentType : false,
								processData : false,
								cache : false,
								type : 'post',
								success : function(data){
									$('#edit').modal('hide');
									location.reload();
								}
									
								
							});
						});
					});
					$('.delete').click(function(){
						let id = $(this).data('id');
						$('.delProduct').click(function(){
							$.ajax({
								url : 'admin/product/'+id,
								type : 'delete',
								dataType : 'json',
								success : function(data){
									$('#delete').modal('hide');
									location.reload();
								}
							});
						});
					});
				});
		</script>

	</div>	<!--/.main-->
	@stop