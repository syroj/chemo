@extends('template.template')
@section('content_web')
<center style="margin-top:15%;margin-bottom:20%;">
<div class="x_panel" style="width:50%">
	<div class="x_xontent">
		<div class="col-md-4" style="height:auto;"><a class="fa fa-ban" style="font-size:60px; color:red; padding-top:20%;"></a><br><p style="font-size:20px;">Stop !</p> </div>
		<div class="col-md-8">
			<h1>-404-</h1>
			<p>Access Denied..!<br>
			Anda Tidak dizinkan mengakses halaman ini...<br>
			<a href="{{url('/home')}}" class="btn btn-default"><i class="fa fa-reply"></i> Kembali</a>
			</p>
		</div>
	</div>
</div>
</center>
@endsection