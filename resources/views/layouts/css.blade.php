<!-- FontAwesome JS-->
<script defer src="{{ asset('public/assets/plugins/fontawesome/js/all.min.js') }}"></script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
<!-- App CSS -->

@if (Config::get('app.locale') == 'ar')
                                            
<link id="theme-style" rel="stylesheet" href="{{ asset('public/assets/css/portal-rtl.css') }}">

@elseif (Config::get('app.locale') == 'en')

<link id="theme-style" rel="stylesheet" href="{{ asset('public/assets/css/portal.css') }}">

@endif

<style>
    html{
        
  font-family: "Tajawal", sans-serif;
  font-weight: 400;
  font-style: normal;

    }
</style>

@yield('css')