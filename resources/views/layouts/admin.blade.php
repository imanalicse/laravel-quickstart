<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    @vite(['resources/css/admin.css'])
    @vite(['resources/js/app.js'])
</head>
<body>
<?php
$action = app('request')->route()->getAction();
$controller = class_basename($action['controller']);
list($controller, $action) = explode('@', $controller);
?>

@include('admin.includes.sidebar')

<div class="content-wrapper">
    @include('admin/includes/navbar')
    <div class="main-container">
        @include('admin.includes.messages')
        @yield('content')
    </div>
</div>
</body>
</html>
