<div class="menu-container">
    <div class="menu">
        <ul>
            <li class="@yield('dashboard')"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
            <li class="@yield('calender')"><a href="{{route('admin.calender')}}">Calender</a></li>
            <li class="@yield('estimates')"><a href="{{route('admin.estimates')}}">Estimates</a></li>
            <li class="@yield('job_sheets')"><a href="{{route('admin.jobsheets')}}">Job Sheets</a></li>                        
            <li class="@yield('invoices')"><a href="{{route('admin.invoices')}}">Invoices</a></li>
            <li class="@yield('unpaid')"><a href="{{route('admin.unpaid')}}">Unpaid</a></li>
            <li class="@yield('archives')"><a href="{{route('admin.archives')}}">Archives</a></li>
            <li class="@yield('customers')"><a href="{{route('admin.customers')}}">Customers</a></li>
            <li class="@yield('vehicles')"><a href="{{route('admin.customer_vehicles')}}">Vehicles</a></li>

            <li class="@yield('suppliers')"><a href="{{route('admin.supplier')}}">Suppliers</a></li>
            <li class="@yield('stock')"><a href="{{route('admin.stock')}}">Stock</a></li>
            <li class="@yield('reminders')"><a href="{{route('admin.reminder')}}">Reminders</a></li>

       

           
        </ul>
    </div>
</div>