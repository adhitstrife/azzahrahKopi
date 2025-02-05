<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ $data->name }}</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
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

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="{{ Route('admin.index') }}"><i class="fa fa-link"></i> <span>Dashboard</span></a></li>
        <li><a href="{{ Route('admin.inbox.index') }}"><i class="fa fa-link"></i> <span>Inbox</span></a></li>
        <li><a href="{{ Route('admin.product.index') }}"><i class="fa fa-link"></i> <span>Product</span></a></li>
        <li><a href="{{ Route('admin.slider.index')}}"><i class="fa fa-link"></i> <span>Slider</span></a></li>
        <li><a href="{{ Route('admin.news.index') }}"><i class="fa fa-link"></i> <span>News</span></a></li>
        <li><a href="{{ Route('admin.gallery.index') }}"><i class="fa fa-link"></i> <span>Gallery</span></a></li>
        <li><a href="{{ Route('admin.testimoni.index') }}"><i class="fa fa-link"></i> <span>Testimoni</span></a></li>
        <li><a href="{{ Route('admin.testimoni.index') }}"><i class="fa fa-link"></i> <span>Footer</span></a></li>
        {{-- <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Category</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
          </ul>
        </li> --}}
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>