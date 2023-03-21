
		<!--begin::Aside-->
		<div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
			<!--begin::Aside Toolbarl-->
			<div class="aside-toolbar flex-column-auto" id="kt_aside_toolbar">
				<!--begin::Aside user-->
				<!--begin::User-->
				<div class="aside-user d-flex align-items-sm-center justify-content-center py-5">
					<!--begin::Symbol-->
					<div class="symbol symbol-50px">
						<img class="w-10 h-10 rounded-full" src="{{ Auth::user()->gravatar() }}" alt="{{Auth::user()->name}}" />
					</div>

					<!--begin::Wrapper-->
					<div class="aside-user-info flex-row-fluid flex-wrap ms-5">
						<!--begin::Section-->
						<div class="d-flex">
							<!--begin::Info-->
							<div class="flex-grow-1 me-2">
								<!--begin::Username-->
								<a href="#" class="text-white text-hover-primary fs-6 fw-bold">{{ Auth::user()->name }}</a>

								<!--begin::Description-->
								<span class="text-gray-600 fw-semibold d-block fs-8 mb-1">{{ Auth::user()->email }}</span>
								<!--end::Description-->
								<!--begin::Label-->
								<div class="d-flex align-items-center text-success fs-9">
									<span class="bullet bullet-dot bg-success me-1"></span>online
								</div>
								<!--end::Label-->
							</div>
							<!--end::Info-->

						</div>
						<!--end::Section-->
					</div>
					<!--end::Wrapper-->
				</div>
				<!--end::User-->
				<!--end::Aside user-->
			</div>
			<!--end::Aside Toolbarl-->

			<!--begin::Aside menu-->
			<div class="aside-menu flex-column-fluid">
				<!--begin::Aside Menu-->
				<div class="hover-scroll-overlay-y px-2 my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="{default: '#kt_aside_toolbar, #kt_aside_footer', lg: '#kt_header, #kt_aside_toolbar, #kt_aside_footer'}" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="5px">
					<!--begin::Menu-->
					<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
						<!--begin:Menu item-->
						<div class="menu-item pt-5">
							<!--begin:Menu content-->
							<div class="menu-content">
								<span class="menu-heading fw-bold text-uppercase fs-7">Pages</span>
							</div>
							<!--end:Menu content-->
						</div>
						<!--end:Menu item-->
						<!--begin:Menu item-->
						<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
							<!--begin:Menu link-->
							<span class="menu-link">
								<span class="menu-icon">
									<!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
									<span class="svg-icon svg-icon-2">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z" fill="currentColor" />
											<path opacity="0.3" d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</span>
								<span class="menu-title">User Profile</span>
								<span class="menu-arrow"></span>
							</span>
							<!--end:Menu link-->
							<!--begin:Menu sub-->
							<div class="menu-sub menu-sub-accordion">
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="{{ route('timeline') }}" active="request()->routeIs('timeline')">
					
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">{{ __('Timeline') }}</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="{{ route('profile', Auth::user()->username) }}">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">View Profile</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="{{ route('profile.edit') }}">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Update Profile</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div class="menu-item">
									<!--begin:Menu link-->
									<a class="menu-link" href="{{ route('password.edit') }}">
										<span class="menu-bullet">
											<span class="bullet bullet-dot"></span>
										</span>
										<span class="menu-title">Change Password</span>
									</a>
									<!--end:Menu link-->
								</div>
								<!--end:Menu item-->
							</div>
							<!--end:Menu sub-->
						</div>
						<!--end:Menu item-->									
					</div>
					<!--end::Menu-->
				</div>
				<!--end::Aside Menu-->
			</div>
			<!--end::Aside menu-->
			<!--begin::Footer-->
			<div class="aside-footer flex-column-auto py-5 ml-20 " id="kt_aside_footer">
				<form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-primary-button :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-primary-button >
                        </form>
			</div>
			<!--end::Footer-->
		</div>
		<!--end::Aside-->