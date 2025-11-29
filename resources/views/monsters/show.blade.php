<!DOCTYPE html>
<html lang="fr" class="bg-mhbg min-h-screen">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $monster->name }} - MH Wilds Bestiaire</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-mhbg min-h-screen">

<div class="min-h-screen py-12">
    <div class="container mx-auto px-4 max-w-7xl">

        <!-- Titre + Image -->
        <h1 class="text-6xl mh-title text-center mb-8">{{ $monster->name }}</h1>
        <div class="flex justify-center mb-10">
            <img src="{{ asset('monsters/'.$monster->image) }}" 
                 class="rounded-lg border-4 border-mhborder shadow-2xl max-w-2xl">
        </div>

        <!-- 2 TABLEAUX CÔTE À CÔTE – 90% DE LA TAILLE -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mb-10">

            <!-- DÉGÂTS PHYSIQUES -->
            <div class="bg-black/70 rounded-lg border-2 border-mhgold p-5 text-sm">
                <h2 class="text-2xl mh-title text-center mb-4">Dégâts physiques</h2>
                <table class="w-full text-left">
                    <thead class="bg-mhgold/20 text-xs">
                        <tr>
                            <th class="px-3 py-2">Partie</th>
                            <th class="px-3 py-2 text-center"><img src="{{ asset('weakness/weapons/cut.png') }}" class="w-7 h-7 mx-auto"></th>
                            <th class="px-3 py-2 text-center"><img src="{{ asset('weakness/weapons/blunt.png') }}" class="w-7 h-7 mx-auto"></th>
                            <th class="px-3 py-2 text-center"><img src="{{ asset('weakness/weapons/ammo.png') }}" class="w-7 h-7 mx-auto"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($monster->parts as $part)
                            <tr class="border-t border-mhborder hover:bg-mhgold/10">
                                <td class="px-3 py-2 font-bold text-mhgold text-xs">{{ $part['name'] }}</td>
                                @foreach(['cut','blunt','ammo'] as $type)
                                    <td class="text-center py-2">
                                        @php $v = $part['physical'][$type] ?? 0 @endphp
                                        @if($v == 4)
                                            <img src="{{ asset('weakness/stars/4stars.png') }}" class="w-9 h-9 mx-auto">
                                        @elseif($v == 3)
                                            <img src="{{ asset('weakness/stars/3stars.png') }}" class="w-9 h-9 mx-auto">
                                        @elseif($v == 2)
                                            <img src="{{ asset('weakness/stars/2stars.png') }}" class="w-9 h-9 mx-auto">
                                        @elseif($v == 1)
                                            <img src="{{ asset('weakness/stars/1stars.png') }}" class="w-9 h-9 mx-auto">
                                        @elseif($v == 0)
                                            <img src="{{ asset('weakness/stars/cross.png') }}" class="w-9 h-9 mx-auto">
                                        @else
                                            <span class="text-red-500 text-2xl">✖</span>
                                        @endif
                                    </td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- ÉLÉMENTS -->
            <div class="bg-black/70 rounded-lg border-2 border-mhgold p-5 text-sm">
                <h2 class="text-2xl mh-title text-center mb-4">Faiblesses élémentaires</h2>
                <table class="w-full text-left">
                    <thead class="bg-mhgold/20 text-xs">
                        <tr>
                            <th class="px-3 py-2">Partie</th>
                            <th class="px-3 py-2 text-center"><img src="{{ asset('weakness/elements/fire.png') }}" class="w-7 h-7 mx-auto"></th>
                            <th class="px-3 py-2 text-center"><img src="{{ asset('weakness/elements/water.png') }}" class="w-7 h-7 mx-auto"></th>
                            <th class="px-3 py-2 text-center"><img src="{{ asset('weakness/elements/thunder.png') }}" class="w-7 h-7 mx-auto"></th>
                            <th class="px-3 py-2 text-center"><img src="{{ asset('weakness/elements/ice.png') }}" class="w-7 h-7 mx-auto"></th>
                            <th class="px-3 py-2 text-center"><img src="{{ asset('weakness/elements/dragon.png') }}" class="w-7 h-7 mx-auto"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($monster->parts as $part)
                            <tr class="border-t border-mhborder hover:bg-mhgold/10">
                                <td class="px-3 py-2 font-bold text-mhgold text-xs">{{ $part['name'] }}</td>
                                @foreach(['fire','water','thunder','ice','dragon'] as $elem)
                                    <td class="text-center py-2">
                                        @php $v = $part['elemental'][$elem] ?? 0 @endphp
                                         @if($v == 4)
                                            <img src="{{ asset('weakness/stars/4stars.png') }}" class="w-9 h-9 mx-auto">
                                        @elseif($v == 3)
                                            <img src="{{ asset('weakness/stars/3stars.png') }}" class="w-9 h-9 mx-auto">
                                        @elseif($v == 2)
                                            <img src="{{ asset('weakness/stars/2stars.png') }}" class="w-9 h-9 mx-auto">
                                        @elseif($v == 1)
                                            <img src="{{ asset('weakness/stars/1stars.png') }}" class="w-9 h-9 mx-auto">
                                        @elseif($v == 0)
                                            <img src="{{ asset('weakness/stars/cross.png') }}" class="w-9 h-9 mx-auto">
                                        @else
                                            <span class="text-red-500 text-2xl">✖</span>
                                        @endif
                                    </td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- AFFLICTIONS -->
        <div class="bg-black/70 rounded-lg border-2 border-mhgold p-6 mb-10 text-center">
            <h2 class="text-2xl mh-title mb-4">Afflictions</h2>
            <div class="grid grid-cols-6 gap-6 justify-items-center">
                @foreach(['poison','sleep','paralysis','blastlight','stun','exhaust'] as $aff)
                    <div>
                        <img src="{{ asset('weakness/afflictions/'.$aff.'.png') }}" class="w-12 h-12 mx-auto mb-2">
                        <div class="flex justify-center gap-1">
                            @php $v = $monster->affliction_weaknesses[$aff] ?? 0 @endphp
                            @if($v >= 3)
                                <img src="{{ asset('weakness/stars/3stars.png') }}" class="w-9 h-9">
                            @elseif($v == 2)
                                <img src="{{ asset('weakness/stars/2stars.png') }}" class="w-9 h-9">
                            @elseif($v == 1)
                                <img src="{{ asset('weakness/stars/1stars.png') }}" class="w-9 h-9">
                            @elseif($v == 0)
                                <img src="{{ asset('weakness/stars/cross.png') }}" class="w-9 h-9">
                            @else
                                <span class="text-red-500 text-3xl">✖</span>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>


<!-- DROPS – VERSION FINALE (tout aligné parfaitement) -->
<div class="bg-black/70 rounded-lg border-2 border-mhgold p-6 text-sm">
    <h2 class="text-3xl mh-title text-center mb-4">Récompenses</h2>
    <div class="overflow-x-auto">
        <table class="w-full table-auto border-collapse">
            <thead class="bg-mhgold/20 text-xs">
                <tr>
                    <th class="px-3 py-2 text-left">Matériau</th>
                    <th class="px-3 py-2 text-center">Target</th>
                    <th class="px-3 py-2 text-center">Break</th>
                    <th class="px-3 py-2 text-center">Carves</th>
                    <th class="px-3 py-2 text-center">Wound</th>
                </tr>
            </thead>
            <tbody>
                @foreach($monster->drops as $drop)
                    <tr class="border-t border-mhborder hover:bg-mhgold/10 h-24">
                        <!-- Matériau -->
                        <td class="px-3 py-2">
                            <div class="flex gap-2 h-full items-center">
                                <img src="{{ asset('lootable/'.$monster->slug.'/'.$drop->item_icon) }}" class="w-8 h-8 flex-shrink-0">
                                <div class="flex flex-col justify-center h-full">
                                    <div class="font-bold text-mhgold text-xs leading-none">{{ $drop->item_name }}</div>
                                    @if(isset($drop->extra))
                                        <div class="text-xs text-gray-400 leading-none mt-1 whitespace-pre-line">{{ $drop->extra }}</div>
                                    @endif
                                </div>
                            </div>
                        </td>

                        <!-- Colonnes % – alignement parfait -->
                        <td class="px-3 py-2 text-center text-mhgold font-bold align-middle">
                            {!! is_numeric($drop->target) ? $drop->target.'%' : ($drop->target ?? '-') !!}
                        </td>

                        <td class="px-3 py-2 text-center text-mhgold font-bold align-middle">
                            {!! is_numeric($drop->break) ? $drop->break.'%' : ($drop->break ?? '-') !!}
                        </td>

                        <td class="px-3 py-2 text-center text-mhgold font-bold align-middle">
                            {!! is_numeric($drop->carve) ? $drop->carve.'%' : ($drop->carve ?? '-') !!}
                        </td>

                        <td class="px-3 py-2 text-center text-mhgold font-bold align-middle">
                            {!! is_numeric($drop->wound) ? $drop->wound.'%' : ($drop->wound ?? '-') !!}
                        </td>

                        </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</div>
    </div>
</div>
</body>
</html>