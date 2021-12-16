<aside id="leftsidebar" class="sidebar">
    <!-- User Info -->
    <div class="user-info">
        <div class="image"> <img src="{{asset('public/assets/images/random-avatar1.jpg')}}" width="48" height="48" alt="User" /> </div>
        <div class="info-container">
            <div class="name" data-toggle="dropdown">{{Auth::user()->name}}</div>
            <div class="email">{{Auth::user()->email}}</div>
            <div class="btn-group user-helper-dropdown"> <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                <ul class="dropdown-menu pull-right">
                    <li><a href="{{route('admin/edit-profile')}}"><i class="material-icons">person</i>Profile</a></li>
                    <li class="divider"></li>
                    <li><a href="{{route('logout')}}"><i class="material-icons">input</i>Sign Out</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- #User Info -->
    <!-- Menu -->
    <div class="menu">
        <ul class="list">
            <li class="header">MAIN NAVIGATION</li>
            <li> <a href="{{route('admin.dashboard')}}"><i class="zmdi zmdi-view-dashboard"></i><span>Dashboard</span> </a> </li>
            <li> <a href="{{route('admin.calender')}}"><i class="zmdi zmdi-view-dashboard"></i><span>Calender</span> </a> </li>
            <li> <a href="{{route('admin.estimates')}}"><i class="zmdi zmdi-view-dashboard"></i><span>Estimates</span> </a> </li>
            <li> <a href="{{route('admin.jobsheets')}}"><i class="zmdi zmdi-view-dashboard"></i><span>Job Sheets</span> </a> </li>
            <li> <a href="{{route('admin.invoices')}}"><i class="zmdi zmdi-view-dashboard"></i><span>Invoices</span> </a> </li>
            <li> <a href="{{route('admin.unpaid')}}"><i class="zmdi zmdi-view-dashboard"></i><span>Unpaid</span> </a> </li>
            <li> <a href="{{route('admin.archives')}}"><i class="zmdi zmdi-view-dashboard"></i><span>Archives</span> </a> </li>
            <li> <a href="{{route('admin.customers')}}"><i class="zmdi zmdi-view-dashboard"></i><span>Customers</span> </a> </li>        
            
            <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-delicious"></i><span>Vehicles</span> </a>
                <ul class="ml-menu">
                    <li> <a href="{{route('admin.customer_vehicles')}}"><i class="zmdi zmdi-car"></i> <span>Customer Vehicles</span></a></li>
                    <li> <a href="{{route('admin.vehicles')}}"><i class="zmdi zmdi-car"></i> <span>Vehicles</span></a></li>
                    <li> <a href="{{route('admin.vehicles.model')}}"><i class="zmdi zmdi-car"></i> <span>Models</span> </a> </li>
                </ul>
            </li>
            

            <li> <a href="{{route('admin.supplier')}}"><i class="zmdi zmdi-view-dashboard"></i><span>Suppliers</span> </a> </li>
            <li> <a href="{{route('admin.stock')}}"><i class="zmdi zmdi-view-dashboard"></i><span>Stock</span> </a> </li>
            <li> <a href="{{route('admin.dashboard')}}"><i class="zmdi zmdi-view-dashboard"></i><span>Reminders</span> </a> </li>
        </ul>
    </div>
    <!-- #Menu -->
</aside>