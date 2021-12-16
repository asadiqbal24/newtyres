<nav class="navbar" style="background-color: {{$color_scheme->value}}">
    <div class="col-12">
        <div class="navbar-header">            
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href="{{route('admin.dashboard')}}">{{$app_name->value}}</a>
        </div>
        <ul class="nav navbar-nav navbar-right">
                    
            <li><a href="{{route('logout')}}" class="mega-menu" data-close="true"><i class="zmdi zmdi-power"></i></a></li>
        </ul>
    </div>
</nav>