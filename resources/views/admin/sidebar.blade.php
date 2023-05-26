<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href="{{ url('/redirects') }}"><img  src="admin/assets/images/mg.jpg" height="100" alt="logo" /></a>
      <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="admin/assets/images/logo-mini.svg" alt="logo" /></a>
    </div>
    <ul class="nav">
      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>
  
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('/redirects') }}">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ url('/customers') }}">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Customers</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ ('/hero') }}">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Hero Section</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ ('/aboutsect') }}">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">About Section</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ ('/servicesect') }}">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Services Section</span>
        </a>
      </li>


      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ ('/portfoliosect') }}">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Portfolio Section</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" href="{{ ('/testmonialsect') }}">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Testmonial Section</span>
        </a>
      </li>
     
    </ul>
  </nav>