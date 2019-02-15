 <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="{{ URL::to('dashboard')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
         
        </li>

    
        <li class="treeview">
          <a href="{{route('customer.index')}}">
            <i class="fa fa-files-o"></i>
            <span>customer</span>
            
          </a>
          
        </li>

         <li class="treeview">
          <a href="{{route('category.index')}}">
            <i class="fa fa-files-o"></i>
            <span>product</span>
            
          </a>
          
        </li>

        <li class="treeview">
          <a href="{{route('cart.index')}}">
            <i class="fa fa-files-o"></i>
            <span>Bill</span>
            
          </a>
          
        </li>
      
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
  