<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang = "ru">
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
 </head>
 <body class="bg-dark text-white">
    
    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-dark border-bottom box-shadow justify-content-between">
        <h5 class="my-0 mr-md-auto font-weight-normal">ItProger</h5>
        <nav class="my-2 my-md-0 mr-md-3">
          <a class="p-2 text-white" href="/">Главная</a>
          <a class="p-2 text-white" href="/about">Про нас</a>
        </nav>
        <a class="btn btn-warning" href="/review">Отзывы</a>
      </div>
  <div class="container">
    @yield('main_content')
  </div>
 </body>
</html>