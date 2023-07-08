<!DOCTYPE html>
<html lang="en">

@include('app-layout/head')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('AdminLTE/dist') }}/img/TNIAULogo.png" alt="AdminLTELogo"
                height="100" width="100">
        </div>

        @include('app-layout.navbar')

        @include('app-layout.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">

            @include('app-layout.breadcrumb')

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </section>
        </div>
        @include('app-layout.footer')
    </div>
    @include('app-layout.script')
    @yield('script')
</body>

<script type="text/javascript">
    $("document").ready(function() {
        setTimeout(function() {
            $(".alert").remove();
        }, 5000); // 5 secs

    });
</script>

</html>
