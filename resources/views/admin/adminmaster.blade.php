
@include('admin.layouts.header')

  <!-- Site wrapper -->
  <div id="app" class="wrapper">
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">

          <li class="nav-item">
            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
              <i class="fas fa-th-large"></i>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('admin.layouts.aside')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">


    <admin-main></admin-main>
  </div>
  <!-- /.content-wrapper -->

  @include('admin.layouts.footer')
