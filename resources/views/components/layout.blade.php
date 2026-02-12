<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css', 'resources/js/app.js')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>EmmaLin</title>
</head>

<body>


    @if (! isset($hideNavHero) || ! $hideNavHero)
        <x-nav />
        @if (session('success'))
            <div x-data="{ show: true }" x-show="show" x-transition class="alert alert-success mx-auto max-w-2xl mt-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span>{{ session('success') }}</span>
                <button @click="show = false" class="btn btn-sm btn-ghost">✕</button>
            </div>
        @endif
        @guest
            <x-hero />
        @endguest
    @endif
    {{ $slot }}

</body>

</html>
