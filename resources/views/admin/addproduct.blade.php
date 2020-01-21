@extends('admin.master')
@section('title','Sản phẩm')
@section('main')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Sản phẩm</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Thêm sản phẩm</div>
					<div class="panel-body">
						<form method="post" enctype="multipart/form-data" action="{{route('product.store')}}">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-8">
											<div class="form-group">
												<label>Tên sản phẩm</label>
												<input required class="form-control name" name="name">
												<span class="error" style="color: red;font-size: 1rem;"></span>
											</div>
											<div class="form-group">
												<label>Thương hiệu</label>
												<select class="form-control procate" id="procate" name="idCategory">
													<option value=""> -- Lựa chọn -- </option>
													@foreach($category as $value)
														<option value="{{$value->id}}" >{{$value->name}}</option>
													@endforeach
												</select>
											</div>
											<div class="form-group">
												<label>Hình ảnh</label>
												<input required type="file" class="form-control image" name="image" id="image">
												<span class="error" style="color: red;font-size: 1rem;"></span>
											</div>
											<div class="form-group">
												<label>Số lượng</label>
												<input required type="number" class="form-control quantity" name="quantity" min="1">
												<span class="error" style="color: red;font-size: 1rem;"></span>
											</div>
											<div class="form-group">
												<label>Giá tiền</label>
												<input required type="text" class="form-control price" name="price">
												<span class="error" style="color: red;font-size: 1rem;"></span>
											</div>
											<div class="form-group">
												<label>Mô tả</label>
												<textarea required name="description" id="description" class="form-control description"></textarea>
												<span class="error" style="color: red;font-size: 1rem;"></span>
											</div>
											<div class="form-group">
												<label>Kiểu dáng</label>
												<select class="form-control prostyle" id="prostyle" name="idProductStyle">
													@foreach($style as $value)
														<option value="{{$value->id}}" >{{$value->name}}</option>
													@endforeach
												</select>
											</div>
											<div class="form-group">
												<label>Giới tính</label>
												<select class="form-control sex" name="sex" name="sex">
													<option value="">-- Lựa chọn --</option>
													<option value="3" class="nam">Nam</option>
													<option value="4" class="nu">Nữ</option>
													<option value="5" class="all">Tất cả</option>
												</select>
											</div>
											<div class="form-group">
												<label>Trạng thái</label>
												<select class="form-control status" name="status" name="status">
													<option value="1" class="ht">Hiển Thị</option>
													<option value="0" class="kht">Ẩn</option>
												</select>
											</div>
									<button type="submit" class="btn btn-success">Thêm</button>
									<button type="button" class="btn btn-danger">Hủy bỏ</a>
								</div>
							</div>
							{{csrf_field()}}
						</form>
						<div class="clearfix"></div>
						<script type="text/javascript">
							CKEDITOR.replace('description');
						</script>
						
					</div>
				</div>
			</div>
		</div><!--/.row-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('.procate').change(function(){
					let idCategory = $(this).val();
					$.ajax({
						url : 'getproductstyle',
						data:{
							idcate:idCategory
						},
						type:'get',
						dataType:'json',
						success : function($data){
							let html = '';
							$.each($data,function($key,$value){
								html += '<option value='+$value['id']+'>';
									html += $value['name'];
								html += '</option>';
							});
							$('#prostyle').html(html);
						}
					});
				});
			});
			
		</script>
	</div>	<!--/.main-->
@stop