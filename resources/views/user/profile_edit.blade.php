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
                    <h4 class="page-title">Edit Profile</h4></div>
                <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                    <ol class="breadcrumb">
                        <li class="active"><a href="/profile">Profile</a></li>
                        {{--<li><a href="#">Sample Pages</a></li>--}}
                        {{--<li class="active">Profile page</li>--}}
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-md-12 col-xs-12">
                    <div class="white-box">
                        <form data-toggle="validator" class="form-horizontal">
                            <div class="form-group row">
                                <label for="inputName4" class="control-label col-sm-3">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputName4" placeholder="Cina Saffary"
                                           required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputEmail4" class="control-label col-sm-3">Email</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email"
                                           data-error="Bruh, that email address is invalid" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="inputPassword4" class="control-label col-sm-3">Password</label>
                                <div class="col-sm-4">
                                    <input type="password" data-toggle="validator" data-minlength="6"
                                           class="form-control"
                                           id="inputPassword4" placeholder="Password" required>
                                    <span class="help-block">Minimum of 6 characters</span></div>
                                <div class="col-sm-4">
                                    <input type="password" class="form-control" id="inputPasswordConfirm4"
                                           data-match="#inputPassword" data-match-error="Whoops, these don't match"
                                           placeholder="Confirm" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-3"></label>
                                <div class="checkbox">
                                    <div class="col-sm-9">
                                        <input type="checkbox" id="terms4" data-error="Before you wreck yourself"
                                               required>
                                        <label for="terms4"> Remember Me?</label>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="control-label col-sm-3"></label>
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit" class="btn btn-info">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- .row -->
            <br/>
        </div>
        <!-- /.container-fluid -->
        @include('layouts.partials.copyright')
    </div>
    <!-- /#page-wrapper -->
@endsection