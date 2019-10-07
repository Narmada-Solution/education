<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<!-- END HEAD -->
<body>

@include('layouts.header')

<div class="clearfix"></div>
    
@yield('title')

@yield('content')       
    
@include('layouts.footer')

@include('layouts.scripts')

</body>
</html>
