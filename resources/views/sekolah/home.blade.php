@extends('template.template')
@section('content_web')
<div class="clearfix"></div>
<div class="x_panel">
  <div class="x_title">Dashboard</div>
  <div class="x_content">
    <div class="col-md-3">
      <div class="panel panel-default">
        <div class="panel-body">
          <img src="{{asset('/img/chemo.png')}}" class="img-responsive avatar-view"><br>
          <h4><span class="fa fa-university"></span> {{Auth::user()->name}} </h4>
          <table class="table table-stripped">
            @foreach($data as $d)
            <tr><td><span class="glyphicon glyphicon-map-marker"></span></td><td> {{$d->alamat_sekolah}} </td></tr>
            <tr><td><span class="fa fa-phone"></span></td><td> {{$d->telp_sekolah}} </td></tr>
            <tr><td><span class="fa fa-envelope"></span></td><td> {{$d->email_sekolah}} </td></tr>
            <tr><td><span class="fa fa-globe"></span></td><td> {{$d->website_sekolah}} </td></tr>
            <tr><td><span class="glyphicon glyphicon-th-list"></span></td><td> @if(Auth::user()->status==0) <label class="label label-warning">Belum Diverifikasi</label>@else <label class="label label-default">Terverivikasi</label> @endif</td></tr>
            @endforeach
          </table>
        </div>
      </div>
    </div>
    <div class="col-md-9">
    @if(Session::has('pesan'))
      <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          {{Session::get('pesan')}}
      </div>
    @endif
      <div class="panel panel-default">
        @if(count($data)==0)
        <div class="panel-heading">Daftar Ulang</div>
        <div class="panel-body">
          <form class="form form-horizontal col-md-offset-1" action="{{url('/daftarulang')}}" method="POST">
          {{csrf_field()}}
          <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div class="form-group">
              <label class="col-md-2">ID</label>
              <div class="col-md-2">
                <input type="text" name="key" value="{{Auth::user()->key}}" readonly="true" class="form-control">
              </div>
              <label class="col-md-2">Nama Sekolah</label>
              <div class="col-md-4">
                <input type="text" name="nama_sekolah" value="{{Auth::user()->name}}" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-2">Telp </label>
              <div class="col-md-2">
                <input type="text" name="telp_sekolah" class="form-control">
              </div>
              <label class="col-md-2">Email </label>
              <div class="col-md-4">
                <input type="email" name="email_sekolah" class="form-control" value="{{Auth::user()->email}}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-2">Status </label>
              <div class="col-md-8">
                <select class="form-control" name="status_sekolah">
                  <option>----</option>
                  <option value="Negeri">Negeri</option>
                  <option value="Swasta">Swasta</option>
                  <option value="Lainnya">Lainnya</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-2">Alamat </label>
              <div class="col-md-8">
                <input type="text" name="alamat_sekolah" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-2">Website </label>
              <div class="col-md-8">
                <input type="text" name="website_sekolah" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-2">Logo sekolah </label>
              <div class="col-md-8">
                <input type="file" name="logo_sekolah">
              </div>
            </div>
            <div class="col-md-10">
              <button class="btn btn-default pull-right" type="submit"><span class="fa fa-floppy-o"></span> Simpan</button>
            </div>
          </form>
        </div>
        @else
        <div class="panel-heading">Tim sekolah {{Auth::user()->name}} : <label class="label label-primary"> {{count($tim)}} </label>
        </div>
        <div class="panel-body">
          <div class="col-md-9 col-md-offset-1" style="border-top:solid #f0f0f0;"></div><br>
            <form action="{{url('/add_tim')}}" class="form form-horizontal col-md-offset-1" method="POST">
            {{csrf_field()}}
              <input type="hidden" name="_token" value="{{csrf_token()}}">
              <div class="form-group">
                <label class="col-md-2">ID Sekolah</label>
                <div class="col-md-2">
                  <input type="text" name="key_sekolah" value="{{Auth::user()->key}}" readonly="true" class="form-control">
                </div>
                <label class="col-md-2">Nama Tim</label>
                <div class="col-md-4">
                  <input type="text" name="nama_tim" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-md-2">Username</label>
                <div class="col-md-2">
                  <input type="text" name="username" class="form-control">
                </div>
                <label class="col-md-2">Password</label>
                <div class="col-md-2">
                  <input type="password" name="password" class="form-control">
                </div>
                <div class="col-md-2">
                  <input type="password" name="re-password" class="form-control" placeholder="ulang password">
                </div>
              </div>
              
              <div class="col-md-10" style="border-top:solid #f0f0f0;"></div><br>

              <div class="col-md-10">
                <button class="btn btn-default pull-right" type="submit"><span class="fa fa-floppy-o"></span> Simpan</button>
              </div>
            </form>
          <table class="table table-hover">
            <thead style="border-top:solid #f0f0f0;">
              <th>ID Tim</th>
              <th>Nama Tim</th>
              <th>Status</th>
              <th style="text-align:center;">#Opsi</th>

            </thead>
            @if(count($tim)>=1)
            @foreach($tim as $t)
            <tbody>
              <td>{{$t->key}} </td>
              <td>{{$t->nama_tim}} </td>
              <td>{{$t->status}} </td>
              <td style="text-align:center;">

                <a href="{{url('/tim'.'/'.$t->key)}}" class="btn btn-default"><span class="fa fa-search"></span></a>
                <a href="" class="btn btn-warning"><span class="fa fa-edit"></span></a>
                <a href="{{url('/delete_tim'.'/'.$t->key)}}" class="btn btn-danger"><span class="fa fa-trash"></span></a>
              </td>

            </tbody>
            @endforeach
            @else
            <tbody>
            <td colspan="4" style="text-align:center;">Anda Belum Memiliki Tim</td>
            </tbody>
            @endif
          </table>
        </div>

        @endif

      </div>
    </div>
  </div>
</div>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>

                  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                      <div class="modal-content">

                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                        </div>
                        <div class="modal-body">
                          <h4>Text in a modal</h4>
                          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
                          <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                        </div>

                      </div>
                    </div>
                  </div>
@endsection