<nav class="navbar navbar-expand-lg navbar-transparent navbar-dark navbar-theme-primary mb-4">
    <div class="container position-relative">
        <a class="navbar-brand mr-lg-3" href="#">
            <img class="navbar-brand-dark" src="{{ asset('volt') }}/assets/img/brand/cash.png" alt="menuimage">
            <img class="navbar-brand-light" src="{{ asset('volt') }}/assets/img/brand/cash.png" alt="menuimage">
        </a>
        <div class="navbar-collapse collapse w-100 justify-content-between" id="navbar-default-primary">
            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="#">
                            <img src="{{ asset('volt') }}/assets/img/brand/cash.png" alt="menuimage">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <i class="fas fa-times" data-toggle="collapse" role="button"
                            data-target="#navbar-default-primary" aria-controls="navbar-default-primary"
                            aria-expanded="false" aria-label="Toggle navigation"></i>
                    </div>
                </div>
            </div>
            <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                <li class="nav-item active-link">
                    <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            
            </ul>
            <ul class="navbar-nav align-items-center ">
                <li class="nav-item dropdown">
                    <a class="nav-link pt-1 px-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <div class="media d-flex align-items-center">
                        <img class="user-avatar md-avatar rounded-circle" alt="Image placeholder" src="{{ asset('volt') }}/assets/img/team/profile-picture-3.jpg">
                        <div class="media-body ml-2 text-dark align-items-center d-none d-lg-block">
                          <span class="mb-0 font-small font-weight-bold text-white">{{ Auth::user()->name }}</span>
                        </div>
                      </div>
                    </a>
                    <div class="dropdown-menu dashboard-dropdown dropdown-menu-right mt-2">
                      <a class="dropdown-item font-weight-bold" href="#"><span class="far fa-user-circle"></span>My Profile</a>
                      <a class="dropdown-item font-weight-bold" href="#"><span class="fas fa-cog"></span>Settings</a>
                      <a class="dropdown-item font-weight-bold" href="#"><span class="fas fa-envelope-open-text"></span>Messages</a>
                      <a class="dropdown-item font-weight-bold" href="#"><span class="fas fa-user-shield"></span>Support</a>
                      <div role="separator" class="dropdown-divider"></div>
                      {{-- <a class="dropdown-item font-weight-bold" href="#"><span class="fas fa-sign-out-alt text-danger"></span>Logout</a> --}}
                      <a class="dropdown-item font-weight-bold" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
                        <span class="fas fa-sign-out-alt text-danger"></span>Logout
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                        </form>
                      </a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="d-flex align-items-center">
            <button class="navbar-toggler ml-2" type="button" data-toggle="collapse"
                data-target="#navbar-default-primary" aria-controls="navbar-default-primary"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</nav>

{{-- <nav class="navbar navbar-expand-lg navbar-transparent navbar-light navbar-theme-soft mb-4">
    <div class="container position-relative">
        <a class="navbar-brand mr-lg-3" href="#">
            <img class="navbar-brand-dark" src="{{ asset('volt') }}/assets/img/brand/cash.png" alt="menuimage">
            <img class="navbar-brand-light" src="{{ asset('volt') }}/assets/img/brand/cash.png" alt="menuimage">
        </a>
        <div class="navbar-collapse collapse w-100" id="navbar-default-primary">
            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-6 collapse-brand">
                        <a href="#">
                            <img src="{{ asset('volt') }}/assets/img/brand/cash.png" alt="menuimage">
                        </a>
                    </div>
                    <div class="col-6 collapse-close">
                        <i class="fas fa-times" data-toggle="collapse" role="button"
                            data-target="#navbar-default-primary" aria-controls="navbar-default-primary"
                            aria-expanded="false" aria-label="Toggle navigation"></i>
                    </div>
                </div>
            </div>
            <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                <li class="nav-item active-link">
                    <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>
        </div>
        <div class="d-flex align-items-center">
            <button class="navbar-toggler ml-2" type="button" data-toggle="collapse"
                data-target="#navbar-default-primary" aria-controls="navbar-default-primary"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</nav> --}}


{{-- <nav class="navbar navbar-top navbar-expand  navbar-dark navbar-theme-primary py-3 px-5 mb-4">
    <div class="container-fluid px-0">
      <div class="d-flex justify-content-between w-100" id="navbarSupportedContent">
        <div class="d-flex">
          <!-- Menu -->
            <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
                <li class="nav-item active-link">
                    <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">About</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>
        </div>
        <!-- Navbar links -->
        <ul class="navbar-nav align-items-center">
          <li class="nav-item dropdown">
            <a class="nav-link pt-1 px-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media d-flex align-items-center">
                <img class="user-avatar md-avatar rounded-circle" alt="Image placeholder" src="{{ asset('volt/assets/img/team/profile-picture-4.jpg') }}">
                <div class="media-body ml-2 text-dark align-items-center d-none d-lg-block">
                  <span class="mb-0 font-small font-weight-bold">{{ Auth::user()->name }}</span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dashboard-dropdown dropdown-menu-right mt-2">
              <a class="dropdown-item font-weight-bold" href="#"><span class="far fa-user-circle"></span>My Profile</a>
              <a class="dropdown-item font-weight-bold" href="#"><span class="fas fa-cog"></span>Settings</a>
              <a class="dropdown-item font-weight-bold" href="#"><span class="fas fa-envelope-open-text"></span>Messages</a>
              <a class="dropdown-item font-weight-bold" href="#"><span class="fas fa-user-shield"></span>Support</a>
              <div role="separator" class="dropdown-divider"></div>
              <a class="dropdown-item font-weight-bold" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit()">
                <span class="fas fa-sign-out-alt text-danger"></span>Logout
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </div>
</nav> --}}