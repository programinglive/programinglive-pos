<html lang="">
<head>
  <title>{{ config('app.name') }}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="description" content="Open Source POS Application">

  @vite(['resources/css/app.css', 'resources/js/app.js'])
  @livewireStyles
</head>
<body>

  {{ $slot }}

  @livewireScripts
</body>
</html>
