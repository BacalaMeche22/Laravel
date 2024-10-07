<x-app-layout>
    <div class="nk-block">
        <div class="card">
            <div class="card-aside-wrap">
                <div class="card-inner card-inner-lg">
                    <div class="nk-block">
                        @php
                            $active = [
                                'Profile-Information',
                                'Update-Password',
                                'Two-Factor-Authentication',
                                'Browser-Sessions',
                                'Delete-Account',
                            ];
                        @endphp
                        @if (isset($_GET['setting']))
                            @php
                                $queu = $_GET['setting'];
                            @endphp
                            @if ($queu == 'profile-information')
                                <div class="nk-data data-list">
                                    <div class="data-head shadow mb-3">
                                        <h6 class="overline-title">Basics</h6>
                                    </div>
                                    @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                                        @livewire('profile.update-profile-information-form')
                                    @endif
                                    <x-section-border />
                                    @php
                                        $active[0] = 'active';
                                    @endphp
                                </div>
                            @endif
                            @if ($queu == 'update-password')
                                <div class="nk-data data-list">
                                    <div class="data-head shadow mb-3">
                                        <h6 class="overline-title">Update Password</h6>
                                    </div>
                                    @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                                        <div class="mt-10 sm:mt-0">
                                            @livewire('profile.update-password-form')
                                        </div>
                                    @endif
                                    <x-section-border />
                                    @php
                                        $active[1] = 'active';
                                    @endphp
                                </div>
                            @endif
                            @if ($queu == 'two-factor-authentication')
                                <div class="nk-data data-list">
                                    <div class="data-head shadow mb-3">
                                        <h6 class="overline-title">Two Factor Authentication</h6>
                                    </div>
                                    @if (Laravel\Fortify\Features::canManageTwoFactorAuthentication())
                                        <div class="mt-10 sm:mt-0">
                                            @livewire('profile.two-factor-authentication-form')
                                        </div>
                                    @endif
                                    <x-section-border />
                                    @php
                                        $active[2] = 'active';
                                    @endphp
                                </div>
                            @endif
                            @if ($queu == 'browser-sessions')
                                <div class="nk-data data-list">
                                    <div class="data-head shadow mb-3">
                                        <h6 class="overline-title">Browser Sessions</h6>
                                    </div>
                                    <div class="mt-10 sm:mt-0">
                                        @livewire('profile.logout-other-browser-sessions-form')
                                    </div>
                                    <x-section-border />
                                    @php
                                        $active[3] = 'active';
                                    @endphp
                                </div>
                            @endif

                            @if ($queu == 'delete-account')
                                <div class="nk-data data-list">
                                    <div class="data-head shadow mb-3">
                                        <h6 class="overline-title">Delete Account</h6>
                                    </div>
                                    @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                                        <div class="mt-10 sm:mt-0">
                                            @livewire('profile.delete-user-form')
                                        </div>
                                    @endif
                                    <x-section-border />
                                    @php
                                        $active[4] = 'active';
                                    @endphp
                                </div>
                            @endif
                        @else
                            <div class="nk-data data-list">
                                <div class="data-head shadow mb-3">
                                    <h6 class="overline-title">Basics</h6>
                                </div>
                                @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                                    @livewire('profile.update-profile-information-form')
                                @endif
                                <x-section-border />
                                @php
                                    $active[0] = 'active';
                                @endphp
                            </div>
                        @endif

                    </div>
                </div>
                <div class="card-aside card-aside-left user-aside toggle-slide toggle-slide-left toggle-break-lg"
                    data-toggle-body="true" data-content="userAside" data-toggle-screen="lg" data-toggle-overlay="true">
                    <div class="card-inner-group" data-simplebar>
                        <div class="card-inner">
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
                        <div class="card-inner p-0">
                            <ul class="link-list-menu">
                                <li>
                                    <a class="{{ $active[0] }}" href="/user/profile?setting=profile-information">
                                        <em class="icon ni ni-user-fill-c"></em>
                                        <span>Profile Infomation</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="{{ $active[1] }}" href="/user/profile?setting=update-password">
                                        <em class="icon ni ni-edit-alt-fill"></em>
                                        <span>Update Password</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="{{ $active[2] }}"
                                        href="/user/profile?setting=two-factor-authentication">
                                        <em class="icon ni ni-lock-alt-fill"></em>
                                        <span>Two Factor Authentication</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="{{ $active[3] }}" href="/user/profile?setting=browser-sessions">
                                        <em class="icon ni ni-globe"></em>
                                        <span>Browser Sessions</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="{{ $active[4] }}" href="/user/profile?setting=delete-account">
                                        <em class="icon ni ni-trash-fill"></em>
                                        <span>Delete Account</span>
                                    </a>
                                </li>
                            </ul>
                        </div><!-- .card-inner -->


                    </div><!-- .card-inner-group -->
                </div><!-- card-aside -->
            </div><!-- .card-aside-wrap -->
        </div><!-- .card -->
    </div><!-- .nk-block -->

</x-app-layout>
