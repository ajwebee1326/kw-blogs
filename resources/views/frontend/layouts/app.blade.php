<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title')</title>
        <!--- Google Fonts --->
        <link
            href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;800;900&family=Roboto:wght@400;500;700&display=swap"
            rel="stylesheet">
        <!--- Fonts Awesome --->
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!--- Bootstrap css --->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css" />
        <!--- Css --->
        <link rel="stylesheet" href="{{asset('frontend')}}/css/style.css">

        {{-- meta description --}}

        

    </head>
<body>
    
    <x-frontend.header />
 
    @yield('content')
   
    <x-frontend.footer />

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>
    <script>
  
        var currentUrl = window.location.href;

        var navItems = document.querySelectorAll('.navbar-nav .nav-item');

        navItems.forEach(function(item) {
        
            var link = item.querySelector('.nav-link');

            var href = link.getAttribute('href');

        
            if (currentUrl.includes(href)) {
                item.classList.add('active');
            }
        });
   </script>

    </script>
    
    @yield('scripts')
</body>
</html>