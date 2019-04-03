<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/png" sizes="16x16" href="/theme/plugins/images/favicon.png">
    <!-- Scripts -->
{{--<script src="{{ asset('js/app.js') }}" defer></script>--}}

<!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core CSS -->
    <link href="/theme/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/theme/plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="/theme/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="/theme/css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/theme/css/style.css" rel="stylesheet">
    <!-- Wizard CSS -->


    <link href="/theme/plugins/bower_components/custom-select/custom-select.css" rel="stylesheet" type="text/css"/>
    <link href="/theme/plugins/bower_components/bootstrap-select/bootstrap-select.min.css" rel="stylesheet"/>
    <link href="/theme/plugins/bower_components/multiselect/css/multi-select.css" rel="stylesheet" type="text/css"/>
    <link href="/theme/css/colors/blue.css" id="theme" rel="stylesheet">

</head>
<body>

<!-- Page Content -->
<!-- Preloader -->
<div class="preloader">
    <div class="cssload-speeding-wheel"></div>
</div>
<section id="wrapper" class="step-register">
    <div class="register-box">
        <div class="">
            <div class="form-group text-center">
                <img src="/theme/plugins/images/logo_login.png" class="thumb-lg img-fluid logo-login"
                     alt="img">
                <h3 class="text-center">Create Profile</h3>
            </div>
            <!-- multistep form -->
            <div class="white-box">
                <form data-toggle="validator" method="POST" action="{{ '/profile/create'}}">
                    @csrf


                    <div class="form-group row">

                        <div class="col-md-4">
                            <div class="user-content avatar">
                                <a href="#"><img
                                            src="{{Auth::user()->avatar ?? "../../../theme/plugins/images/users/user_df.jpg"}}"
                                            class="thumb-extra-lg img-circle"
                                            style="width: 150px"
                                            alt="img"></a>
                                <br>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <br />
                            <label class="control-label">Choose your type</label>
                            <br />
                            <div class="radio radio-inline radio-info">
                                <input type="radio" name="radio" id="influencer" value="influencer" checked>
                                <label for="influencer"> Influencer </label>
                            </div>
                            <div class="radio radio-inline radio-info">
                                <input type="radio" name="radio" id="maketer" value="maketer">
                                <label for="maketer"> Maketer </label>
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                        <label for="fullname" class="control-label">Full Name</label>
                        <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Clark Kent"
                               value="{{$currentUser->full_name}}"
                               required>
                    </div>
                    <div class="form-group">
                        <label for="username" class="control-label">User Name</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="superman"
                               value="{{$currentUser->username}}"
                               required>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="control-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email"
                               value="{{$currentUser->email}}"
                               data-error="Bruh, that email address is invalid" required>
                        <div class="help-block with-errors"></div>
                    </div>
                    <div class="form-group">
                        <label for="description" class="control-label">Biography</label>
                        <textarea id="description" name="description" class="form-control"></textarea>
                    </div>


                    <div class="form-group">
                        <label for="tags" class="control-label">Tags</label>
                        <select class="select2 m-b-10 select2-multiple" multiple="multiple" data-placeholder="Choose"
                                name="tags[]" id="tags">
                            <option value="News">News</option>
                            <option value="Sports">Sports</option>
                            <option value="Comedy">Comedy</option>
                            <option value="Art">Art</option>
                            <option value="Kid">Kid</option>
                            <option value="AI">AI</option>
                            <option value="Other">Other</option>
                        </select>

                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-info">Continue</button>
                    </div>
                </form>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</section>


@include('layouts.partials.app_footer')
<script src="/theme/plugins/bower_components/register-steps/jquery.easing.min.js"></script>
<script src="/theme/plugins/bower_components/register-steps/register-init.js"></script>

<script src="/theme/plugins/bower_components/custom-select/custom-select.min.js" type="text/javascript"></script>
<script src="/theme/plugins/bower_components/bootstrap-select/bootstrap-select.min.js" type="text/javascript"></script>
<script type="text/javascript" src="/theme/plugins/bower_components/multiselect/js/jquery.multi-select.js"></script>
<script>
    jQuery(document).ready(function () {

        // For select 2
        $(".select2").select2();
        $('.selectpicker').selectpicker();

        // For multiselect
        $('#pre-selected-options').multiSelect();
        $('#optgroup').multiSelect({
            selectableOptgroup: true
        });
        $('#public-methods').multiSelect();
        $('#select-all').click(function () {
            $('#public-methods').multiSelect('select_all');
            return false;
        });
        $('#deselect-all').click(function () {
            $('#public-methods').multiSelect('deselect_all');
            return false;
        });
        $('#refresh').on('click', function () {
            $('#public-methods').multiSelect('refresh');
            return false;
        });
        $('#add-option').on('click', function () {
            $('#public-methods').multiSelect('addOption', {
                value: 42,
                text: 'test 42',
                index: 0
            });
            return false;
        });
    });
</script>
</body>
</html>
