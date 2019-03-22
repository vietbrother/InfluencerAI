<!--/**
* Created by PhpStorm.
* User: MV.ANH
* Date: 3/18/2019
* Time: 4:32 PM
*/ -->
<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.partials.head')
</head>
<body>
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div>
        <!-- Top Navigation -->
        @include('layouts.partials.menu_top')
        <!-- End Top Navigation -->

        <!-- Left navbar-header -->
        @include('layouts.partials.menu_left')
        <!-- Left navbar-header -->

        <!-- Page Content -->
        @yield('content')
        <!-- /#page-wrapper -->
    </div>

    @include('layouts.partials.footer')
</body>
</html>