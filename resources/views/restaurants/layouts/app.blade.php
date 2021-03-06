
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Restaurants Login</title>

    <!-- ================= Favicon ================== -->
    <link rel="icon" type="image/png" href="{{asset($account_info->fav_icon !=NULL ? $account_info->fav_icon:'themes/default/images/all-img/fav.png')}}">


    <link href={{asset('assets/css/lib/calendar2/pignose.calendar.min.css')}} rel="stylesheet"/>
    <link href={{asset('assets/css/lib/chartist/chartist.min.css')}} rel="stylesheet"/>
    <!-- Styles -->
    <link href={{asset('assets/css/lib/owl.carousel.min.css')}} rel="stylesheet"/>
    <link href={{asset("assets/css/lib/font-awesome.min.css")}} rel="stylesheet">
    <link href={{asset("assets/css/lib/themify-icons.css")}} rel="stylesheet">
    <link href={{asset("assets/css/lib/menubar/sidebar.css")}} rel="stylesheet">
    <link href={{asset("assets/css/lib/bootstrap.min.css")}} rel="stylesheet">
    <link href={{asset("assets/css/lib/unix.css")}} rel="stylesheet">
    <link href={{asset("assets/css/style.css")}} rel="stylesheet">

</head>

<body>
@yield('content')


<!-- jquery vendor -->
<script src={{asset("assets/js/lib/jquery.min.js")}}></script>
<!-- nano scroller -->
<script src={{asset("assets/js/lib/jquery.nanoscroller.min.js")}}></script>
<!-- sidebar -->
<script src={{asset("assets/js/lib/menubar/sidebar.js")}}></script>
<!-- bootstrap -->
<script src={{asset("assets/js/lib/bootstrap.min.js")}}></script>


<script src={{asset("assets/js/lib/calendar-2/moment.latest.min.js")}}></script>
<!-- scripit init-->
<script src={{asset("assets/js/lib/calendar-2/semantic.ui.min.js")}}></script>

<!-- scripit init-->
<script src={{asset("assets/js/lib/calendar-2/prism.min.js")}}></script>

<!-- scripit init-->
<script src={{asset("assets/js/lib/calendar-2/pignose.calendar.min.js")}}></script>

<!-- scripit init-->
<script src={{asset("assets/js/lib/calendar-2/pignose.init.js")}}></script>
<script src={{asset("assets/js/lib/preloader/pace.min.js")}}></script>

<script src={{asset("assets/js/scripts.js")}}></script>

</body>

</html>
