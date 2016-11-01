<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar" style="height: auto;">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url() . get_logindata('image'); ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Hi, <?php echo ucwords(get_logindata('name')); ?> <small>(<?php echo ucwords(get_logindata('role_name')); ?>)</small></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
	  <li><a href="<?php echo site_url('customer/showroom/index'); ?>"><i class="fa fa-circle-o text-red"></i> <span>My Showrooms</span></a></li>
      <li><a href="<?php echo site_url('customer/car/index'); ?>"><i class="fa fa-circle-o text-red"></i> <span>My Cars</span></a></li>
      <li><a href="<?php echo site_url('customer/profile/index'); ?>"><i class="fa fa-circle-o text-red"></i> <span>Manage Your Profile</span></a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>