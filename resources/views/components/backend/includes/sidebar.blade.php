<!--sidebar wrapper -->
<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <h1 class="logo-text">Passengers</h1>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
    </div>
    <!--navigation-->
    @auth()
        <ul class="metismenu" id="menu">
            @if(auth()->user()->type == 'admin')
                <li>
                    <a href="{{route('dashboard')}}">
                        <div class="parent-icon"><i class='bx bx-home-alt'></i>
                        </div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="bx bx-menu"></i>
                        </div>
                        <div class="menu-title">Pages</div>
                    </a>
                    <ul>
                        <li><a href="{{route('about.edit',1)}}"><i class='bx bx-radio-circle'></i>About</a>
                        </li>
                    </ul>
                    <ul>
                        <li><a href="{{route('privacy.edit',1)}}"><i
                                    class='bx bx-radio-circle'></i>Privacy</a>
                        </li>
                    </ul>
                    <ul>
                        <li><a href="{{route('terms.edit',1)}}"><i class='bx bx-radio-circle'></i>Terms and
                                Conditions</a>

                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="bx bx-user"></i>
                        </div>
                        <div class="menu-title">Agent</div>
                    </a>
                    <ul>
                        <li><a href="{{route('agent-request.manage')}}"><i class='bx bx-radio-circle'></i>Requests</a>
                        </li>
                    </ul>
                    <ul>
                        <li><a href="{{route('agent.registration')}}"><i class='bx bx-radio-circle'></i>Registration</a>
                        </li>
                    </ul>
                    <ul>
                        <li><a href="{{route('agent.manage')}}"><i class='bx bx-radio-circle'></i>Lists</a>

                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="bx bx-bus"></i>
                        </div>
                        <div class="menu-title">Bus</div>
                    </a>
                    <ul>
                        <li><a class="has-arrow" href="javascript:;"><i class='bx bx-radio-circle'></i>Register</a>
                            <ul>
                                <li> <a href="{{route('bus.register')}}"><i class="bx bx-radio-circle"></i>Bus Info</a>
                                </li>
                                <li> <a href="{{route('driver.register')}}"><i class="bx bx-radio-circle"></i>Driver Info</a>
                                </li>
                                <li> <a href="{{route('bus-route.register')}}"><i class="bx bx-radio-circle"></i>Route Info</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                    <ul>
                        <li><a href="{{route('bus.manage')}}"><i class='bx bx-radio-circle'></i>Lists</a>

                        </li>
                    </ul>
                </li>
                <li>
                    <a href="{{route('feedbacks.manage')}}">
                        <div class="parent-icon"><i class='bx bx-user-circle'></i>
                        </div>
                        <div class="menu-title">Feedbacks</div>
                    </a>
                </li>
            @else
                <li>
                    <a href="{{route('dashboard')}}">
                        <div class="parent-icon"><i class='bx bx-home-alt'></i>
                        </div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="bx bx-bus"></i>
                        </div>
                        <div class="menu-title">Bus</div>
                    </a>
                    <ul>
                        <li><a class="has-arrow" href="javascript:;"><i class='bx bx-radio-circle'></i>Register</a>
                            <ul>
                                <li> <a href="{{route('bus.register')}}"><i class="bx bx-radio-circle"></i>Bus Info</a>
                                </li>
                                <li> <a href="{{route('driver.register')}}"><i class="bx bx-radio-circle"></i>Driver Info</a>
                                </li>
                                <li> <a href="{{route('bus-route.register')}}"><i class="bx bx-radio-circle"></i>Route Info</a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                    <ul>
                        <li><a href="{{route('bus.manage')}}"><i class='bx bx-radio-circle'></i>Lists</a>

                        </li>
                    </ul>
                </li>
            @endif
        </ul>
    @endauth
    <!--end navigation-->
</div>
<!--end sidebar wrapper -->
