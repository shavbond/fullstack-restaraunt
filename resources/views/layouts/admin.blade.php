  <!doctype html>
  <html lang="en">
  
  <head>
      
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     
      <link rel="stylesheet" href="/assets/vendor/bootstrap/css/bootstrap.min.css">
      <link href="/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
      <link rel="stylesheet" href="/assets/libs/css/style.css">
      <link rel="stylesheet" href="/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
      <link rel="stylesheet" href="/assets/vendor/charts/chartist-bundle/chartist.css">
      <link rel="stylesheet" href="/assets/vendor/charts/morris-bundle/morris.css">
      <link rel="stylesheet" href="/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
      <link rel="stylesheet" href="/assets/vendor/charts/c3charts/c3.css">
      <link rel="stylesheet" href="/assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
      <title>Admin</title>
  </head>

  <body>

      <div class="dashboard-main-wrapper">

          <div class="dashboard-header">
              <nav class="navbar navbar-expand-lg bg-white fixed-top">
                  <a class="navbar-brand" href="/admin">Billy's</a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse " id="navbarSupportedContent">
                      <ul class="navbar-nav ml-auto navbar-right-top">
                          
                          <li class="nav-item dropdown nav-user">
                              <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" 
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img 
                              src="/assets/images/avatar-1.jpg" alt="" class="user-avatar-md rounded-circle"></a>
                              <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                  <div class="nav-user-info">
                                      <h5 class="mb-0 text-white nav-user-name">
                                          @guest
                                          No User Name
                        @else
                           {{ Auth::user()->fname }}
                           {{ Auth::user()->lname }}
                        @endguest
                                       </h5>
                                      <span class="status"></span><span class="ml-2">Available</span>
                                  </div>
                                  
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                  <i class="fas fa-power-off mr-2" 
                                       ></i>Logout</a>

                                      

                                    <form id="logout-form" action="{{ route('logout') }}" 
                                    method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    
                              </div>
                          </li>
                      </ul>
                  </div>
              </nav>
          </div>
 
          <div class="nav-left-sidebar sidebar-dark">
          <section id="app-layout">
      <div class="admin-side-menu">
    
      </div>
              <div class="menu-list">
                  <nav class="navbar navbar-expand-lg navbar-light">
                      <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" 
                      data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" 
                      aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarNav">
                          <ul class="navbar-nav flex-column">
                              <li class="nav-divider">
                                  Menu
                              </li>
                              <li class="nav-item ">
                                  <a class="nav-link active" href="#" data-toggle="collapse"
                                   aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1">
                                   <i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                                  <div id="submenu-1" class="collapse submenu" style="">
                                      <ul class="nav flex-column">
                                          <li class="nav-item">
                                           
                                              <div id="submenu-1-2" class="collapse submenu" style="">
                                                  <ul class="nav flex-column">                                                                                                    
                                                  </ul>
                                              </div>
                                          <li class="nav-item">
                                              <a class="nav-link" href="/admin">Home</a>
                                          </li>
                                        
                                      </ul>
                                  </div>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="#" data-toggle="collapse" 
                                  aria-expanded="false" data-target="#submenu-2" 
                                  aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>Menu</a>
                                  <div id="submenu-2" class="collapse submenu" style="">
                                      <ul class="nav flex-column">
                                      <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" 
                                            data-target="#submenu-1-1" aria-controls="submenu-1-1">Food</a>
                                            <div id="submenu-1-1" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                        
                                         <li class="nav-item">
                                              <a class="nav-link" href="/admin/food-items/create">New Food Item
                                               <span class="badge badge-secondary">New</span></a>
                                        </li>
                                                </ul>
                                            </div>
                                        </li>
  
                                    </ul>
                                </div>
                              </li> 
                          
                               <li class="nav-item">
                                  <a class="nav-link" href="#" data-toggle="collapse" 
                                  aria-expanded="false" data-target="#submenu-3" 
                                  aria-controls="submenu-3"><i class="fa fa-fw fa-rocket"></i>Customers</a>
                                  <div id="submenu-3" class="collapse submenu" style="">
                                      <ul class="nav flex-column">
                                          <li class="nav-item">
                                              <a class="nav-link" href="/admin/members">Offers' Members
                                               <span class="badge badge-secondary">New</span></a>
                                        </li>  
                                        <li class="nav-item">
                                              <a class="nav-link" href="/admin/reservations">Reservations
                                               <span class="badge badge-secondary">New</span></a>
                                        </li>  
                                        <li class="nav-item">
                                              <a class="nav-link" href="/admin/reservations">New Reservation
                                               <span class="badge badge-secondary">New</span></a>
                                        </li>  
                                        
                                        
                                    </ul>
                                </div>
                              </li> 
                              
                               <li class="nav-item">
                                  <a class="nav-link" href="#" data-toggle="collapse" 
                                  aria-expanded="false" data-target="#submenu-4" 
                                  aria-controls="submenu-4"><i class="fa fa-fw fa-rocket"></i>Users</a>
                                  <div id="submenu-4" class="collapse submenu" style="">
                                      <ul class="nav flex-column">
                                          <li class="nav-item">
                                              <a class="nav-link" href="/admin/users">All Users
                                               <span class="badge badge-secondary">New</span></a>
                                        </li>
                                        <li class="nav-item">
                                              <a class="nav-link" href="/admin/users/create">Create User Account
                                               <span class="badge badge-secondary">New</span></a>
                                        </li>  
                                    </ul>
                                </div>
                              </li> 
                               <li class="nav-item">
                                  <a class="nav-link" href="#" data-toggle="collapse" 
                                  aria-expanded="false" data-target="#submenu-5" 
                                  aria-controls="submenu-5"><i class="fa fa-fw fa-rocket"></i>Settings</a>
                                  <div id="submenu-5" class="collapse submenu" style="">
                                      <ul class="nav flex-column">
                                          <li class="nav-item">
                                              <a class="nav-link" href="/admin/settings/general">General Settings
                                               <span class="badge badge-secondary">New</span></a>
                                        </li>  

                                        <li class="nav-item">
                                              <a class="nav-link" href="/admin/settings/seo">SEO
                                               <span class="badge badge-secondary">New</span></a>
                                        </li>  

                                        <li class="nav-item">
                                              <a class="nav-link" href="/admin/settings/social">Social Accounts
                                               <span class="badge badge-secondary">New</span></a>
                                        </li>  


                                    </ul>
                                </div>
                              </li> 
                          </ul>
                      </div>
                  </nav>
              </div>
          </div>

          <div class="dashboard-wrapper">
           @if (session('status'))
             <div class="alert alert-success" role="alert">
           {{ session('status') }}
             </div>
                    @endif
              @yield('content')

          </div>
  
      </div>
   
      <script src="/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
     
      <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
      
      <script src="/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
      
      <script src="/assets/libs/js/main-js.js"></script>
     
      <script src="/assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
   
      <script src="/assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
      
      <script src="/assets/vendor/charts/morris-bundle/raphael.min.js"></script>
      <script src="/assets/vendor/charts/morris-bundle/morris.js"></script>
   
      <script src="/assets/vendor/charts/c3charts/c3.min.js"></script>
      <script src="/assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
      <script src="/assets/vendor/charts/c3charts/C3chartjs.js"></script>
      <script src="/assets/libs/js/dashboard-ecommerce.js"></script>
  </body>
  
  </html>