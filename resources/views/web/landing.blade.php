@extends('template.template')
@section('content_web')

    <!-- Home Section -->
    <div id="home">
        <div class="container text-center">
                <div class="content">
               
                <div class="row">
                    <div class="col-md-7">
                    <div class="welcome">
                        <h1>Selamat Datang di Website Resmi Chemo 5</h1>
                    </div>
                     @if(Session::has('pesan'))
                    <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    {{Session::get('pesan')}}
                    </div>            
                    @endif
                    </div>
                    @if(Auth::guest())
                	<div class="col-md-4">
                    <!--Registrasi-->
                		<div class="x_panel">
                			<div class="x_title">

                            Daftar Sebagai Peserta CHEMO
                            </div>
                			<div class="x_content">
            				<form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Nama Sekolah</label>

                            <div class="col-md-8">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">e-Mail</label>

                            <div class="col-md-8">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="username" class="col-md-4 control-label">Username</label>

                            <div class="col-md-8">
                                <input id="username" type="username" class="form-control" name="username" value="{{ old('username') }}">

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-8">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Ulangi Password</label>

                            <div class="col-md-8">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>

                        <div class="col-md-8">
                            <p>Sudah Punya Akun? <a href="{{url('/login')}}">Login</a> </p>
                        </div>
                        <div class="col-md-4">
                            <div class="x_footer">
                                <button type="submit" class="btn btn-primary">
                                    <i class="glyphicon glyphicon-edit"></i> Daftar
                                </button>
                            </div>    
                        </div>
                        
                    </form>
                		</div>
                        @endif
                	</div>
                </div>
            </div>
        
    </div>
    </div>
    </div>
    <!-- Meet Us Section -->
    <div id="about">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title">
                        <h2>Tentang Kami</h2>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><img src="{{asset('img/cssuin.png')}}" style="width:300px;"> </div>
                        <div class="col-md-8">
                            <p class="aboutcss">CSS MoRA UIN Syarif Hidayatullah adalah Community Santri Scholars of ministry of religious affairs. yaitu Organisasi yang mewadahi mahasiswa yang mendapat beasiswa dari kementerian Agama RI <br>
                            </p>
                            <a href="" style="text-align:right; color:blue;">Selengkapnya...</a>
                        </div>
                    </div>
                </div>
                <!--about chemo-->
                <div class="clearfix"></div>
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title">
                        <h2>Tentang CHEMO</h2>
                        <hr>
                    </div>
                    <div class="row">
                        <div class="col-md-4"><img src="{{asset('img/cssuin.png')}}" style="width:300px;"> </div>
                        <div class="col-md-8">
                            <p class="aboutcss">CSS MoRA UIN Syarif Hidayatullah adalah Community Santri Scholars of ministry of religious affairs. yaitu Organisasi yang mewadahi mahasiswa yang mendapat beasiswa dari kementerian Agama RI <br>
                            </p>
                            <a href="" style="text-align:right; color:blue;">Selengkapnya...</a>
                        </div>
                    </div>
                    
                    <a href="#services" class="down-btn page-scroll">
                        <span class="fa fa-angle-down"></span>
                    </a>
                </div>    
            </div>
        </div>
    </div>

    <!-- Overview Video Section -->
    <div id="overview-video">
        <div class="overlay">
            <div class="container">
                <a href="#">
                    <span class="fa fa-play"></span>
                </a>
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <div id="step">
        <div class="container text-center">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title">
                        <h2>Tahap Perlombaan</h2>
                        <hr>
                    </div>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                </div>
            </div>

            <div class="space"></div>

            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="service">
                        <span class="fa fa-desktop fa-3x"></span>
                        <h4>CBT Online</h4>
                        <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis. </p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="service">
                        <span class="fa fa-bar-chart fa-3x"></span>
                        <h4>Presentasi Kasus</h4>
                        <p>Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Accusamus et. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis </p>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4">
                    <div class="service">
                        <span class="fa fa-bell fa-3x"></span>
                        <h4>Cerdas Cermat</h4>
                        <p>Nulla vitae elit libero, a pharetra augue. At vero eos et accusamus et iusto odio dignissimos ducimus. Aenean lacinia bibendum nulla sed consectetur. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. </p>
                    </div>
                </div>
            </div>
            <a href="#works" class="down-btn page-scroll">
                <span class="fa fa-angle-down"></span>
            </a>
        </div>
    </div>

    <!-- Call-to-Action Section -->
    <div id="testimonials">
        <div class="overlay">
            <div class="container">
                <div class="section-title">
                    <h2>Testimoni</h2>
                    <hr>
                </div>

                <div id="testimonial" class="owl-carousel owl-theme">
                  <div class="item">
                    <h3>Et iusto odio dignissimos ducimus qui blanditiis <br>praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint <br>occaecati cupiditate non provident. </h3>
                    <br>
                    <h6>LJ, Abc Company</h6>
                  </div>

                  <div class="item">
                    <h3>Fusce dapibus, tellus ac cursus commodo, tortor<br> mauris condimentum. Duis mollis, est non commodo luctus, nisi erat </h3>
                    <br>
                    <h6>Kai, Web Geekster</h6>
                  </div>

                  <div class="item">
                    <h3>Cras justo odio, dapibus ac facilisis in, egestas <br>eget quam. Donec id elit non mi porta gravida at eget metus.</h3>
                    <br>
                    <h6>Jenn, Coders' Playground</h6>
                  </div>
                </div>
            </div>
        </div>
    </div>

    <!-- About Us Section -->
    <div id="hadiah">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title">
                        <h2>Hadiah <span class="fa fa-trophy"></span></h2>
                        <hr>
                    </div>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                </div>
            </div>
            <div class="space"></div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="pricing">
                            <div class="title">
                              <h2>Jurara</h2>
                              <h1>1</h1>
                            </div>
                            <div class="x_content">
                              <div class="">
                                <div class="pricing_features">
                                  <ul class="list-unstyled text-left">
                                    <li><i class="fa fa-times text-danger"></i> 2 years access <strong> to all storage locations</strong></li>
                                    <li><i class="fa fa-times text-danger"></i> <strong>Unlimited</strong> storage</li>
                                    <li><i class="fa fa-check text-success"></i> Limited <strong> download quota</strong></li>
                                    <li><i class="fa fa-check text-success"></i> <strong>Cash on Delivery</strong></li>
                                    <li><i class="fa fa-check text-success"></i> All time <strong> updates</strong></li>
                                    <li><i class="fa fa-times text-danger"></i> <strong>Unlimited</strong> access to all files</li>
                                    <li><i class="fa fa-times text-danger"></i> <strong>Allowed</strong> to be exclusing per sale</li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                            <div class="pricing">
                            <div class="title">
                              <h2>Juara</h2>
                              <h1>2</h1>
                            </div>
                            <div class="x_content">
                              <div class="">
                                <div class="pricing_features">
                                  <ul class="list-unstyled text-left">
                                    <li><i class="fa fa-times text-danger"></i> 2 years access <strong> to all storage locations</strong></li>
                                    <li><i class="fa fa-times text-danger"></i> <strong>Unlimited</strong> storage</li>
                                    <li><i class="fa fa-check text-success"></i> Limited <strong> download quota</strong></li>
                                    <li><i class="fa fa-check text-success"></i> <strong>Cash on Delivery</strong></li>
                                    <li><i class="fa fa-check text-success"></i> All time <strong> updates</strong></li>
                                    <li><i class="fa fa-times text-danger"></i> <strong>Unlimited</strong> access to all files</li>
                                    <li><i class="fa fa-times text-danger"></i> <strong>Allowed</strong> to be exclusing per sale</li>
                                  </ul>
                                </div>
                              </div>
                             
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                            <div class="pricing">
                            <div class="title">
                              <h2>Juara</h2>
                              <h1>3</h1>
                            </div>
                            <div class="x_content">
                              <div class="">
                                <div class="pricing_features">
                                  <ul class="list-unstyled text-left">
                                    <li><i class="fa fa-times text-danger"></i> 2 years access <strong> to all storage locations</strong></li>
                                    <li><i class="fa fa-times text-danger"></i> <strong>Unlimited</strong> storage</li>
                                    <li><i class="fa fa-check text-success"></i> Limited <strong> download quota</strong></li>
                                    <li><i class="fa fa-check text-success"></i> <strong>Cash on Delivery</strong></li>
                                    <li><i class="fa fa-check text-success"></i> All time <strong> updates</strong></li>
                                    <li><i class="fa fa-times text-danger"></i> <strong>Unlimited</strong> access to all files</li>
                                    <li><i class="fa fa-times text-danger"></i> <strong>Allowed</strong> to be exclusing per sale</li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <a href="#testimonials" class="page-scroll down-btn">
                    <span class="fa fa-angle-down"></span>
                </a>
            </div>

        </div>
    </div>

  
    <!-- Clients Section -->
    <div id="sponsor">
        <div class="overlay">
            <div class="container text-center">
                <div class="section-title">
                    <h2>sponsor</h2>
                    <hr>
                </div>

                <ul class="clients">
                    <li><a href="#"><img src="{{asset('landing/img/clients/01.png')}}" class="img-responsive" alt="..."></a></li>
                    <li><a href="#"><img src="{{asset('landing/img/clients/02.png')}}" class="img-responsive" alt="..."></a></li>
                    <li><a href="#"><img src="{{asset('landing/img/clients/03.png')}}" class="img-responsive" alt="..."></a></li>
                    <li><a href="#"><img src="{{asset('landing/img/clients/04.png')}}" class="img-responsive" alt="..."></a></li>
                </ul>
                <ul class="clients">
                    <li><a href="#"><img src="{{asset('landing/img/clients/01.png')}}" class="img-responsive" alt="..."></a></li>
                    <li><a href="#"><img src="{{asset('landing/img/clients/02.png')}}" class="img-responsive" alt="..."></a></li>
                    <li><a href="#"><img src="{{asset('landing/img/clients/03.png')}}" class="img-responsive" alt="..."></a></li>
                    <li><a href="#"><img src="{{asset('landing/img/clients/04.png')}}" class="img-responsive" alt="..."></a></li>
                </ul>
            </div>
        </div>
    </div>

    
        <!-- Testimonial Section -->
    
@endsection