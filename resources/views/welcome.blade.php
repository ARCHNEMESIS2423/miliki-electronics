<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ __('Welcome') }} - {{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" href="/favicon.ico" sizes="any">
    <link rel="icon" href="/favicon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    @fonts

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->

</head>

<body class="flex flex-col ">
    <header class="bg-center bg-cover bg-no-repeat min-h-70 w-full"
        style="background-image: url('{{ asset('displays/bg-hero.jpeg') }}');">
        <div class="font-['Manrope'] font-extrabold flex flex-row gap-1.5 md:text-3xl text-lg bg-gray-300 p-2.5">
            <img src="{{ asset('favicon.svg') }}" alt="M" width="35" class="inline" />
            <h1><span class="text-[#C6A86F]">MILIKI.</span> ELECTRONICS ONLINE SHOP<h1>
        </div>
    </header>
</body>

</html>
