@extends('client.clientmaster')
@section('main')
				<div id="main" class="col-md-9">
					<!-- main -->
					<!-- phan slide la cac hieu ung chuyen dong su dung jquey -->
					<div id="wrap-inner">
						<div id="complete" style="margin-top: 15px;border: 1px solid #6c0;padding: 10px 10px;">
							<p class="info" style="color: #6c0;text-align: justify;">Quý khách đã đặt hàng thành công!</p>
							<p style="color: #6c0;text-align: justify;">• Hóa đơn mua hàng đã được chuyển đến Email của bạn</p>
							<p style="color: #6c0;text-align: justify;">• Sản phẩm của Quý khách sẽ được chuyển đến Địa có trong phần Thông tin Khách hàng của chúng Tôi sau thời gian 2 đến 3 ngày, tính từ thời điểm này.</p>
							<p style="color: #6c0;text-align: justify;">• Nhân viên giao hàng sẽ liên hệ với Quý khách qua Số Điện thoại trước khi giao hàng 24 tiếng</p>
							<p style="color: #6c0;text-align: justify;">• Trụ sở chính: Số 66 Ngõ 178/72 - Hoàng Cầu Đống Đa - Hà Nội</p>
							<p style="color: #6c0;text-align: justify;">Xin cảm ơn!</p>
						</div>
						<p class="text-right return"><a class="btn btn-primary" href="{{asset('/')}}">Quay lại trang chủ</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>	

@stop