@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Login</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif



                    <style type="text/css">
                        .row {
                            margin-left: -15px;
                            margin-right: -15px;
                        }

                        .omb_row-sm-offset-3 div[class*="col-"]:first-child {
                            margin-left: 8%;
                        }
                        .col-sm-2 {
                            width: 16.6667%;
                        }

                        .omb_login .omb_socialButtons .omb_btn-facebook {
                            background: #3b5998 none repeat scroll 0 0;
                        }

                        .omb_login .omb_socialButtons a {
                            color: white;
                        }
                        .omb_login .omb_socialButtons .omb_btn-twitter {
                            background: #00aced none repeat scroll 0 0;
                        }

                        .omb_login .omb_socialButtons .omb_btn-google {
                            background: #c32f10 none repeat scroll 0 0;
                        }
                        .btn-block {
                            display: block;
                            padding-left: 0;
                            padding-right: 0;
                            width: 100%;
                        }
                        .btn-lg {
                            border-radius: 6px;
                            font-size: 18px;
                            line-height: 1.33;
                            padding: 10px 16px;
                        }
                        .btn {
                            -moz-user-select: none;
                            background-image: none;
                            border: 1px solid transparent;
                            border-radius: 4px;
                            cursor: pointer;
                            display: inline-block;
                            font-size: 14px;
                            font-weight: 400;
                            line-height: 1.42857;
                            margin-bottom: 0;
                            padding: 6px 12px;
                            text-align: center;
                            vertical-align: middle;
                            white-space: nowrap;
                        }

                        a {
                            color: #428bca;
                            text-decoration: none;
                        }

                        .col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
                            min-height: 1px;
                            padding-left: 15px;
                            padding-right: 15px;
                            position: relative;
                        }

                        .col-xs-1, .col-xs-2, .col-xs-3, .col-xs-4, .col-xs-5, .col-xs-6, .col-xs-7, .col-xs-8, .col-xs-9, .col-xs-10, .col-xs-11, .col-xs-12 {
                            float: left;
                        }
                        .col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
                            min-height: 1px;
                            padding-left: 15px;
                            padding-right: 15px;
                            position: relative;
                        }

                        .omb_login .omb_loginOr {
                            color: #aaa;
                            font-size: 1.5em;
                            margin-bottom: 1em;
                            margin-top: 1em;
                            padding-bottom: 0.5em;
                            padding-top: 0.5em;
                            position: relative;
                        }



                        .omb_login .omb_loginOr .omb_spanOr {
                            background-color: white;
                            display: block;
                            left: 50%;
                            margin-left: -1.5em;
                            position: absolute;
                            text-align: center;
                            top: -0.6em;
                            width: 3em;
                        }

                        .omb_login .omb_loginOr .omb_hrOr {
                            background-color: #cdcdcd;
                            height: 1px;
                            margin-bottom: 0 !important;
                            margin-top: 0 !important;
                        }

                    </style>
                    <div class="omb_login">
                        <div class="row omb_row-sm-offset-3 omb_socialButtons">
                            <div class="col-xs-4 col-sm-2">
                                <a class="btn btn-lg btn-block omb_btn-facebook" href="#">
                                    <i class="fa fa-facebook visible-xs"></i>
                                    <span class="hidden-xs">LinkedIn</span>
                                </a>
                            </div>
                            <div class="col-xs-4 col-sm-2">
                                <a class="btn btn-lg btn-block omb_btn-facebook" href="#">
                                    <i class="fa fa-facebook visible-xs"></i>
                                    <span class="hidden-xs">Facebook</span>
                                </a>
                            </div>
                            <div class="col-xs-4 col-sm-2">
                                <a class="btn btn-lg btn-block omb_btn-twitter" href="#">
                                    <i class="fa fa-twitter visible-xs"></i>
                                    <span class="hidden-xs">Twitter</span>
                                </a>
                            </div>
                            <div class="col-xs-4 col-sm-2">
                                <a class="btn btn-lg btn-block omb_btn-twitter" href="#">
                                    <i class="fa fa-twitter visible-xs"></i>
                                    <span class="hidden-xs">GitHub</span>
                                </a>
                            </div>
                            <div class="col-xs-4 col-sm-2">
                                <a class="btn btn-lg btn-block omb_btn-google" href="#">
                                    <i class="fa fa-google-plus visible-xs"></i>
                                    <span class="hidden-xs">Google+</span>
                                </a>
                            </div>
                        </div>

                        <div class="row omb_row-sm-offset-3 omb_loginOr">
                            <div class="col-xs-12 col-sm-6">
                                <hr class="omb_hrOr">
                                <span class="omb_spanOr">or</span>
                            </div>
                        </div>


                    </div>


                    <div style="height:20px;clear:both"></div>










					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail Address</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> Remember Me
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">Login</button>

								<a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
