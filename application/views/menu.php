<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <!-- search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="treeview">
              <a href="#">
                <i class="glyphicon glyphicon-file"></i> <span>Data Kependudukan</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?=base_url()?>user/add_penduduk"><i class="glyphicon glyphicon-pencil"></i> Input Data Penduduk</a></li>
                <li><a href="<?=base_url()?>user/list_penduduk"><i class="glyphicon glyphicon-list active"></i> List Data Penduduk</a></li>
              </ul>
            </li>          
            <li class="treeview">
              <a href="#">
                <i class="glyphicon glyphicon-file"></i> <span>Data User</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="<?=base_url()?>user/list_user"><i class="glyphicon glyphicon-list active"></i> List Data User</a></li>
              </ul>
            </li>          
          </ul>
        </section>
        <!-- /.sidebar -->
</aside>