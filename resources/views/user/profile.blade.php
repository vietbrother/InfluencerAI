@extends('layouts.app')
@section('content')
    <!-- Top Navigation -->
    @include('layouts.partials.menu_top')
    <!-- End Top Navigation -->
    <!-- Left navbar-header -->
    @include('layouts.partials.menu_left')
    <!-- Left navbar-header -->

    <!-- Page Content -->
    <div id="page-wrapper" class="main-content-page">
        <div class="container-fluid">
            <div class="row bg-title">
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                    <h4 class="page-title">Profile page</h4></div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li class="active"><a href="/home">Dashboard</a></li>
                        {{--<li><a href="#">Sample Pages</a></li>--}}
                        {{--<li class="active">Profile page</li>--}}
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-inverse cover-img">
                                {{--<img class="card-img" src="theme/plugins/images/cards/7.jpg" alt="Card image">--}}
                                {{--<div class="row">--}}
                                {{--<div class="col-lg-3 col-sm-3 col-md-3 col-xs-12 justify-content-center">--}}
                                {{--<div class="overlay-box avatar">--}}
                                {{--<div class="user-content">--}}
                                {{--<a href="/profile/edit"><img--}}
                                {{--src="../../../theme/plugins/images/users/varun.jpg"--}}
                                {{--class="thumb-extra-lg img-circle" alt="img"></a>--}}
                                {{--<br/><br/>--}}
                                {{--<a href="/profile/edit" target="_self"--}}
                                {{--class="btn m-l-40 btn-md btn-white ">Edit--}}
                                {{--Profile</a>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-lg-9 col-sm-9 col-md-9 col-xs-12 justify-content-center">--}}
                                {{--<div class="user-btm-box">--}}
                                {{--<div class="col-md-3 col-xs-12 b-r text-white"><strong>Full Name</strong>--}}
                                {{--<br>--}}
                                {{--<p class="text-white">--}}
                                {{--@if(!empty(Auth::user()))--}}
                                {{--{!! Auth::user()->name !!}--}}
                                {{--@else--}}
                                {{--{{"none"}}--}}
                                {{--@endif--}}
                                {{--</p>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-3 col-xs-12 b-r text-white"><strong>Mobile</strong>--}}
                                {{--<br>--}}
                                {{--<p class="text-white">(123) 456 7890</p>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-3 col-xs-12 b-r text-white"><strong>Email</strong>--}}
                                {{--<br>--}}
                                {{--<p class="text-white">--}}
                                {{--@if(!empty(Auth::user()))--}}
                                {{--{!! Auth::user()->email !!}--}}
                                {{--@else--}}
                                {{--{{"none"}}--}}
                                {{--@endif</p>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-3 col-xs-12 text-white"><strong>Location</strong>--}}
                                {{--<br>--}}
                                {{--<p class="text-white">New York</p>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--<br>--}}
                                {{--<div class="user-btm-box">--}}
                                {{--<div class="col-md-12 col-xs-12 b-r text-white">--}}
                                {{--<strong>Tags</strong>--}}
                                {{--<br/>--}}
                                {{--<p class="text-white">--}}
                                {{--<span class="btn btn-white btn-sm  btn-rounded btn-outline waves-effect waves-light text-white">Design</span>--}}
                                {{--<span class="btn btn-white btn-sm  btn-rounded btn-outline waves-effect waves-light text-white">Backend</span>--}}
                                {{--<span class="btn btn-white btn-sm  btn-rounded btn-outline waves-effect waves-light text-white">AI</span>--}}
                                {{--</p>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{----}}

                                <div class="row">
                                    <div class="col-lg-2 col-sm-3 col-md-3 col-xs-12 justify-content-center">
                                        <div class="overlay-box avatar">
                                            <div class="user-content">
                                                <a href="/profile/edit"><img
                                                            src="{{Auth::user()->avatar ?? "../../../theme/plugins/images/users/user_df.jpg"}}"
                                                            class="thumb-extra-lg img-circle" alt="img"></a>
                                                <br><br>
                                                <a href="/profile/edit" target="_self"
                                                   class="btn m-l-40 btn-md btn-white ">Edit
                                                    Profile</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-sm-9 col-md-9 col-xs-12 justify-content-center">
                                        <br>
                                        <div class="user-btm-box">

                                            <div class="col-md-10 col-xs-12 b-r text-white">
                                                <strong style="font-size: 30px;">
                                                    @if(!empty(Auth::user()))
                                                        {!! Auth::user()->full_name !!}
                                                    @else
                                                        {{"none"}}
                                                    @endif
                                                </strong>
                                                <br>
                                                <span class="text-white"><i class="ti-location-pin mr-2"></i>
                                                    {{ !isset(Auth::user()->location) || trim(Auth::user()->location) == '' ? 'New York, USA' :  Auth::user()->location . ', ' . Auth::user()->country}}
                                                </span>
                                            </div>

                                        </div>
                                        <br>
                                        <div class="">
                                            <div class="col-md-12 col-xs-12 b-r text-white">
                                                <p class="text-white">
                                                    <span class="text-white"><i class="icon-tag"></i></span>
                                                    <span class="btn btn-white btn-sm  btn-rounded btn-outline waves-effect waves-light text-white">Design</span>
                                                    <span class="btn btn-white btn-sm  btn-rounded btn-outline waves-effect waves-light text-white">Backend</span>
                                                    <span class="btn btn-white btn-sm  btn-rounded btn-outline waves-effect waves-light text-white">AI</span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- .row -->
            <br/>

            <div class="row">
                <div class="col-md-9 col-xs-12">
                    {{--<div class="white-box">--}}
                    {{--<div class="sttabs tabs-style-linemove">--}}
                    {{--<ul class="nav nav-tabs " role="tablist">--}}
                    {{--<li role="presentation" class="active nav-item"><a href="#overview" class="nav-link"--}}
                    {{--aria-controls="home" role="tab"--}}
                    {{--data-toggle="tab"--}}
                    {{--aria-expanded="true"><span><i--}}
                    {{--class="ti-cup"></i> Overview</span></a></li>--}}
                    {{--<li role="presentation" class="nav-item"><a href="#info" class="nav-link"--}}
                    {{--aria-controls="profile" role="tab"--}}
                    {{--data-toggle="tab"--}}
                    {{--aria-expanded="false"><span><i--}}
                    {{--class="ti-user"></i>  Info</span> </a></li>--}}
                    {{--</ul>--}}
                    {{--<div class="tab-content">--}}
                    {{--<div role="tabpanel" class="tab-pane active" id="overview">--}}
                    {{--<div class="col-md-12 col-xs-12">--}}
                    {{--<div class="row row-in">--}}
                    {{--<div class="col-lg-4 col-sm-4 row-in-br">--}}
                    {{--<div class="col-in row">--}}
                    {{--<div class="col-md-6 col-sm-6 col-xs-6"><i--}}
                    {{--class="linea-icon linea-basic ti-star"></i>--}}
                    {{--<h5 class="text-muted vb">RATE</h5></div>--}}
                    {{--<div class="col-md-6 col-sm-6 col-xs-6">--}}
                    {{--<h3 class="counter text-right m-t-15 text-danger">4/5</h3></div>--}}
                    {{--<div class="col-md-12 col-sm-12 col-xs-12">--}}
                    {{--<div class="progress">--}}
                    {{--<div class="progress-bar progress-bar-danger"--}}
                    {{--role="progressbar" aria-valuenow="40" aria-valuemin="0"--}}
                    {{--aria-valuemax="100" style="width: 40%"><span--}}
                    {{--class="sr-only">80% Complete (success)</span>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-lg-4 col-sm-4 row-in-br  b-r-none">--}}
                    {{--<div class="col-in row">--}}
                    {{--<div class="col-md-6 col-sm-6 col-xs-6"><i--}}
                    {{--class="linea-icon linea-basic" data-icon=""></i>--}}
                    {{--<h5 class="text-muted vb">NEW PROJECTS</h5></div>--}}
                    {{--<div class="col-md-6 col-sm-6 col-xs-6">--}}
                    {{--<h3 class="counter text-right m-t-15 text-megna">169</h3></div>--}}
                    {{--<div class="col-md-12 col-sm-12 col-xs-12">--}}
                    {{--<div class="progress">--}}
                    {{--<div class="progress-bar progress-bar-megna"--}}
                    {{--role="progressbar" aria-valuenow="40" aria-valuemin="0"--}}
                    {{--aria-valuemax="100" style="width: 40%"><span--}}
                    {{--class="sr-only">40% Complete (success)</span>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-lg-4 col-sm-4 row-in-br  b-r-none">--}}
                    {{--<div class="col-in row">--}}
                    {{--<div class="col-md-6 col-sm-6 col-xs-6"><i--}}
                    {{--class="linea-icon linea-basic" data-icon=""></i>--}}
                    {{--<h5 class="text-muted vb">All CAMPAINS</h5></div>--}}
                    {{--<div class="col-md-6 col-sm-6 col-xs-6">--}}
                    {{--<h3 class="counter text-right m-t-15 text-success">431</h3>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-12 col-sm-12 col-xs-12">--}}
                    {{--<div class="progress">--}}
                    {{--<div class="progress-bar progress-bar-success"--}}
                    {{--role="progressbar" aria-valuenow="40" aria-valuemin="0"--}}
                    {{--aria-valuemax="100" style="width: 40%"><span--}}
                    {{--class="sr-only">40% Complete (success)</span>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}

                    {{--</div>--}}
                    {{--<br>--}}
                    {{--<div class="table-responsive">--}}
                    {{--<table class="table">--}}
                    {{--<thead>--}}
                    {{--<tr>--}}
                    {{--<th class="text-center"></th>--}}
                    {{--<th><i class="ti-user"> </i>Friend</th>--}}
                    {{--<th><i class="icon-like"></i> Like</th>--}}
                    {{--<th><i class="ti-briefcase"></i> Post</th>--}}
                    {{--</tr>--}}
                    {{--</thead>--}}
                    {{--<tbody>--}}
                    {{--<tr>--}}
                    {{--<td class="text-center">--}}
                    {{--<button class="btn btn-facebook btn-lg waves-effect btn-circle waves-light">--}}
                    {{--<i class="fa fa-facebook"></i></button>--}}
                    {{--</td>--}}
                    {{--<td>--}}
                    {{--<h3>650</h3>--}}
                    {{--</td>--}}
                    {{--<td><h3 class="text-info">200</h3></td>--}}
                    {{--<td>--}}
                    {{--<h3>610</h3>--}}
                    {{--</td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                    {{--<td class="text-center">--}}
                    {{--<button class="btn btn-twitter btn-lg waves-effect btn-circle waves-light">--}}
                    {{--<i class="fa fa-twitter"></i></button>--}}
                    {{--</td>--}}
                    {{--<td>--}}
                    {{--<h3>650</h3>--}}
                    {{--</td>--}}
                    {{--<td><h3 class="text-info">200</h3></td>--}}
                    {{--<td>--}}
                    {{--<h3>610</h3>--}}
                    {{--</td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                    {{--<td class="text-center">--}}
                    {{--<button class="btn btn-warning btn-lg waves-effect btn-circle waves-light">--}}
                    {{--<i class="fa fa-instagram"></i></button>--}}
                    {{--</td>--}}
                    {{--<td>--}}
                    {{--<h3>650</h3>--}}
                    {{--</td>--}}
                    {{--<td><h3 class="text-info">200</h3></td>--}}
                    {{--<td>--}}
                    {{--<h3>610</h3>--}}
                    {{--</td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                    {{--<td class="text-center">--}}
                    {{--<button class="btn btn-youtube btn-lg waves-effect btn-circle waves-light">--}}
                    {{--<i class="fa fa-youtube"></i></button>--}}
                    {{--</td>--}}
                    {{--<td>--}}
                    {{--<h3>650</h3>--}}
                    {{--</td>--}}
                    {{--<td><h3 class="text-info">200</h3></td>--}}
                    {{--<td>--}}
                    {{--<h3>610</h3>--}}
                    {{--</td>--}}
                    {{--</tr>--}}

                    {{--</tbody>--}}
                    {{--</table>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="clearfix"></div>--}}
                    {{--</div>--}}
                    {{--<div role="tabpanel" class="tab-pane" id="info">--}}
                    {{--<div class="col-lg12 col-md-12">--}}
                    {{--<div class="row">--}}
                    {{--<div class="col-md-3 col-xs-6 b-r"><strong>Full Name</strong>--}}
                    {{--<br>--}}
                    {{--<p class="text-muted">--}}
                    {{--@if(!empty(Auth::user()))--}}
                    {{--{!! Auth::user()->name !!}--}}
                    {{--@else--}}
                    {{--{{"none"}}--}}
                    {{--@endif--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-3 col-xs-6 b-r"><strong>Mobile</strong>--}}
                    {{--<br>--}}
                    {{--<p class="text-muted">(123) 456 7890</p>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-3 col-xs-6 b-r"><strong>Email</strong>--}}
                    {{--<br>--}}
                    {{--<p class="text-muted">--}}
                    {{--@if(!empty(Auth::user()))--}}
                    {{--{!! Auth::user()->email !!}--}}
                    {{--@else--}}
                    {{--{{"none"}}--}}
                    {{--@endif--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-3 col-xs-6"><strong>Location</strong>--}}
                    {{--<br>--}}
                    {{--<p class="text-muted">London</p>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<hr>--}}
                    {{--<p class="m-t-30">Description.</p>--}}
                    {{--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.--}}
                    {{--Lorem Ipsum has been the industry's standard dummy text ever since the--}}
                    {{--1500s, when an unknown printer took a galley of type and scrambled it to--}}
                    {{--make a type specimen book. It has survived not only five centuries </p>--}}
                    {{--<p>It was popularised in the 1960s with the release of Letraset sheets--}}
                    {{--containing Lorem Ipsum passages, and more recently with desktop publishing--}}
                    {{--software like Aldus PageMaker including versions of Lorem Ipsum.</p>--}}
                    {{--<h4 class="font-bold m-t-30">Skill Set</h4>--}}
                    {{--<hr>--}}
                    {{--<h5>Wordpress <span class="pull-right">80%</span></h5>--}}
                    {{--<div class="progress">--}}
                    {{--<div class="progress-bar progress-bar-success" role="progressbar"--}}
                    {{--aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"--}}
                    {{--style="width:80%;"><span class="sr-only">50% Complete</span></div>--}}
                    {{--</div>--}}
                    {{--<h5>HTML 5 <span class="pull-right">90%</span></h5>--}}
                    {{--<div class="progress">--}}
                    {{--<div class="progress-bar progress-bar-custom" role="progressbar"--}}
                    {{--aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"--}}
                    {{--style="width:90%;"><span class="sr-only">50% Complete</span></div>--}}
                    {{--</div>--}}
                    {{--<h5>jQuery <span class="pull-right">50%</span></h5>--}}
                    {{--<div class="progress">--}}
                    {{--<div class="progress-bar progress-bar-primary" role="progressbar"--}}
                    {{--aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"--}}
                    {{--style="width:50%;"><span class="sr-only">50% Complete</span></div>--}}
                    {{--</div>--}}
                    {{--<h5>Photoshop <span class="pull-right">70%</span></h5>--}}
                    {{--<div class="progress">--}}
                    {{--<div class="progress-bar progress-bar-danger" role="progressbar"--}}
                    {{--aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"--}}
                    {{--style="width:70%;"><span class="sr-only">50% Complete</span></div>--}}
                    {{--</div>--}}

                    {{--</div>--}}
                    {{--<div class="clearfix"></div>--}}
                    {{--</div>--}}
                    {{--<div role="tabpanel" class="tab-pane" id="imessages">--}}
                    {{--<div class="col-md-6">--}}
                    {{--<h3>Come on you have a lot message</h3>--}}
                    {{--<h4>you can use it with the small code</h4>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-5 pull-right">--}}
                    {{--<p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim--}}
                    {{--justo, rhoncus ut, imperdiet a.</p>--}}
                    {{--</div>--}}
                    {{--<div class="clearfix"></div>--}}
                    {{--</div>--}}
                    {{--<div role="tabpanel" class="tab-pane" id="isettings">--}}
                    {{--<div class="col-md-6">--}}
                    {{--<h3>Just do Settings</h3>--}}
                    {{--<h4>you can use it with the small code</h4>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-5 pull-right">--}}
                    {{--<p>Vulputate eget, fringilla vel, aliquet nec, daf adfd vulputate eget, arcu. In--}}
                    {{--enim justo, rhoncus ut, imperdiet a.</p>--}}
                    {{--</div>--}}
                    {{--<div class="clearfix"></div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- /content -->--}}
                    {{--</div>--}}
                    {{--</div>                    {{--<div class="white-box">--}}
                    {{--<div class="sttabs tabs-style-linemove">--}}
                    {{--<ul class="nav nav-tabs " role="tablist">--}}
                    {{--<li role="presentation" class="active nav-item"><a href="#overview" class="nav-link"--}}
                    {{--aria-controls="home" role="tab"--}}
                    {{--data-toggle="tab"--}}
                    {{--aria-expanded="true"><span><i--}}
                    {{--class="ti-cup"></i> Overview</span></a></li>--}}
                    {{--<li role="presentation" class="nav-item"><a href="#info" class="nav-link"--}}
                    {{--aria-controls="profile" role="tab"--}}
                    {{--data-toggle="tab"--}}
                    {{--aria-expanded="false"><span><i--}}
                    {{--class="ti-user"></i>  Info</span> </a></li>--}}
                    {{--</ul>--}}
                    {{--<div class="tab-content">--}}
                    {{--<div role="tabpanel" class="tab-pane active" id="overview">--}}
                    {{--<div class="col-md-12 col-xs-12">--}}
                    {{--<div class="row row-in">--}}
                    {{--<div class="col-lg-4 col-sm-4 row-in-br">--}}
                    {{--<div class="col-in row">--}}
                    {{--<div class="col-md-6 col-sm-6 col-xs-6"><i--}}
                    {{--class="linea-icon linea-basic ti-star"></i>--}}
                    {{--<h5 class="text-muted vb">RATE</h5></div>--}}
                    {{--<div class="col-md-6 col-sm-6 col-xs-6">--}}
                    {{--<h3 class="counter text-right m-t-15 text-danger">4/5</h3></div>--}}
                    {{--<div class="col-md-12 col-sm-12 col-xs-12">--}}
                    {{--<div class="progress">--}}
                    {{--<div class="progress-bar progress-bar-danger"--}}
                    {{--role="progressbar" aria-valuenow="40" aria-valuemin="0"--}}
                    {{--aria-valuemax="100" style="width: 40%"><span--}}
                    {{--class="sr-only">80% Complete (success)</span>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-lg-4 col-sm-4 row-in-br  b-r-none">--}}
                    {{--<div class="col-in row">--}}
                    {{--<div class="col-md-6 col-sm-6 col-xs-6"><i--}}
                    {{--class="linea-icon linea-basic" data-icon=""></i>--}}
                    {{--<h5 class="text-muted vb">NEW PROJECTS</h5></div>--}}
                    {{--<div class="col-md-6 col-sm-6 col-xs-6">--}}
                    {{--<h3 class="counter text-right m-t-15 text-megna">169</h3></div>--}}
                    {{--<div class="col-md-12 col-sm-12 col-xs-12">--}}
                    {{--<div class="progress">--}}
                    {{--<div class="progress-bar progress-bar-megna"--}}
                    {{--role="progressbar" aria-valuenow="40" aria-valuemin="0"--}}
                    {{--aria-valuemax="100" style="width: 40%"><span--}}
                    {{--class="sr-only">40% Complete (success)</span>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="col-lg-4 col-sm-4 row-in-br  b-r-none">--}}
                    {{--<div class="col-in row">--}}
                    {{--<div class="col-md-6 col-sm-6 col-xs-6"><i--}}
                    {{--class="linea-icon linea-basic" data-icon=""></i>--}}
                    {{--<h5 class="text-muted vb">All CAMPAINS</h5></div>--}}
                    {{--<div class="col-md-6 col-sm-6 col-xs-6">--}}
                    {{--<h3 class="counter text-right m-t-15 text-success">431</h3>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-12 col-sm-12 col-xs-12">--}}
                    {{--<div class="progress">--}}
                    {{--<div class="progress-bar progress-bar-success"--}}
                    {{--role="progressbar" aria-valuenow="40" aria-valuemin="0"--}}
                    {{--aria-valuemax="100" style="width: 40%"><span--}}
                    {{--class="sr-only">40% Complete (success)</span>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--</div>--}}

                    {{--</div>--}}
                    {{--<br>--}}
                    {{--<div class="table-responsive">--}}
                    {{--<table class="table">--}}
                    {{--<thead>--}}
                    {{--<tr>--}}
                    {{--<th class="text-center"></th>--}}
                    {{--<th><i class="ti-user"> </i>Friend</th>--}}
                    {{--<th><i class="icon-like"></i> Like</th>--}}
                    {{--<th><i class="ti-briefcase"></i> Post</th>--}}
                    {{--</tr>--}}
                    {{--</thead>--}}
                    {{--<tbody>--}}
                    {{--<tr>--}}
                    {{--<td class="text-center">--}}
                    {{--<button class="btn btn-facebook btn-lg waves-effect btn-circle waves-light">--}}
                    {{--<i class="fa fa-facebook"></i></button>--}}
                    {{--</td>--}}
                    {{--<td>--}}
                    {{--<h3>650</h3>--}}
                    {{--</td>--}}
                    {{--<td><h3 class="text-info">200</h3></td>--}}
                    {{--<td>--}}
                    {{--<h3>610</h3>--}}
                    {{--</td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                    {{--<td class="text-center">--}}
                    {{--<button class="btn btn-twitter btn-lg waves-effect btn-circle waves-light">--}}
                    {{--<i class="fa fa-twitter"></i></button>--}}
                    {{--</td>--}}
                    {{--<td>--}}
                    {{--<h3>650</h3>--}}
                    {{--</td>--}}
                    {{--<td><h3 class="text-info">200</h3></td>--}}
                    {{--<td>--}}
                    {{--<h3>610</h3>--}}
                    {{--</td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                    {{--<td class="text-center">--}}
                    {{--<button class="btn btn-warning btn-lg waves-effect btn-circle waves-light">--}}
                    {{--<i class="fa fa-instagram"></i></button>--}}
                    {{--</td>--}}
                    {{--<td>--}}
                    {{--<h3>650</h3>--}}
                    {{--</td>--}}
                    {{--<td><h3 class="text-info">200</h3></td>--}}
                    {{--<td>--}}
                    {{--<h3>610</h3>--}}
                    {{--</td>--}}
                    {{--</tr>--}}
                    {{--<tr>--}}
                    {{--<td class="text-center">--}}
                    {{--<button class="btn btn-youtube btn-lg waves-effect btn-circle waves-light">--}}
                    {{--<i class="fa fa-youtube"></i></button>--}}
                    {{--</td>--}}
                    {{--<td>--}}
                    {{--<h3>650</h3>--}}
                    {{--</td>--}}
                    {{--<td><h3 class="text-info">200</h3></td>--}}
                    {{--<td>--}}
                    {{--<h3>610</h3>--}}
                    {{--</td>--}}
                    {{--</tr>--}}

                    {{--</tbody>--}}
                    {{--</table>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="clearfix"></div>--}}
                    {{--</div>--}}
                    {{--<div role="tabpanel" class="tab-pane" id="info">--}}
                    {{--<div class="col-lg12 col-md-12">--}}
                    {{--<div class="row">--}}
                    {{--<div class="col-md-3 col-xs-6 b-r"><strong>Full Name</strong>--}}
                    {{--<br>--}}
                    {{--<p class="text-muted">--}}
                    {{--@if(!empty(Auth::user()))--}}
                    {{--{!! Auth::user()->name !!}--}}
                    {{--@else--}}
                    {{--{{"none"}}--}}
                    {{--@endif--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-3 col-xs-6 b-r"><strong>Mobile</strong>--}}
                    {{--<br>--}}
                    {{--<p class="text-muted">(123) 456 7890</p>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-3 col-xs-6 b-r"><strong>Email</strong>--}}
                    {{--<br>--}}
                    {{--<p class="text-muted">--}}
                    {{--@if(!empty(Auth::user()))--}}
                    {{--{!! Auth::user()->email !!}--}}
                    {{--@else--}}
                    {{--{{"none"}}--}}
                    {{--@endif--}}
                    {{--</p>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-3 col-xs-6"><strong>Location</strong>--}}
                    {{--<br>--}}
                    {{--<p class="text-muted">London</p>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<hr>--}}
                    {{--<p class="m-t-30">Description.</p>--}}
                    {{--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.--}}
                    {{--Lorem Ipsum has been the industry's standard dummy text ever since the--}}
                    {{--1500s, when an unknown printer took a galley of type and scrambled it to--}}
                    {{--make a type specimen book. It has survived not only five centuries </p>--}}
                    {{--<p>It was popularised in the 1960s with the release of Letraset sheets--}}
                    {{--containing Lorem Ipsum passages, and more recently with desktop publishing--}}
                    {{--software like Aldus PageMaker including versions of Lorem Ipsum.</p>--}}
                    {{--<h4 class="font-bold m-t-30">Skill Set</h4>--}}
                    {{--<hr>--}}
                    {{--<h5>Wordpress <span class="pull-right">80%</span></h5>--}}
                    {{--<div class="progress">--}}
                    {{--<div class="progress-bar progress-bar-success" role="progressbar"--}}
                    {{--aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"--}}
                    {{--style="width:80%;"><span class="sr-only">50% Complete</span></div>--}}
                    {{--</div>--}}
                    {{--<h5>HTML 5 <span class="pull-right">90%</span></h5>--}}
                    {{--<div class="progress">--}}
                    {{--<div class="progress-bar progress-bar-custom" role="progressbar"--}}
                    {{--aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"--}}
                    {{--style="width:90%;"><span class="sr-only">50% Complete</span></div>--}}
                    {{--</div>--}}
                    {{--<h5>jQuery <span class="pull-right">50%</span></h5>--}}
                    {{--<div class="progress">--}}
                    {{--<div class="progress-bar progress-bar-primary" role="progressbar"--}}
                    {{--aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"--}}
                    {{--style="width:50%;"><span class="sr-only">50% Complete</span></div>--}}
                    {{--</div>--}}
                    {{--<h5>Photoshop <span class="pull-right">70%</span></h5>--}}
                    {{--<div class="progress">--}}
                    {{--<div class="progress-bar progress-bar-danger" role="progressbar"--}}
                    {{--aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"--}}
                    {{--style="width:70%;"><span class="sr-only">50% Complete</span></div>--}}
                    {{--</div>--}}

                    {{--</div>--}}
                    {{--<div class="clearfix"></div>--}}
                    {{--</div>--}}
                    {{--<div role="tabpanel" class="tab-pane" id="imessages">--}}
                    {{--<div class="col-md-6">--}}
                    {{--<h3>Come on you have a lot message</h3>--}}
                    {{--<h4>you can use it with the small code</h4>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-5 pull-right">--}}
                    {{--<p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim--}}
                    {{--justo, rhoncus ut, imperdiet a.</p>--}}
                    {{--</div>--}}
                    {{--<div class="clearfix"></div>--}}
                    {{--</div>--}}
                    {{--<div role="tabpanel" class="tab-pane" id="isettings">--}}
                    {{--<div class="col-md-6">--}}
                    {{--<h3>Just do Settings</h3>--}}
                    {{--<h4>you can use it with the small code</h4>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-5 pull-right">--}}
                    {{--<p>Vulputate eget, fringilla vel, aliquet nec, daf adfd vulputate eget, arcu. In--}}
                    {{--enim justo, rhoncus ut, imperdiet a.</p>--}}
                    {{--</div>--}}
                    {{--<div class="clearfix"></div>--}}
                    {{--</div>--}}
                    {{--</div>--}}
                    {{--<!-- /content -->--}}
                    {{--</div>--}}
                    {{--</div>--}}

                    <div class="white-box">
                        <div class="sttabs tabs-style-linemove">
                            <ul class="nav nav-tabs " role="tablist">
                                <li role="presentation" class="active nav-item"><a href="#ihome" class="nav-link"
                                                                                   aria-controls="home" role="tab"
                                                                                   data-toggle="tab"
                                                                                   aria-expanded="true"><span><i
                                                    class="ti-facebook"></i> Facebook</span></a></li>
                                <li role="presentation" class="nav-item"><a href="#iprofile" class="nav-link"
                                                                            aria-controls="profile" role="tab"
                                                                            data-toggle="tab"
                                                                            aria-expanded="false"><span><i
                                                    class="ti-twitter"></i>  Twitter</span> </a></li>
                                <li role="presentation" class="nav-item"><a href="#imessages" class="nav-link"
                                                                            aria-controls="messages" role="tab"
                                                                            data-toggle="tab"
                                                                            aria-expanded="false"><span><i
                                                    class="ti-instagram"></i>  Instagram</span></a></li>
                                <li role="presentation" class="nav-item"><a href="#isettings" class="nav-link"
                                                                            aria-controls="settings" role="tab"
                                                                            data-toggle="tab"
                                                                            aria-expanded="false"><span><i
                                                    class="ti-youtube"></i>  Youtube</span></a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="ihome">
                                    <div class="col-md-12 col-xs-12">
                                        <div class="row row-in">
                                            <div class="col-lg-4 col-sm-4 row-in-br">
                                                <div class="col-in row">
                                                    <div class="col-md-6 col-sm-6 col-xs-6"><i
                                                                class="linea-icon linea-basic ti-star"></i>
                                                        <h5 class="text-muted vb">RATE</h5></div>
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <h3 class="counter text-right m-t-15 text-danger">5/5</h3></div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-danger"
                                                                 role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                                                 aria-valuemax="100" style="width: 40%"><span
                                                                        class="sr-only">40% Complete (success)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-4 row-in-br  b-r-none">
                                                <div class="col-in row">
                                                    <div class="col-md-6 col-sm-6 col-xs-6"><i
                                                                class="linea-icon linea-basic" data-icon=""></i>
                                                        <h5 class="text-muted vb">NEW PROJECTS</h5></div>
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <h3 class="counter text-right m-t-15 text-megna">169</h3></div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-megna"
                                                                 role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                                                 aria-valuemax="100" style="width: 40%"><span
                                                                        class="sr-only">40% Complete (success)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-sm-4 row-in-br  b-r-none">
                                                <div class="col-in row">
                                                    <div class="col-md-6 col-sm-6 col-xs-6"><i
                                                                class="linea-icon linea-basic" data-icon=""></i>
                                                        <h5 class="text-muted vb">All CAMPAINS</h5></div>
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <h3 class="counter text-right m-t-15 text-success">431</h3>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-success"
                                                                 role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                                                 aria-valuemax="100" style="width: 40%"><span
                                                                        class="sr-only">40% Complete (success)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="row row-in">
                                            <div class="col-lg-6 col-sm-6 row-in-br">
                                                <div class="col-in row">
                                                    <div class="col-md-6 col-sm-6 col-xs-6"><i
                                                                class="linea-icon linea-basic" data-icon=""></i>
                                                        <h5 class="text-muted vb">NEW INVOICES</h5></div>
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <h3 class="counter text-right m-t-15 text-primary">157</h3>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-primary"
                                                                 role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                                                 aria-valuemax="100" style="width: 40%"><span
                                                                        class="sr-only">40% Complete (success)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-sm-6  b-0">
                                                <div class="col-in row">
                                                    <div class="col-md-6 col-sm-6 col-xs-6"><i
                                                                class="linea-icon linea-basic" data-icon=""></i>
                                                        <h5 class="text-muted vb">All PROJECTS</h5></div>
                                                    <div class="col-md-6 col-sm-6 col-xs-6">
                                                        <h3 class="counter text-right m-t-15 text-success">431</h3>
                                                    </div>
                                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-success"
                                                                 role="progressbar" aria-valuenow="40" aria-valuemin="0"
                                                                 aria-valuemax="100" style="width: 40%"><span
                                                                        class="sr-only">40% Complete (success)</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="iprofile">
                                    <div class="col-md-6">
                                        <h3>Lets check profile</h3>
                                        <h4>you can use it with the small code</h4>
                                    </div>
                                    <div class="col-md-5 pull-right">
                                        <p>Comming soon...</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="imessages">
                                    <div class="col-md-6">
                                        <h3>Come on you have a lot message</h3>
                                        <h4>Comming soon...</h4>
                                    </div>
                                    <div class="col-md-5 pull-right">
                                        <p>Comming soon...</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="isettings">
                                    <div class="col-md-6">
                                        <h3>Just do Settings</h3>
                                        <h4>you can use it with the small code</h4>
                                    </div>
                                    <div class="col-md-5 pull-right">
                                        <p>Comming soon...</p>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <!-- /content -->
                        </div>


                        {{--</div>--}}
                    </div>

                </div>
                <div class="col-md-3 col-xs-12">
                    <div class="white-box">
                        <h3 class="box-title m-b-0">SOCIAL ACCOUNTS</h3>
                        <div class="button-box">
                            @if(empty($accFb))
                                <a href="redirect/facebook" class="btn-animation-facebook"
                                   style="min-width: 250px;"><span
                                            class="btn btn-facebook waves-effect btn-circle waves-light"><i
                                                class="fa fa-facebook"></i></span>Link with Facebook
                                </a>
                            @else
                                <div class="row m-lg-0">
                                    <button type="button"
                                            class="btn btn-facebook btn-circle btn-lg waves-effect waves-light">
                                        <i class="fa fa-facebook"></i></button>
                                    <a href="/profile/edit"><img
                                                src="{{$accFb->avatar ?? "../../../theme/plugins/images/users/user_df_link.jpg"}}"
                                                class="img-circle link-img" alt="img"></a>
                                    <div class="link-img-label">{{$accFb->username ?? "Facebook account"}}</div>
                                </div>
                            @endif

                            @if(empty($accTw))
                                <a href="redirect/twitter" class="btn-animation-twitter" style="min-width: 250px;"><span
                                            class="btn btn-twitter waves-effect btn-circle waves-light"><i
                                                class="fa fa-twitter"></i></span>Link with Twitter
                                </a>
                            @else
                                <div class="row m-lg-0">
                                    <button type="button"
                                            class="btn btn-twitter btn-circle btn-lg waves-effect waves-light">
                                        <i class="fa fa-twitter"></i></button>
                                    <a href="/profile/edit"><img
                                                src="{{$accTw->avatar ?? "../../../theme/plugins/images/users/user_df_link.jpg"}}"
                                                class="img-circle link-img" alt="img"></a>
                                    <div class="link-img-label">{{$accTw->username ?? "Twitter account"}}</div>
                                </div>
                            @endif

                            @if(empty($accIns))
                                <a href="redirect/instagram" class="btn-animation-instagram"
                                   style="min-width: 250px;"><span
                                            class="btn btn-warning waves-effect btn-circle waves-light"><i
                                                class="fa fa-instagram"></i></span>Link with Instagram
                                </a>
                            @else
                                <div class="row m-lg-0">
                                    <button type="button"
                                            class="btn btn-warning btn-circle btn-lg waves-effect waves-light">
                                        <i class="fa fa-instagram"></i></button>
                                    <a href="/profile/edit"><img
                                                src="{{$accIns->avatar ?? "../../../theme/plugins/images/users/user_df.jpg"}}"
                                                class="img-circle link-img" alt="img"></a>
                                    <div class="link-img-label">{{$accIns->username ?? "Instagram account"}}</div>
                                </div>
                            @endif

                            @if(empty($accGg))
                                <a href="redirect/google" class="btn-animation-google" style="min-width: 250px;"><span
                                            class="btn btn-youtube waves-effect btn-circle waves-light"><i
                                                class="fa fa-youtube"></i></span>Link with Youtube
                                </a>
                            @else
                                <div class="row m-lg-0">
                                    <button type="button"
                                            class="btn btn-youtube btn-circle btn-lg waves-effect waves-light">
                                        <i class="fa fa-youtube"></i></button>
                                    <a href="/profile/edit"><img
                                                src="{{$accGg->avatar ?? "../../../theme/plugins/images/users/user_df_link.jpg"}}"
                                                class="img-circle link-img" alt="img"></a>
                                    <div class="link-img-label">{{$accGg->username ?? "Youtube account"}}
                                    </div>
                                </div>
                            @endif


                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
        @include('layouts.partials.copyright')
    </div>
@endsection