<!DOCTYPE html>
<html lang="en" @if($forceDark ?? false) class="dark" @endif>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="relative min-h-screen">
    @if(isset($header))
        <div class="fixed top-0 left-0 right-0 z-50">
            {{ $header }}
        </div>
    @else
        <x-header class="fixed top-0 left-0 right-0 z-50 bg-white dark:bg-[#45454F] transition-all duration-300" />
    @endif
    {{ $slot }}
</body>
</html>