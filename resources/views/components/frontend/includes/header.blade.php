<!-- top-header -->
<div class="top-header">
    <div class="container">

        <ul class="tp-hd-lft wow fadeInLeft animated" data-wow-delay=".5s">
            <li class="hm">
                <a href="index.html"><i class="fa fa-home"></i></a>
            </li>
            <li class="tol">Contact : 123-4568790</li>
        </ul>
        <ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s">
            @if (Route::has('login'))

                @auth
                    <li class="sig">
                        <a href="{{route('dashboard')}}"
                        >Admin Panel</a
                        >
                    </li>
                @else
                    <li class="sigi">
                        <a {{--data-target="#myModal4" data-toggle="modal"--}} href="{{ route('login') }}"
                        >Sign In</a
                        >
                    </li>
                    {{--@if (Route::has('register'))
                        <li class="sig">
                            <a --}}{{--data-target="#myModal" data-toggle="modal"--}}{{-- href="{{ route('register') }}">/ Sign Up</a>
                        </li>
                    @endif--}}
                @endauth
            @endif
        </ul>
        <div class="clearfix"></div>
    </div>
</div>
<!--- /top-header ---->
<!--- header ---->
<div class="header">
    <div class="container">
        <div class="logo wow fadeInDown animated" data-wow-delay=".5s">
            <a href="{{route('home')}}"><span>Passengers</span></a>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<!--- /header ---->
<!--- footer-btm ---->
<div class="footer-btm wow fadeInLeft animated" data-wow-delay=".5s">
    <div class="container">
        <div class="navigation">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button
                        class="navbar-toggle collapsed"
                        data-target="#bs-example-navbar-collapse-1"
                        data-toggle="collapse"
                        type="button"
                    >
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div
                    class="collapse navbar-collapse nav-wil"
                    id="bs-example-navbar-collapse-1"
                >
                    <nav class="cl-effect-1">
                        <ul class="nav navbar-nav">
                            <li class="{{ Route::currentRouteName() == 'home' ? 'active' : ''}}"><a
                                    href="{{route('home')}}">Home</a></li>
                            <li class="{{ Route::currentRouteName() == 'about' ? 'active' : ''}}"><a
                                    href="{{route('about')}}">About</a></li>
                            <li class="{{ Route::currentRouteName() == 'bus-search' ? 'active' : ''}}"><a
                                    href="{{route('bus-routes')}}">Routes</a></li>
                            <li class="{{ Route::currentRouteName() == 'agent-reg' ? 'active' : ''}}"><a
                                    href="{{route('agent-reg')}}">Agent Registration</a></li>
                            <li class="{{ Route::currentRouteName() == 'privacy' ? 'active' : ''}}"><a
                                    href="{{route('privacy')}}">Privacy Policy</a></li>
                            <li class="{{ Route::currentRouteName() == 'terms' ? 'active' : ''}}"><a
                                    href="{{route('terms')}}">Terms of Use</a></li>
                            <li>
                                Need Help?<a
                                    data-target="#myModal3"
                                    data-toggle="modal"
                                    href="#"
                                >
                                    / Contact Us
                                </a>
                            </li>
                            <div class="clearfix"></div>
                        </ul>
                    </nav>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
        </div>

        <div class="clearfix"></div>
    </div>
</div>
<!--- /footer-btm ---->
