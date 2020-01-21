<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
{{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
<base href="{{asset('')}}">
<title>Login</title>

<link href="backend/css/bootstrap.min.css" rel="stylesheet">
<link href="backend/css/datepicker3.css" rel="stylesheet">
<link href="backend/css/styles.css" rel="stylesheet">

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">Đăng nhập</div>
				<div class="panel-body">
					@if(Session::has('error'))
						<p class="alert alert-danger">{{Session::get('error')}}</p>
					@endif
					<form role="form" method="POST" action="{{route('admin.login')}}">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="email" type="email">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password">
							</div>
							<div class="checkbox">
								<label>
									<input name="ghinho" type="checkbox" value="yes">Nhớ đăng nhập
								</label>
							</div>
							<button type="submit" name="submit" class="btn btn-primary">Đăng nhập</button>
						</fieldset>
						{{csrf_field()}}
					</form>
					
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->	
	
		

	
	
</body>

</html>
