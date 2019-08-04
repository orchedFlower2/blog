<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href= "{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href= "{{asset('css/style.css')}}">
    <script src="{{asset('js/jquery-slim.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>

  </head>
  <body>
    Header
    <hr/>
    @yield("content")
    <hr/>
    Footer
  </body>
</html>
