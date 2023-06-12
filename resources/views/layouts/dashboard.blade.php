<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Menarra Finance Dashboard Page" />
    <meta
      name="keywords"
      content="HTML, CSS, JavaScript, Bootstrap, Chart JS"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="" />

    <title>SPIP Peruri - @yield('title')</title>

    <!-- Scrollbar Custom CSS -->
    @stack('before-styles')
    @include('styles.styles-main')
    
    @stack('after-styles')
  </head>
  <body>
    <!-- Nav Sidebar -->

      @include('includes.nav-sidebar')
  
   

    <!-- Main Content -->

    @yield('content-management')
   
    <!-- Bootstrap JS -->

    @stack('before-scripts')
    @include('scripts.script-main')
   
    @stack('after-scripts')
  </body>
</html>
