<!doctype html>
<html lang="en">

<head>
    @include('UI.headhtml')
</head>

<body style="background-color: #dde5ff">
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        @include('UI.sidebar')
        <!--  Main wrapper -->
        <div class="body-wrapper">
            <!--  Header Start -->
            @include('UI.navbar')
            <!--  Header End -->
            <div class="container-fluid">
                
                @yield('content')
                
            </div>
        </div>
    </div>
    @include('UI.script')
</body>

</html>