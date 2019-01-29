        <aside class="main-sidebar">

            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">

                <!-- Sidebar user panel (optional) -->
                <div class="user-panel">
                    <div class="pull-left image">

                     <img src="{{url('/images/small/u_'.Auth::user()->id.'.jpg')}}" onerror="this.src='{{url('images/small/perfil.png')}}';" class="img-circle" alt="User Image" />

                 </div>
                 <div class="pull-left info">
                    <p>{{Auth::user()->name}}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> Welcome</a>
                </div>
            </div>



            <!-- Sidebar Menu -->
            <ul class="sidebar-menu" data-widget="tree" >
                <li class="header">Menu</li>
                <!-- Optionally, you can add icons to the links -->
                <li class="treeview {{get_class(Route::getCurrentRoute()->getController()) == "App\Http\Controllers\CategoryController" ? 'active' : ''}}">
                    <a href="{{url('/tasks')}}"> <i class="fa fa-dashboard"></i><span>Dashboard</span><span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i></span></a>
                        <ul class="treeview-menu">
                            <li><a href="{{url('/category')}}">Product Categories</a></li>
                            <li><a href="{{url('/inventory')}}">Inventory List</a></li>
                        </ul>
                </li>
                <li class="{{get_class(Route::getCurrentRoute()->getController()) == "App\Http\Controllers\ProductController" ? 'active' : ''}}">

                    <a href="{{url('/products')}}"><i class="fa fa-car"></i><span>Products</span></a>
                </li>
                
                    <!--<li class="treeview">
                        <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="#">Link in level 2</a></li>
                            <li><a href="#">Link in level 2</a></li>
                        </ul>
                    </li>-->
                </ul><!-- /.sidebar-menu -->
            </section>
            <!-- /.sidebar -->
        </aside>