<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<!-- END HEAD -->
<body>

@include('layouts.header')

<div class="clearfix"></div>
    
<div class="fwc-2 flex flex-grow-1 justify-between mt3">

    @yield('title')
    
    @yield('content')       
    
    @include('layouts.sidebaruser')
       
   
    
</div>
        
@include('layouts.footer')

@include('layouts.scripts')

</body>
</html>
