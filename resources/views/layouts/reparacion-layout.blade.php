<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="House of Hough, СМС, CMS, content menagement, система менеджмента контента, веб-маркетинг">
    <meta name="description" content="Content Managment System powered by Regex SEO">
    <link rel="shortcut icon" href="img/LOGO.png" type="image/x-icon">
    <title>  @yield('title')</title>
    <link rel="stylesheet" href={{ URL::asset('css/normalize.css') }} >
    <link rel="stylesheet" href={{ URL::asset('css/style.css') }} >
    @yield('label-css')
</head>

<body>
   
    <main>
        @yield('main')
    </main>

    @include('svg')

</body>

</html>