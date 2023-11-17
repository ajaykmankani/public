 <nav class="sidebar sidebar-offcanvas" id="sidebar">
     <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
         <a class="sidebar-brand brand-logo" href="{{ route('index') }}"><img
                 src="{{ asset('frontend\assets\images\logo.webp') }}" alt="logo" style="height:auto !important" /></a>
         <a class="sidebar-brand brand-logo-mini" href="{{ route('index') }}"><img
                 src="{{ asset('frontend\assets\images\logo.webp') }}" alt="logo" style="height:30px !important; width:100% !important" /></a>
     </div>
     <ul class="nav">
         <li class="nav-item profile">
             <div class="profile-desc">
                 <div class="profile-pic">
                     <div class="count-indicator">
                         <img class="img-xs rounded-circle " src="{{ asset('admin/assets/images/faces/face15.jpg') }}"
                             alt="">
                         <span class="count bg-success"></span>
                     </div>
                     <div class="profile-name">
                         <h5 class="mb-0 font-weight-normal">@auth
                                 {{ ucfirst(auth()->user()->name) }}
                             @endauth
                         </h5>
                         <span>Gold Member</span>
                     </div>
                 </div>
                 <a href="#" id="profile-dropdown" data-bs-toggle="dropdown"><i
                         class="mdi mdi-dots-vertical"></i></a>
                 <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list"
                     aria-labelledby="profile-dropdown">
                     <a href="#" class="dropdown-item preview-item">
                         <div class="preview-thumbnail">
                             <div class="preview-icon bg-dark rounded-circle">
                                 <i class="mdi mdi-settings text-primary"></i>
                             </div>
                         </div>
                         <div class="preview-item-content">
                             <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                         </div>
                     </a>
                     <div class="dropdown-divider"></div>
                     <a href="#" class="dropdown-item preview-item">
                         <div class="preview-thumbnail">
                             <div class="preview-icon bg-dark rounded-circle">
                                 <i class="mdi mdi-onepassword  text-info"></i>
                             </div>
                         </div>
                         <div class="preview-item-content">
                             <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                         </div>
                     </a>
                     <div class="dropdown-divider"></div>
                     <a href="#" class="dropdown-item preview-item">
                         <div class="preview-thumbnail">
                             <div class="preview-icon bg-dark rounded-circle">
                                 <i class="mdi mdi-calendar-today text-success"></i>
                             </div>
                         </div>
                         <div class="preview-item-content">
                             <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                         </div>
                     </a>
                 </div>
             </div>
         </li>
         <li class="nav-item nav-category">
             <span class="nav-link">Navigation</span>
         </li>
         @can('view_live_calls')
             <li class="nav-item menu-items">
                 <a class="nav-link" href="{{ route('admin') }}">
                     <span class="menu-icon">
                         <i class="mdi mdi-speedometer"></i>
                     </span>
                     <span class="menu-title">Live Open Calls</span>
                 </a>
             </li>
         @endcan


         {{-- <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('index') }}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Live Open Analysis</span>
            </a>
          </li> --}}
         @can('view_history_calls')
             <li class="nav-item menu-items">
                 <a class="nav-link" href="{{ route('history_index') }}">
                     <span class="menu-icon">
                         <i class="mdi mdi-speedometer"></i>
                     </span>
                     <span class="menu-title">History Calls</span>
                 </a>
             </li>
         @endcan
         @can('view_user')
             <li class="nav-item menu-items">
                 <a class="nav-link" href="{{ route('user_index') }}">
                     <span class="menu-icon">
                         <i class="mdi mdi-speedometer"></i>
                     </span>
                     <span class="menu-title">All Users</span>
                 </a>
             </li>
         @endcan
         @can('view_user')
             <li class="nav-item menu-items">
                 <a class="nav-link" href="{{ route('registered_user_index') }}">
                     <span class="menu-icon">
                         <i class="mdi mdi-speedometer"></i>
                     </span>
                     <span class="menu-title">Registered Users</span>
                 </a>
             </li>
         @endcan
         @can('view_user')
             <li class="nav-item menu-items">
                 <a class="nav-link" href="{{ route('un_registered_user_index') }}">
                     <span class="menu-icon">
                         <i class="mdi mdi-speedometer"></i>
                     </span>
                     <span class="menu-title">Unregistered Users</span>
                 </a>
             </li>
         @endcan
         {{-- <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('index') }}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Available Plans</span>
            </a>
          </li> --}}
         @can('view_enquiry')
             <li class="nav-item menu-items">
                 <a class="nav-link" href="{{ route('kyc') }}">
                     <span class="menu-icon">
                         <i class="mdi mdi-speedometer"></i>
                     </span>
                     <span class="menu-title">KYC</span>
                 </a>
             </li>
         @endcan
         @can('create_roles')
             <li class="nav-item menu-items">
                 <a class="nav-link" href="{{ route('roles_and_permission') }}">
                     <span class="menu-icon">
                         <i class="mdi mdi-speedometer"></i>
                     </span>
                     <span class="menu-title">Roles and Permissions</span>
                 </a>
             </li>
         @endcan
         <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('help_and_support') }}" >
                <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Help & Support</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Packages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin_future_package') }}">Future</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin_equity_package') }}">Equity</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin_option_package') }}">Option</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin_index_future_hni_services') }}">Index Future HNI</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin_sb_premium_packages') }}">SBFS Premium</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin_hni_packages') }}">HNI</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin_ags_trades_package') }}">AGS Trades</a></li>
              </ul>
            </div>
          </li>
         {{-- <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Basic UI Elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('pages/ui-features/buttons') }}">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('pages/ui-features/dropdowns') }}">Dropdowns</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('pages/ui-features/typography') }}">Typography</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('pages/forms/basic_elements') }}">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Form Elements</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('pages/tables/basic-table') }}">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Tables</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('pages/charts/chartjs') }}">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
              <span class="menu-title">Charts</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{ route('pages/icons/mdi') }}">
              <span class="menu-icon">
                <i class="mdi mdi-contacts"></i>
              </span>
              <span class="menu-title">Icons</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('pages/samples/blank-page') }}"> Blank Page </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('pages/samples/error-404') }}"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('pages/samples/error-500') }}"> 500 </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('pages/samples/login') }}"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('pages/samples/register') }}"> Register </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="http://www.bootstrapdash.com/demo/corona-free/jquery/documentation/documentation') }}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Documentation</span>
            </a>
          </li> --}}
     </ul>
 </nav>
