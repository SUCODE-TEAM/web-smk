<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'SMK Negeri 2 Yogyakarta | The Industrial Culture School' }}</title>
    <meta name="description" content="Website Resmi SMK Negeri 2 Yogyakarta. Menjadi lembaga pendidikan dan pelatihan kejuruan bertaraf internasional yang menghasilkan lulusan kompeten, berkarakter, dan berjiwa wirausaha.">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-background text-text-main font-sans antialiased">
    <x-layout.navbar />
    
    <main class="min-h-screen">
        {{ $slot }}
    </main>
    
    <x-layout.footer />
</body>
</html>
