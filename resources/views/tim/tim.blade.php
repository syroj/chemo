@extends('template.template')
@section('content_web')
<div class="x_panel">
	<div class="x_title"><h4>Halaman Tim</h4></div>
	<div class="x_content">
		<div class="col-md-4">
		<div class="panel panel-default">
			<div class="panel-heading">Tim {{Auth::user()->name}}</div>
			<div class="panel-body">
			<form  action="{{url('/')}}" class="form form-horizontal" method="POST">
				<div class="form-group">
					<label class="col-md-3">Tim</label>
					<div class="col-md-8">
						<select class="form-control">
							<option></option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3">Nama</label>
					<div class="col-md-8">
						<input type="text" class="form-control" name="key" value="">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3">Tgl Lahir</label>
					<div class="col-md-8">
						<input type="text" class="form-control" name="key" value="">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3">kelas</label>
					<div class="col-md-8">
						<input type="text" class="form-control" name="key" value="">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3">Telp</label>
					<div class="col-md-8">
						<input type="text" class="form-control" name="key" value="">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3">Email</label>
					<div class="col-md-8">
						<input type="text" class="form-control" name="key" value="">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3">Alamat</label>
					<div class="col-md-8">
						<input type="text" class="form-control" name="key" value="">
					</div>
				</div>
				<div class="form-group">
					<label class="col-md-3">Foto</label>
					<div class="col-md-8">
						<input type="file">
					</div>
				</div>
				<div class="col-md-11"><button class="btn btn-default pull-right">Simpan</button> </div>
			</form>
			</div>
		</div>
		</div>
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading">Anggota Tim</div>
				<div class="panel-body"></div>
			</div>
		</div>
		
	</div>
</div>
@endsection