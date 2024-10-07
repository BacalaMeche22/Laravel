@php
    $user = ['type' => 'admin', 'name' => 'Casino, Kent Russell', 'email' => 'kent@tcc.edu.ph'];
@endphp
<div class="nk-header nk-header-fixed is-light">
    <div class="container-fluid">
        <div class="nk-header-wrap">
            
            <div class="nk-header-brand d-xl-none">
                <a href="html/index.html" class="logo-link">
                    <img class="logo-light logo-img" src="{{asset('/storage/logo.png')}}" srcset="{{asset('/storage/logo.png')}} 2x" alt="logo">
                    <img class="logo-dark logo-img" src="{{asset('/storage/logo.png')}}" srcset="{{asset('/storage/logo.png')}} 2x" alt="logo-dark">
                </a>
            </div>
            <div class="nk-header-news d-none d-xl-block">
                <div class="nk-news-list">
                    <a class="nk-news-item" href="#">
                        <div class="nk-news-icon">
                            <em class="icon ni ni-card-view"></em>
                        </div>
                        <div class="nk-news-text">
                            <p>Do you know the latest update of {{ date('Y') }}? <span> A overview of our is now
                                    available on YouTube</span></p>
                            <em class="icon ni ni-external"></em>
                        </div>
                    </a>
                </div>
            </div>

            <div class="nk-header-tools">

                <ul class="nk-quick-nav">
                    <li class="dropdown user-dropdown">
                        <a href="#" class="dropdown-toggle me-n1" data-bs-toggle="dropdown">
                            <div class="user-toggle">
                                <div class="user-avatarx sm bg-white">
                                    <img src="{{ asset('storage/' . Auth::user()->profile_photo_path) }}"
                                        alt="{{ Auth::user()->name }}"
                                        onerror="this.onerror=null; this.src='{{ asset('storage/no.jpg') }}';"
                                        style="width: 45px !important; height: 40px; border-radius: 50%; object-fit: cover; ">
                                </div>
                                <div class="user-info d-none d-xl-block">
                                    <div class="user-status user-status-active text-primary"
                                        style="text-transform: uppercase;">
                                        Manage Account
                                    </div>
                                    <div class="user-name dropdown-indicator" style="text-transform: uppercase">
                                        {{ Auth::user()->name }}
                                    </div>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end">
                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                <div class="user-card">
                                    <div class="user-avatarx bg-white">
                                        <img src="{{ asset('storage/' . Auth::user()->profile_photo_path) }}"
                                            alt="{{ Auth::user()->name }}"
                                            onerror="this.onerror=null; this.src='{{ asset('storage/no.jpg') }}';"
                                            style="width: 45px !important; height: 40px; border-radius: 50%; object-fit: cover; ">
                                    </div>
                                    <div class="user-info">
                                        <span class="lead-text"> {{ Auth::user()->name }} </span>
                                        <span class="sub-text">{{ Auth::user()->email }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li><a href="/user/profile"><em class="icon ni ni-user-alt"></em><span>Manage
                                                Account Profile</span></a></li>
                                </ul>
                            </div>

                            <div class="dropdown-inner">
                                <ul class="link-list">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <em class="icon ni ni-power"></em>
                                            <span>
                                                {{ __('Log Out') }}
                                            </span>
                                        </a>
                                        <form id="logout-form" method="POST" action="{{ route('logout') }}"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="nk-menu-trigger d-xl-none ms-n1 ">
                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em
                        class="icon ni ni-menu"></em></a>
            </div>
        </div>
    </div>
</div>
