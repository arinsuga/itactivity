<!-- Sidebar Menu -->
<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
    <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->
    <li class="nav-item has-treeview menu-open">
      <a href="{{ route('home.index') }}" class="nav-link active">
        <i class="nav-icon fas fa-home"></i>
        <p>
          Home
        </p>
      </a>
    </li>

    <!-- Master Data -->
    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-tag"></i>
        <p>
          Master
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>

      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{ route('mastercategory.index') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Kategori</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('mastersubcategory.index') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Sub Category</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('masteritem.index') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Item</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('masterobjectmaintenance.index') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Object Maintenance</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('masterproject.index') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Project</p>
          </a>
        </li>

      </ul>
    </li>


    <!-- Activity -->
    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-tag"></i>
        <p>
          Activity
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>

      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{ route('support.index.today') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Support</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('maintenance.index.today') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Maintenance / Daily Activity</p>
          </a>
        </li>

        <li class="nav-item">
          <a href="{{ route('project.index.today') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Project / Action Plan</p>
          </a>
        </li>
      </ul>
    </li>

    <!-- Input data -->
    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-tag"></i>
        <p>
          Input Data
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>
      <ul class="nav nav-treeview">

        <li class="nav-item">
          <a href="{{ route('employee.index') }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Karyawan</p>
          </a>
        </li>
      </ul>
    </li>

    <!-- Reports -->
    <li class="nav-item has-treeview">
      <a href="#" class="nav-link">
        <i class="nav-icon fas fa-tag"></i>
        <p>
          Reports
          <i class="fas fa-angle-left right"></i>
        </p>
      </a>

      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{ route('support.report.detail', ['report' => 'report', 'detail' => 'detail']) }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Support</p>
          </a>
        </li>
      </ul>

      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{ route('maintenance.report.detail', ['report' => 'report', 'detail' => 'detail']) }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Maintenance / Daily Activity</p>
          </a>
        </li>
      </ul>

      <ul class="nav nav-treeview">
        <li class="nav-item">
          <a href="{{ route('project.report.detail', ['report' => 'report', 'detail' => 'detail']) }}" class="nav-link">
            <i class="far fa-circle nav-icon"></i>
            <p>Project / Action Plan</p>
          </a>
        </li>
      </ul>
      
    </li>

    <!-- Logout -->
    <li class="nav-item has-treeview menu-open">
      <a href="{{ route('AuthAdmin.logout') }}" class="nav-link"
         onclick="event.preventDefault();
         document.getElementById('logout-form').submit();">
         <i class="nav-icon fas fa-sign-out-alt"></i>
        <p>
          Logout
        </p>
      </a>

      <form id="logout-form" action="{{ route('AuthAdmin.logout') }}" method="POST" style="display: none;">
          @csrf
      </form>

    </li>



  </ul>
</nav>
<!-- /.sidebar-menu -->
