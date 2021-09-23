<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Wedding HTML-5 Template </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @include('Backend.Assets.css')
    @yield('css')
</head>
<body>
    <div id="app">
        @include('Backend.Components.header')
        <main class="py-4 main-app">
            @include('Backend.Components.flashMessage')
            @yield('content')
        </main>
        @include('Backend.Components.footer')
{{--        @include("Backend.Components.deletepopup")--}}
    </div>
    @include('Backend.Assets.js')
    @yield('js')







</body>
</html>
