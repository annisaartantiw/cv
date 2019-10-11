<?php
  $a = ucfirst($this->uri->segment(2));
?>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="<?php echo base_url('backend/dist/img/AdminLTELogo.png') ?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">CV</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!--
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>Dashboard</p>
            </a>
          </li>
          -->
          <li class="nav-item">
            <a href="<?php echo base_url('admin/biodata') ?>" class="nav-link <?php if($a == "Biodata") echo "active"; ?>">
              <i class="nav-icon fa fa-th"></i>
              <p>
                Biodata
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('admin/education') ?>" class="nav-link <?php if($a == "Education") echo "active"; ?>">
              <i class="nav-icon fa fa-pie-chart"></i>
              <p>
                Education 
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('admin/experience') ?>" class="nav-link  <?php if($a == "Experience") echo "active"; ?>">
              <i class="nav-icon fa fa-tree"></i>
              <p>
                Experience
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('admin/portofolio') ?>" class="nav-link  <?php if($a == "Portofolio") echo "active"; ?>">
              <i class="nav-icon fa fa-table"></i>
              <p>
                Portofolio
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('admin/ability') ?>" class="nav-link  <?php if($a == "Ability") echo "active"; ?>">
              <i class="nav-icon fa fa-table"></i>
              <p>
                Ability
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="<?php echo base_url('admin/socialmedia') ?>" class="nav-link  <?php if($a == "Socialmedia") echo "active"; ?>">
              <i class="nav-icon fa fa-table"></i>
              <p>
                Social Media
              </p>
            </a>
          </li>          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>