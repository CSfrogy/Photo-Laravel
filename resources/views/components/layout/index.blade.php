<!DOCTYPE html>
<html lang="en" data-theme="pastel">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? 'EmmaLin' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="pt-16">
    @if (! isset($hideNavHero) || ! $hideNavHero)
        <x-layout.nav />
    @endif

    @session('success')
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 2500)"
            x-transition.opacity.duration.300ms
            class="alert alert-success fixed top-20 left-1/2 -translate-x-1/2 z-50 w-auto max-w-md shadow-lg">
            <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span>{{ session('success') }}</span>
            <button @click="show = false" class="btn btn-sm btn-ghost">✕</button>
        </div>
    @endsession

    @if ((! isset($hideNavHero) || ! $hideNavHero) && auth()->guest())
        <x-hero />
    @endif

    <main class="max-w-7xl mx-auto px-6">
        {{ $slot }}
    </main>
</body>

</html>