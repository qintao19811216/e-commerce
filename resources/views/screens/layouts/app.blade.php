<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Konta') - 琼台</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @yield('include')

</head> 
<body class="hold-transition skin-blue sidebar-mini">
<!-- <body class="hold-transition sidebar-mini sidebar-collapse"> -->
<div id="app" class="{{ route_class() }}-page">
    <div class="wrapper">
        @include('screens.layouts._header')
        @include('screens.layouts._sidebar')

        <div class="content-wrapper text-sm">

            @yield('section')

            <section class="content container-fluid">
                @yield('content')

            </section>
        </div>

        @include('screens.layouts._footer')
    </div>
</div>

<script src="{{ mix('js/app.js') }}"></script>

@yield('script')

<!-- <script>
    $(function(){
        $('.nav-sidebar a').each(function(){
            if(this.href === window.location.href){
                $(this).addClass('active');
                $(this).parent().parent().parent().addClass('active');
                $(this).parent().parent().parent().children(":first").addClass('active');
            }
        });
    });
</script> -->


</body>

</html>