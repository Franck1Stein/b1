<div class="sidebar">
  <!-- Sidebar user (optional) -->
  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
      <img src="{{ asset('img/blackadminsupport.png') }}" class="img-circle elevation-2" alt="User Image">
    </div>
    <div class="info">
      <a href="#" class="d-block">Alexander Pierce</a>
    </div>
  </div>

  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item has-treeview">
        <router-link :to="{ name: 'AdminHome' }" class="nav-link">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>Dashboard</p>
        </router-link>

      </li>
      <li class="nav-item">

        <router-link :to="{ name: 'CategoryList' }" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
          <p>Category</p>
        </router-link>
      </li>
      <li class="nav-item">
        <router-link :to="{ name: 'PostList' }" class="nav-link">
          <i class="nav-icon fas fa-th"></i>
          <p>Post</p>
        </router-link>
      </li>
    </ul>
  </nav>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>
