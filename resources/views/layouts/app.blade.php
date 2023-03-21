<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Icon -->
    <link rel="shortcut icon" href="/build/assets/media/logos/favicon.ico" />

    <!-- Name Bar -->
    <title>{{ config('app.name')}}</title>

    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="/build/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="/build/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->

    <!--begin::Vendor Stylesheets(used by this page)-->
    <link href="/build/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <link href="/build/assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Vendor Stylesheets-->

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">

    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- Scripts -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
  
  <!-- DataTables CSS -->
  <link rel="stylesheet"href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">

    <!-- Scripts (, 'resources/js/app.js') -->
    @vite(['resources/css/app.css'])
</head>

<body id="kt_body" class="header-tablet-and-mobile-fixed aside-enabled">
    <x-container>

        <!--begin::Theme mode setup on page load-->
        <script>
            var defaultThemeMode = "light";
            var themeMode;
            if (document.documentElement) {
                if (document.documentElement.hasAttribute("data-theme-mode")) {
                    themeMode = document.documentElement.getAttribute("data-theme-mode");
                } else {
                    if (localStorage.getItem("data-theme") !== null) {
                        themeMode = localStorage.getItem("data-theme");
                    } else {
                        themeMode = defaultThemeMode;
                    }
                }
                if (themeMode === "system") {
                    themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
                }
                document.documentElement.setAttribute("data-theme", themeMode);
            }
        </script>

        @include('layouts.aside')

        <x-wrapper>

            @include('layouts.navigation')

            <!-- Page Content -->
            <main class="md:max-w-full md:h-full">

                @if(session()->has('message'))

                <div class="alert alert-success alert-dismissable">
                    <button button type="button" class="close" data-dismiss="alert" aria-label="Close">×
                        <span aria-hidden="true">{{ session('message')}}</span>
                    </button>
                </div>

                @endif

                {{ $slot }}

            </main>

            @include('layouts.footer')

        </x-wrapper>


        <!--begin::Javascript-->
        <script>
            var hostUrl = "/build/assets/";
        </script>
        <!--begin::Global Javascript Bundle(used by all pages)-->
        <script src="/build/assets/plugins/global/plugins.bundle.js"></script>
        <script src="/build/assets/js/scripts.bundle.js"></script>
        <!--end::Global Javascript Bundle-->
        <!--begin::Vendors Javascript(used by this page)-->
        <script src="/build/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
        <script src="/build/assets/plugins/custom/datatables/datatables.bundle.js"></script>
        <!--end::Vendors Javascript-->

        <!--begin::Custom Javascript(used by this page)-->
        <script src="/build/assets/js/widgets.bundle.js"></script>
        <script src="/build/assets/js/custom/widgets.js"></script>
        <script src="/build/assets/js/custom/apps/chat/chat.js"></script>
        <script src="/build/assets/js/custom/utilities/modals/users-search.js"></script>
        <!--end::Custom Javascript-->
        <!--end::Javascript-->

        <script src="/build/assets/js/datatables.js"></script>

    </x-container>

    @include('layouts.scrolltop')

    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>

</body>

</html>