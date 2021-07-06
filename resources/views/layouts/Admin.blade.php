<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    @yield('head')
    <link rel="shortcut icon" href="{{ asset('img/faviicon_32x32.jpg') }}" type="image/png">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css\admin.css')}}">
</head>
<body>
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            @include('blocks.admin_navbar_h')
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    @include('blocks.admin_navbar_v')
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                               @yield('main-content')
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{asset('js\admin.js')}}"></script>
<!-- Global site tag (gtag.js')}}) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script>
   function user_options(){
       let element = document.getElementById('user_option_list');
       if(element.style.display=="none")
       element.style.display="block";
       else element.style.display="none";
   }
   let has_menu =document.getElementsByClassName('pcoded-hasmenu');
   has_menu.forEach(element => {
       element.childNodes[0].addEventListener('click',()=>{
           if(element.childNodes[1].style.display=="none")
                    element.childNodes[1].style.display="block";
            else element.childNodes[1].style.display="none";
       })
   });
</script>
@yield('scripts')
</body>

</html>
