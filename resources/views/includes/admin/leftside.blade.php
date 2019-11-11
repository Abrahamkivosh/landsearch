<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ Auth::User()->name }}</p>
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
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="/admin1">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="/admin1"><i class="fa fa-circle-o"></i> Dashboard</a></li>

          </ul>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Land Detials</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/admin1/land "><i class="fa fa-circle-o"></i> View Lands</a></li>
            <li><a href="/admin1/owners"><i class="fa fa-circle-o"></i> Land Owners</a></li>
            <li><a href="/admin1/land/create"><i class="fa fa-circle-o"></i> Add Land</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
              <i class="fa fa-users" aria-hidden="true"><span>Clients</span></i>

            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('clients.create') }}"><i class="fa fa-user-plus" aria-hidden="true"> Client</i> </a></li>
            <li><a href="{{ route('clients.index') }}"><i class="fa fa-eye" aria-hidden="true">View Clients</i></a></li>
          </ul>
        </li>
        <li class="treeview">
            <a href="#">
              <i class="fa fa-edit"></i> <span>Clerks</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="/admin1/clerks "><i class="fa fa-circle-o"></i> View Clerks</a></li>
              <li><a href="/admin1/clerks/create"><i class="fa fa-circle-o"></i> Add Clerk</a></li>
            </ul>
          </li>
        <li>
          <a href="#">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-yellow">12</small>
              <small class="label pull-right bg-green">16</small>
              <small class="label pull-right bg-red">5</small>
            </span>
          </a>
        </li>

    </section>
    <!-- /.sidebar -->
  </aside>
