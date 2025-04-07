<div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.index') }}">
          <i class="fas fa-fw fa-table"></i>
          <span>Admins</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('product.index') }}">
          <i class="fas fa-fw fa-table"></i>
          <span>Products</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        @yield("content")
      </div>
    </div>
