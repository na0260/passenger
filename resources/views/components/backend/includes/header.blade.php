<!--start header -->
<header>
    <div class="topbar d-flex align-items-center">
        <nav class="navbar navbar-expand gap-3">
            <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
            </div>
            <div class="position-relative search-bar d-lg-block d-none" data-bs-toggle="modal" data-bs-target="#SearchModal">
                <input class="form-control px-5" disabled type="search" placeholder="Search">
                <span class="position-absolute top-50 search-show ms-3 translate-middle-y start-0 top-50 fs-5"><i class='bx bx-search'></i></span>
            </div>
            <div class="top-menu ms-auto">
                <ul class="navbar-nav align-items-center gap-1">
                    <li class="nav-item dropdown dropdown-laungauge d-none d-sm-flex">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="" data-bs-toggle="dropdown"><img src="{{asset('assets/backend/images/county/02.png')}}" width="22" alt="">
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{asset('assets/backend/images/county/01.png')}}" width="20" alt=""><span class="ms-2">English</span></a>
                            </li>
                            <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{asset('assets/backend/images/county/02.png')}}" width="20" alt=""><span class="ms-2">Catalan</span></a>
                            </li>
                            <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{asset('assets/backend/images/county/03.png')}}" width="20" alt=""><span class="ms-2">French</span></a>
                            </li>
                            <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{asset('assets/backend/images/county/04.png')}}" width="20" alt=""><span class="ms-2">Belize</span></a>
                            </li>
                            <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{asset('assets/backend/images/county/05.png')}}" width="20" alt=""><span class="ms-2">Colombia</span></a>
                            </li>
                            <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{asset('assets/backend/images/county/06.png')}}" width="20" alt=""><span class="ms-2">Spanish</span></a>
                            </li>
                            <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{asset('assets/backend/images/county/07.png')}}" width="20" alt=""><span class="ms-2">Georgian</span></a>
                            </li>
                            <li><a class="dropdown-item d-flex align-items-center py-2" href="javascript:;"><img src="{{asset('assets/backend/images/county/08.png')}}" width="20" alt=""><span class="ms-2">Hindi</span></a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dark-mode d-none d-sm-flex">
                        <a class="nav-link dark-mode-icon" href="javascript:;"><i class='bx bx-moon'></i>
                        </a>
                    </li>

                </ul>
            </div>
            <div class="user-box dropdown px-3">
                <a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class='bx bx-user-circle'></i>
                    <div class="user-info">
                        <p class="user-name mb-0">{{ Auth::user()->name }}</p>
                        <p class="designattion mb-0">Role</p>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    {{--<li><a class="dropdown-item d-flex align-items-center" href=""><i class="bx bx-user fs-5"></i><span>Profile</span></a>
                    </li>--}}
                    <li><a class="dropdown-item d-flex align-items-center" href="{{route('profile.edit')}}"><i class="bx bx-cog fs-5"></i><span>Settings</span></a>
                    </li>
                    <li>
                        <div class="dropdown-divider mb-0"></div>
                    </li>
                    <li>
                        <a class="dropdown-item d-flex align-items-center" href=""  onclick="event.preventDefault();document.getElementById('log-out').submit()"><i class="bx bx-log-out-circle"></i><span>Logout</span></a>
                        <form action="{{ route('logout') }}" method="POST" id="log-out">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!--end header -->
