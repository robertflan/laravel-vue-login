<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>{{ config('app.name') }}</title>

  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <link href="{{ asset('assets/sass/custom.scss') }}" rel="stylesheet">
</head>
<body>
<div class="main-container">
  <div class="header">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">My site</a>
            </div>
        </div>
      </nav>
  </div>
 
  
  <div id="app"></div>

  @include('scripts')

</body>
</html>
