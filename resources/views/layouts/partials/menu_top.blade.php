<!-- Top Navigation -->
<nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header"><a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)"
                                  data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
        <div class="top-left-part">
            <a class="logo" href="/home"><b><img class="logo-main" src="/theme/plugins/images/logo_login.png" alt="home"/></b>
                <span class="hidden-xs"><img style="width: 140px;" src="/theme/plugins/images/logo-text.png" alt="home"/></span></a>
        </div>
        <ul class="nav navbar-top-links navbar-left hidden-xs">
            <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i
                            class="icon-arrow-left-circle ti-menu"></i></a></li>
            {{--<li>--}}
            {{--<form role="search" class="app-search hidden-xs">--}}
            {{--<input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> </form>--}}
            {{--</li>--}}
        </ul>
        <ul class="nav navbar-top-links navbar-right pull-right">
            <li class="dropdown"><a class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="#">
                    <i class="ti-bell"></i>
                    <div class="notify"><span class="heartbit"></span><span class="point"></span></div>
                </a>
                <ul class="dropdown-menu mailbox animated bounceInDown">
                    <li>
                        <div class="drop-title">You have 4 new messages</div>
                    </li>
                    <li>
                        <div class="message-center">
                            <a href="#">
                                <div class="user-img"><img src="/theme/plugins/images/users/pawandeep.jpg" alt="user"
                                                           class="img-circle"> <span
                                            class="profile-status online pull-right"></span></div>
                                <div class="mail-contnet">
                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span
                                            class="time">9:30 AM</span></div>
                            </a>
                            <a href="#">
                                <div class="user-img"><img src="/theme/plugins/images/users/sonu.jpg" alt="user"
                                                           class="img-circle"> <span
                                            class="profile-status busy pull-right"></span></div>
                                <div class="mail-contnet">
                                    <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span>
                                    <span class="time">9:10 AM</span></div>
                            </a>
                            <a href="#">
                                <div class="user-img"><img src="/theme/plugins/images/users/arijit.jpg" alt="user"
                                                           class="img-circle"> <span
                                            class="profile-status away pull-right"></span></div>
                                <div class="mail-contnet">
                                    <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span
                                            class="time">9:08 AM</span></div>
                            </a>
                            <a href="#">
                                <div class="user-img"><img src="/theme/plugins/images/users/pawandeep.jpg" alt="user"
                                                           class="img-circle"> <span
                                            class="profile-status offline pull-right"></span></div>
                                <div class="mail-contnet">
                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span
                                            class="time">9:02 AM</span></div>
                            </a>
                        </div>
                    </li>
                    <li>
                        <a class="text-center" href="javascript:void(0);"> <strong>See all notifications</strong> <i
                                    class="fa fa-angle-right"></i> </a>
                    </li>
                </ul>
                <!-- /.dropdown-messages -->
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#">
                    <img src="{{Auth::user()->avatar ?? "../../../theme/plugins/images/users/user_df.jpg"}}"
                         alt="user-img" width="36" class="img-circle">
                        <b class="hidden-xs">
                            @if(!empty(Auth::user()))
                                {!! Auth::user()->full_name !!}
                            @else
                                {{"none"}}
                            @endif
                        </b> </a>
                <ul class="dropdown-menu dropdown-user animated flipInY">
                    <li><a href="#"><i class="ti-user"></i> My Profile</a></li>
                    <li><a href="#"><i class="ti-wallet"></i> My Balance</a></li>
                    <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#"><i class="ti-settings"></i> Account Setting</a></li>
                    <li role="separator" class="divider"></li>
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="fa fa-power-off"></i> <span class="noshow">Logout</span>
                        </a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <li>
                <a href="{{ route('logout') }}" style="padding-right: 3rem"
                   onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fa fa-power-off"></i> Logout
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </div>
    <!-- /.navbar-header -->
    <!-- /.navbar-top-links -->
    <!-- /.navbar-static-side -->
</nav>
<!-- End Top Navigation -->