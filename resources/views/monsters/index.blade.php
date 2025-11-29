<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MH Wilds - Bestiaire</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-mhbg">
    <div class="container mx-auto px-4 py-12">
        <h1 class="text-6xl text-center mh-title mb-12">BESTIAIRE WILDS</h1>

        <div class="grid grid-cols-4 md:grid-cols-6 lg:grid-cols-8 gap-6">
            @foreach($monsters as $monster)
                <a href="{{ route('monster.show', $monster->slug) }}"
                   class="group relative transform transition-all duration-300 hover:scale-110 hover:z-10">
                    <div class="absolute inset-0 bg-gradient-to-t from-mhgold/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity rounded-lg"></div>
                    
                    <!-- Ligne corrigée : plus de storage/app/public -->
                    <img src="{{ asset('icons/' . $monster->icon) }}"
                         alt="{{ $monster->name }}"
                         class="w-full rounded-lg border-4 border-mhborder shadow-2xl shadow-black/50
                                group-hover:border-mhgold transition-all duration-300">
                    
                    <div class="absolute bottom-0 left-0 right-0 bg-black/70 px-2 py-1 text-center">
                        <p class="text-xs font-bold text-mhgold tracking-wider">{{ $monster->name }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</body>
</html>