<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Monster;
use App\Models\MonsterDrop;
use App\Models\MonsterPart;

class MonsterHunterWildsSeeder extends Seeder
{
    public function run()
    {
        $monsters = [
            [
                'name' => 'Ajarakan',
                'slug' => 'ajarakan',
                'icon' => 'ajarakan_icons.png',
                'image' => 'ajarakan_full.jpg',

                'parts' => [
                    [
                        'name' => 'Head',
                        'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
                        'elemental' => ['fire' => 0, 'water' => 2, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
                    ],
                    [
                        'name' => 'Left Foreleg',
                        'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
                        'elemental' => ['fire' => 0, 'water' => 2, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
                    ],
                    [
                        'name' => 'Right Foreleg',
                        'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
                        'elemental' => ['fire' => 0, 'water' => 2, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
                    ],
                    [
                        'name' => 'Belly',
                        'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
                        'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
                    ],
                    [
                        'name' => 'Back',
                        'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
                        'elemental' => ['fire' => 0, 'water' => 2, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
                    ],
                    [
                        'name' => 'Left Hind Leg',
                        'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
                        'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
                    ],
                    [
                        'name' => 'Right Hind Leg',
                        'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
                        'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
                    ],
                    [
                        'name' => 'Tail',
                        'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
                        'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
                    ],
                    [
                        'name' => 'Tail Tip',
                        'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
                        'elemental' => ['fire' => 0, 'water' => 2, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
                    ],
                ],
                
            
    // LOOT 
    'drops' => [
    ['item' => 'Ajarakan Scale +',      'icon' => 'scale.png',      'target' => 22, 'break' => null,        'carve' => 30, 'wound' => 45],
    ['item' => 'Ajarakan Ridge +',      'icon' => 'head.png',       'target' => 11, 'break' => '100% (Back)', 'carve' => 13, 'wound' => null],
    ['item' => 'Ajarakan Tail', 'icon' => 'tail.png', 'target' => 11, 'break' => null, 'carve' => "11%<br />93% (Tail)", 'wound' => null],
    ['item' => 'Ajarakan Carapace',     'icon' => 'carapace.png',   'target' => 22, 'break' => null,        'carve' => 23, 'wound' => 43],
    ['item' => 'Ajarakan Jewel +',      'icon' => 'jewel.png',      'target' => 16, 'break' => null,        'carve' => 18, 'wound' => 12],
    ['item' => 'Ajarakan Certificate S','icon' => 'certificate.png', 'target' => 8,  'break' => null,        'carve' => null, 'wound' => null],
    ['item' => 'Ajarakan Marrow',       'icon' => 'head.png',       'target' => 7,  'break' => null,        'carve' => null, 'wound' => null],
    ['item' => 'Ajarakan Medulla', 'icon' => 'head.png', 'target' => 3, 'break' => null, 'carve' => "5%<br />7% (Tail)", 'wound' => null],
],

    // AFFLICTIONS (comme sur ta capture)
    'affliction_weaknesses' => [
        'poison'    => 2,
        'sleep'     => 2,
        'paralysis' => 2,
        'blastlight'     => 2,
        'stun'      => 2,
        'exhaust'   => 2,
    ],

],
        
    
 [
    'name' => 'Arkveld',
    'slug' => 'arkveld',
    'icon' => 'arkveld_icons.png',
    'image' => 'arkveld_full.jpg',

    'parts' => [
        [
            'name' => 'Head',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Torso',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Left Wing',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Right Wing',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Left Chainblade',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 0, 'water' => 0, 'thunder' => 0, 'ice' => 0, 'dragon' => 0],
        ],
        [
            'name' => 'Right Chainblade',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 0, 'water' => 0, 'thunder' => 0, 'ice' => 0, 'dragon' => 0],
        ],
        [
            'name' => 'Left Leg',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Right Leg',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Tail',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
    ],

    'drops' => [
        ['item' => 'Arkveld Calloushell', 'icon' => 'wings.png', 'target' => null, 'break' => "100% (Left Chainblade/Right Chainblade)", 'carve' => null, 'wound' => null],
        ['item' => 'Arkveld Scale+',      'icon' => 'scale.png',        'target' => 20, 'break' => null, 'carve' => 30, 'wound' => 45],
        ['item' => 'Arkveld Horn+',        'icon' => 'claws.png',         'target' => 8,  'break' => '100% (Head)', 'carve' => 13, 'wound' => null],
        ['item' => 'Arkveld Tail',        'icon' => 'tail.png',         'target' => 8, 'break' => null, 'carve' => "11%<br />93% (Tail)", 'wound' => null],
        ['item' => 'Arkveld Armorplate',    'icon' => 'carapace.png',     'target' => 20, 'break' => null, 'carve' => 23, 'wound' => 43],
        ['item' => 'White Arkveld Pelt',     'icon' => 'skin.png',        'target' => 15, 'break' => null, 'carve' => 18, 'wound' => 12],
        ['item' => 'Monster Hardbone',      'icon' => 'bones.png',       'target' => 18,  'break' => null, 'carve' => null, 'wound' => null],
        ['item' => 'Arkveld Certificate S','icon' => 'certificate.png',  'target' => 8,  'break' => null, 'carve' => null, 'wound' => null],
        ['item' => 'Arkveld gem',      'icon' => 'gem.png',       'target' => 3,  'break' => null, 'carve' => "3%<br />7% (Tail)", 'wound' => null],
        ],

    'affliction_weaknesses' => [
        'poison'    => 2,
        'sleep'     => 2,
        'paralysis' => 2,
        'blastlight'     => 2,
        'stun'      => 2,
        'exhaust'   => 2,
    ],

],


   [
    'name' => 'Balahara',
    'slug' => 'balahara',
    'icon' => 'balahara_icons.png',
    'image' => 'balahara_full.jpg',

    'parts' => [
        [
            'name' => 'Head',
            'physical' => ['cut' => 3, 'blunt' => 4, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 2, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Neck',
            'physical' => ['cut' => 3, 'blunt' => 4, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 2, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Torso',
            'physical' => ['cut' => 2, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Left Foreleg',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Right Foreleg',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Left Hind Leg',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Right Hind Leg',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Tail',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
    ],

    'drops' => [
        ['item' => 'Balahara Scale+', 'icon' => 'scale.png', 'target' => 20, 'break' => null, 'carve' => 30, 'wound' => 45],
        ['item' => 'Balahara Shell', 'icon' => 'carapace.png', 'target' => 20, 'break' => null, 'carve' => 23, 'wound' => 47],
        ['item' => 'Balahara Skull+', 'icon' => 'skull.png', 'target' => 13, 'break' => '80% (Head)', 'carve' => 17, 'wound' => null],
        ['item' => 'Balahara Tail', 'icon' => 'tail.png', 'target' => 7, 'break' => null, 'carve' => "11%<br />93% (Tail)", 'wound' => null],
        ['item' => 'Torrent Sac', 'icon' => 'sac.png', 'target' => 18, 'break' => null, 'carve' => null, 'wound' => null],
        ['item' => 'Balahara Certificate S', 'icon' => 'certificate.png', 'target' => 8, 'break' => null, 'carve' => null, 'wound' => null],
        ['item' => 'Balahara Black Pearl', 'icon' => 'scale.png', 'target' => 11, 'break' => '20% (Head)', 'carve' => 14, 'wound' => 5],
        ['item' => 'Wyvern Gem', 'icon' => 'gem.png', 'target' => 3, 'break' => null, 'carve' => "35%<br />7% (Tail)", 'wound' => null],
    ],
'affliction_weaknesses' => [
        'poison'    => 2,
        'sleep'     => 2,
        'paralysis' => 3,
        'blastlight'     => 2,
        'stun'      => 2,
        'exhaust'   => 3,
    ],


],




[
    'name' => 'Blangonga',
    'slug' => 'blangonga',
    'icon' => 'blangonga_icons.png',
    'image' => 'blangonga_full.jpg',

    'parts' => [
        [
            'name' => 'Head',
            'physical' => ['cut' => 4, 'blunt' => 4, 'ammo' => 4],
            'elemental' => ['fire' => 2, 'water' => 1, 'thunder' => 1, 'ice' => 0, 'dragon' => 0],
        ],
        [
            'name' => 'Torso',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 2, 'water' => 1, 'thunder' => 1, 'ice' => 0, 'dragon' => 0],
        ],
        [
            'name' => 'Left Foreleg',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 0, 'dragon' => 0],
        ],
        [
            'name' => 'Right Foreleg',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 0, 'dragon' => 0],
        ],
        [
            'name' => 'Left Hind Leg',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 0, 'dragon' => 0],
        ],
        [
            'name' => 'Right Hind Leg',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 0, 'dragon' => 0],
        ],
        [
            'name' => 'Tail',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 0, 'dragon' => 0],
        ],
    ],

    'affliction_weaknesses' => [
        'poison' => 2,
        'sleep' => 2,
        'paralysis' => 2,
        'blastlight' => 2,
        'stun' => 2,
        'exhaust' => 2,
    ],

    'drops' => [
        ['item' => 'Blangonga Fang+', 'icon' => 'claws.png', 'target' => 20, 'break' => '100% (Head)', 'carve' => 20, 'wound' => null],
        ['item' => 'Blangonga Pelt+', 'icon' => 'skin.png', 'target' => 27, 'break' => null, 'carve' => 33, 'wound' => 100],
        ['item' => 'Blangonga Tail', 'icon' => 'tail.png', 'target' => 15, 'break' => '100% (Tail)', 'carve' => 15, 'wound' => null],
        ['item' => 'Blangonga Whisker', 'icon' => 'head.png', 'target' => 27, 'break' => null, 'carve' => 27, 'wound' => null],
        ['item' => 'Blangonga Certificate S', 'icon' => 'certificate.png', 'target' => 8, 'break' => null, 'carve' => null, 'wound' => null],
        ['item' => 'Beast Gem', 'icon' => 'gem.png', 'target' => 3, 'break' => null, 'carve' => 5, 'wound' => null],
        ],
    ],


[
    'name' => 'Chatacabra',
    'slug' => 'chatacabra',
    'icon' => 'chatacabra_icons.png',
    'image' => 'chatacabra_full.jpg',

    'parts' => [
        [
            'name' => 'Head',
            'physical' => ['cut' => 4, 'blunt' => 4, 'ammo' => 4],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 2, 'ice' => 1, 'dragon' => 0],
        ],
        [
            'name' => 'Tongue',
            'physical' => ['cut' => 4, 'blunt' => 4, 'ammo' => 4],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 2, 'ice' => 1, 'dragon' => 0],
        ],
        [
            'name' => 'Torso',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 2, 'ice' => 1, 'dragon' => 0],
        ],
        [
            'name' => 'Left Foreleg',
            'physical' => ['cut' => 4, 'blunt' => 4, 'ammo' => 4],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 0],
        ],
        [
            'name' => 'Right Foreleg',
            'physical' => ['cut' => 4, 'blunt' => 4, 'ammo' => 4],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 0],
        ],
        [
            'name' => 'Left Hind Leg',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 0, 'water' => 0, 'thunder' => 2, 'ice' => 1, 'dragon' => 0],
        ],
        [
            'name' => 'Right Hind Leg',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 0, 'water' => 0, 'thunder' => 2, 'ice' => 1, 'dragon' => 0],
        ],
        [
            'name' => 'Rear',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 2, 'ice' => 1, 'dragon' => 0],
        ],
    ],

    'affliction_weaknesses' => [
        'poison' => 3,
        'sleep' => 2,
        'paralysis' => 3,
        'blastlight' => 2,
        'stun' => 3,
        'exhaust' => 2,
    ],

    'drops' => [
        ['item' => 'Chatacabra carapace', 'icon' => 'carapace.png', 'target' => 15, 'break' => "100% (Left Foreleg)<br />100% (Right Foreleg)", 'carve' => 15, 'wound' => null],
        ['item' => 'Chatacabra Scale+', 'icon' => 'scale.png', 'target' => 27, 'break' => null, 'carve' => 35, 'wound' => 50],
        ['item' => 'Chatacabra Hide', 'icon' => 'skin.png', 'target' => 23, 'break' => null, 'carve' => 30, 'wound' => 50],
        ['item' => 'Chatacabra Jaw+', 'icon' => 'skull.png', 'target' => 23, 'break' => null, 'carve' => 20, 'wound' => null],
        ['item' => 'Chatacabra Certificate S', 'icon' => 'certificate.png', 'target' => 8, 'break' => null, 'carve' => null, 'wound' => null],
        ],
    ],


[
    'name' => 'Congalala',
    'slug' => 'congalala',
    'icon' => 'congalala_icons.png',
    'image' => 'congalala_full.jpg',

    'parts' => [
        [
            'name' => 'Head',
            'physical' => ['cut' => 4, 'blunt' => 4, 'ammo' => 4],
            'elemental' => ['fire' => 2, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Torso',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Left Foreleg',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Right Foreleg',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Left Hind Leg',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Right Hind Leg',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Tail',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
    ],

    'affliction_weaknesses' => [
        'poison' => 2,
        'sleep' => 2,
        'paralysis' => 2,
        'blastlight' => 2,
        'stun' => 2,
        'exhaust' => 2,
    ],

    'drops' => [
        ['item' => 'Congalala Pelt+', 'icon' => 'skin.png', 'target' => 27, 'break' => '100% (Tail)', 'carve' => 33, 'wound' => 100],
        ['item' => 'Congalala Claw+', 'icon' => 'claws.png', 'target' => 20, 'break' => "100% (Left Foreleg)<br />100% (Right Foreleg)", 'carve' => 20, 'wound' => 100],
        ['item' => 'Vibrant Pelt+', 'icon' => 'pelt.png', 'target' => 15, 'break' => '100% (Head)', 'carve' => 15, 'wound' => null],
        ['item' => 'Congalala Fang+', 'icon' => 'claws.png', 'target' => 27, 'break' => null, 'carve' => 27, 'wound' => null],
        ['item' => 'Congalala Certificate S', 'icon' => 'certificate.png', 'target' => 8, 'break' => null, 'carve' => null, 'wound' => null],
        ['item' => 'Beast Gem', 'icon' => 'gem.png', 'target' => 3, 'break' => null, 'carve' => 5, 'wound' => null],
        ],
    ],


    [
    'name' => 'Doshaguma',
    'slug' => 'doshaguma',
    'icon' => 'doshaguma_icons.png',
    'image' => 'doshaguma_full.jpg',

    'parts' => [
        [
            'name' => 'Head',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 2, 'water' => 1, 'thunder' => 2, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Torso',
            'physical' => ['cut' => 2, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 2, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Left Foreleg',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Right Foreleg',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Left Hind Leg',
            'physical' => ['cut' => 3, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Right Hind Leg',
            'physical' => ['cut' => 3, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Tail Hair',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
    ],

    'affliction_weaknesses' => [
        'poison' => 2,
        'sleep' => 2,
        'paralysis' => 2,
        'blastlight' => 2,
        'stun' => 2,
        'exhaust' => 2,
    ],

    'drops' => [
        ['item' => 'Doshaguma Fur+', 'icon' => 'skin.png', 'target' => 27, 'break' => '100% (Tail Hair)', 'carve' => 27, 'wound' => 50],
        ['item' => 'Doshaguma Claw+', 'icon' => 'claws.png', 'target' => 15, 'break' => "100% (Left Foreleg)<br />100% (Right Foreleg)", 'carve' => 15, 'wound' => null],
        ['item' => 'Doshaguma Hide+', 'icon' => 'skin.png', 'target' => 27, 'break' => null, 'carve' => 33, 'wound' => 50],
        ['item' => 'Doshaguma Fang+', 'icon' => 'claws.png', 'target' => 20, 'break' => null, 'carve' => 20, 'wound' => null],
        ['item' => 'Doshaguma Certificate S', 'icon' => 'certificate.png', 'target' => 8, 'break' => null, 'carve' => null, 'wound' => null],
        ['item' => 'Beast Gem', 'icon' => 'gem.png', 'target' => 3, 'break' => null, 'carve' => 5, 'wound' => null],
        ],
    ],


    [
    'name' => 'Gore Magala',
    'slug' => 'gore-magala',
    'icon' => 'gore-magala_icons.png',
    'image' => 'gore_magala_full.jpg',

    'parts' => [
        [
            'name' => 'Head',
            'physical' => ['cut' => 4, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Antenna',
            'physical' => ['cut' => 4, 'blunt' => 4, 'ammo' => 3],
            'elemental' => ['fire' => 2, 'water' => 0, 'thunder' => 1, 'ice' => 1, 'dragon' => 2],
        ],
        [
            'name' => 'Neck',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Torso',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Left Foreleg',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Right Foreleg',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Left Wing',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 1],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Right Wing',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 1],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Left Wingarm',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 2, 'water' => 0, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Right Wingarm',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 2, 'water' => 0, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Left Hind Leg',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Right Hind Leg',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Tail',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
    ],

    'affliction_weaknesses' => [
        'poison' => 1,
        'sleep' => 1,
        'paralysis' => 1,
        'blastlight' => 2,
        'stun' => 1,
        'exhaust' => 2,
    ],

    'drops' => [
        ['item' => 'Gore Magala Wing+', 'icon' => 'wings.png', 'target' => 13, 'break' => "100% (Left Foreleg)<br />100% (Right Foreleg)", 'carve' => 13, 'wound' => null],
        ['item' => 'Gore Magala Feeler+', 'icon' => 'claws.png', 'target' => null, 'break' => '100% (Antenna)', 'carve' => 11, 'wound' => null],
        ['item' => 'Gore Magala Tail', 'icon' => 'tail.png', 'target' => 15, 'break' => null, 'carve' => "11%<br />93% (Tail)", 'wound' => null],
        ['item' => 'Gore Magala Scale+', 'icon' => 'scale.png', 'target' => 22, 'break' => null, 'carve' => 24, 'wound' => 38],
        ['item' => 'Gore Magala Carapace', 'icon' => 'carapace.png', 'target' => 22, 'break' => null, 'carve' => 21, 'wound' => 38],
        ['item' => 'Gore Magala Ripclaw+', 'icon' => 'claws.png', 'target' => 21, 'break' => null, 'carve' => 16, 'wound' => null],
        ['item' => 'Frenzy Crystal', 'icon' => 'crystal.png', 'target' => null, 'break' => null, 'carve' => null, 'wound' => 24],
        ['item' => 'Gore Magala Certificate S', 'icon' => 'certificate.png', 'target' => 8, 'break' => null, 'carve' => null, 'wound' => null],
        ['item' => 'Beast Gem', 'icon' => 'gem.png', 'target' => 3, 'break' => null, 'carve' => 5, 'wound' => null],
        ],
    ],

   [
    'name' => 'Gravios',
    'slug' => 'gravios',
    'icon' => 'gravios_icons.png',
    'image' => 'gravios_full.jpg',

    'parts' => [
        [
            'name' => 'Head',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 3],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 2],
        ],
        [
            'name' => 'Neck',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 0, 'water' => 2, 'thunder' => 1, 'ice' => 1, 'dragon' => 2],
        ],
        [
            'name' => 'Belly',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 0, 'water' => 2, 'thunder' => 1, 'ice' => 1, 'dragon' => 2],
        ],
        [
            'name' => 'Back',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 0, 'water' => 2, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Left Wing',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 0, 'water' => 2, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Right Wing',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Left Leg',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Right Leg',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Tail',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
    ],

    'affliction_weaknesses' => [
        'poison' => 2,
        'sleep' => 2,
        'paralysis' => 2,
        'blastlight' => 2,
        'stun' => 2,
        'exhaust' => 2,
    ],

    'drops' => [
        ['item' => 'Gravios Wing', 'icon' => 'wings.png', 'target' => 20, 'break' => "100% (Left Foreleg)<br />100% (Right Foreleg)", 'carve' => 23, 'wound' => null],
        ['item' => 'Gravios Carapace', 'icon' => 'carapace.png', 'target' => 20, 'break' => "60% (Back)<br />60% (Left Leg)<br />60% (Right Leg)", 'carve' => "30%<br />78% (Tail)", 'wound' => 80],
        ['item' => 'Gravios Skull', 'icon' => 'skull.png', 'target' => null, 'break' => '100% (Head)', 'carve' => 13, 'wound' => null],
        ['item' => 'Gravios Pleura+', 'icon' => 'carapace.png', 'target' => 15, 'break' => '100% (Belly)', 'carve' => 18, 'wound' => null],
        ['item' => 'Firecell Stone', 'icon' => 'stone.png', 'target' => null, 'break' => "40% (Back)<br />40% (Left Leg)<br />40% (Right Leg)", 'carve' => null, 'wound' => 20],
        ['item' => 'Gravios Certificate S', 'icon' => 'certificate.png', 'target' => 8, 'break' => null, 'carve' => null, 'wound' => null],
        ['item' => 'Gravios Medulla', 'icon' => 'head.png', 'target' => 8, 'break' => null, 'carve' => "11%<br />22% (Tail)", 'wound' => null],
        ['item' => 'Inferno Sac', 'icon' => 'poche.png', 'target' => 13, 'break' => null, 'carve' => null, 'wound' => null],
        ['item' => 'Coma Sac', 'icon' => 'sac.png', 'target' => 13, 'break' => null, 'carve' => null, 'wound' => null],
        ['item' => 'Wyvern Gem', 'icon' => 'gem.png', 'target' => 3, 'break' => null, 'carve' => 5, 'wound' => null],
        ],
    ],


   [
    'name' => 'Guardian Arkveld',
    'slug' => 'guardian-arkveld',
    'icon' => 'guardian-arkveld_icons.png',
    'image' => 'guardian_arkveld_full.jpg',

    'parts' => [
        [
            'name' => 'Head',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Torso',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Left Wing',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Right Wing',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Left Chainblade',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 0, 'water' => 0, 'thunder' => 0, 'ice' => 0, 'dragon' => 0],
        ],
        [
            'name' => 'Right Chainblade',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 0, 'water' => 0, 'thunder' => 0, 'ice' => 0, 'dragon' => 0],
        ],
        [
            'name' => 'Left Leg',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Right Leg',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Tail',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
    ],

    'drops' => [
        ['item' => 'Guardian Scale',      'icon' => 'scale.png',        'target' => 20, 'break' => 100, 'carve' => 50, 'wound' => 45],        
        ['item' => 'Guardian Pelt',     'icon' => 'skin.png',        'target' => 20, 'break' => "100% (Left Chainblade)<br />100% (Right Chainblade)", 'carve' => 30, 'wound' => 43],
        ['item' => 'Guardian Blood',        'icon' => 'blood.png',         'target' => 10,  'break' => null, 'carve' => "20%<br />100% (Tail)", 'wound' => 12],
        ['item' => 'Guardian Blood',        'icon' => 'blood.png',         'target' => 30,  'break' => null, 'carve' => null, 'wound' => null],
        ['item' => 'Tough Guardian Bone',      'icon' => 'bones.png',       'target' => 20,  'break' => null, 'carve' => null, 'wound' => null],
        ],

    'affliction_weaknesses' => [
        'poison'    => 2,
        'sleep'     => 2,
        'paralysis' => 2,
        'blastlight'     => 2,
        'stun'      => 2,
        'exhaust'   => 0,
    ],

],

    [
    'name' => 'Guardian Doshaguma',
    'slug' => 'guardian-doshaguma',
    'icon' => 'guardian-doshaguma_icons.png',
    'image' => 'guardian_doshaguma_full.jpg',

    'parts' => [
        [
            'name' => 'Head',
            'physical' => ['cut' => 3, 'blunt' => 4, 'ammo' => 3],
            'elemental' => ['fire' => 2, 'water' => 1, 'thunder' => 2, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Torso',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 2, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Left Foreleg',
            'physical' => ['cut' => 4, 'blunt' => 4, 'ammo' => 4],
            'elemental' => ['fire' => 2, 'water' => 1, 'thunder' => 1, 'ice' => 2, 'dragon' => 2],
        ],
        [
            'name' => 'Right Foreleg',
            'physical' => ['cut' => 4, 'blunt' => 4, 'ammo' => 4],
            'elemental' => ['fire' => 2, 'water' => 1, 'thunder' => 1, 'ice' => 2, 'dragon' => 2],
        ],
        [
            'name' => 'Left Hind Leg',
            'physical' => ['cut' => 3, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 2, 'dragon' => 1],
        ],
        [
            'name' => 'Right Hind Leg',
            'physical' => ['cut' => 3, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 2, 'dragon' => 1],
        ],
        [
            'name' => 'Tail Hair',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 2, 'dragon' => 1],
        ],
    ],

    'affliction_weaknesses' => [
        'poison' => 2,
        'sleep' => 2,
        'paralysis' => 2,
        'blastlight' => 2,
        'stun' => 2,
        'exhaust' => 0,
    ],

    'drops' => [
        ['item' => 'Guardian Doshaguma Fur+', 'icon' => 'skin.png', 'target' => 22, 'break' => '100% (Tail Hair)', 'carve' => 27, 'wound' => 35],
        ['item' => 'Guardian Doshaguma Claw+', 'icon' => 'claws.png', 'target' => 10, 'break' => "100% (Left Foreleg)<br />100% (Right Foreleg)", 'carve' => 15, 'wound' => null],
        ['item' => 'Guardian Doshaguma Hide+', 'icon' => 'skin.png', 'target' => 22, 'break' => null, 'carve' => 22, 'wound' => 45],
        ['item' => 'Guardian Doshaguma Fang+', 'icon' => 'claws.png', 'target' => 15, 'break' => null, 'carve' => 20, 'wound' => null],
        ['item' => 'Nourishing Extract', 'icon' => 'blood.png', 'target' => 20, 'break' => null, 'carve' => null, 'wound' => null],
        ['item' => 'G. Doshaguma Certificate S', 'icon' => 'certificate.png', 'target' => 8, 'break' => null, 'carve' => null, 'wound' => null],
        ['item' => 'Beast Gem', 'icon' => 'gem.png', 'target' => 3, 'break' => null, 'carve' => 5, 'wound' => null],       
        ['item' => 'Guardian Pelt+', 'icon' => 'skin.png', 'target' => null, 'break' => null, 'carve' => null, 'wound' => 12],
        ['item' => 'Guardian Blood+', 'icon' => 'blood.png', 'target' => null, 'break' => null, 'carve' => null, 'wound' => 8],
        ],
    ],
    
    
     [
    'name' => 'Guardian Ebony Odogaron',
    'slug' => 'guardian-ebony-odogaron',
    'icon' => 'guardian-ebony-odogaron_icons.png',
    'image' => 'guardian_ebony_odogaron_full.jpg',

    'parts' => [
        [
            'name' => 'Head',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 2, 'water' => 3, 'thunder' => 2, 'ice' => 2, 'dragon' => 1],
        ],
        [
            'name' => 'Neck',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 2, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Torso',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 2, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Left Foreleg',
            'physical' => ['cut' => 2, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 2, 'water' => 2, 'thunder' => 2, 'ice' => 2, 'dragon' => 2],
        ],
        [
            'name' => 'Right Foreleg',
            'physical' => ['cut' => 2, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 2, 'water' => 2, 'thunder' => 2, 'ice' => 2, 'dragon' => 2],
        ],
        [
            'name' => 'Back',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 2, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Left Hind Leg',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 2, 'water' => 2, 'thunder' => 2, 'ice' => 2, 'dragon' => 1],
        ],
        [
            'name' => 'Right Hind Leg',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 2, 'water' => 2, 'thunder' => 2, 'ice' => 2, 'dragon' => 1],
        ],
        [
            'name' => 'Tail',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 2, 'water' => 2, 'thunder' => 2, 'ice' => 2, 'dragon' => 2],
        ],
        [
            'name' => 'Tail Tip',
            'physical' => ['cut' => 3, 'blunt' => 2, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 2, 'thunder' => 1, 'ice' => 1, 'dragon' => 2],
        ],
    ],

    'affliction_weaknesses' => [
        'poison' => 2,
        'sleep' => 2,
        'paralysis' => 2,
        'blastlight' => 2,
        'stun' => 2,
        'exhaust' => 0,
    ],

    'drops' => [
        ['item' => 'Guardian Ebony Claw+', 'icon' => 'claws.png', 'target' => 10, 'break' => "100% (Left Foreleg)<br />100% (Right Foreleg)", 'carve' => 15, 'wound' => null],    
        ['item' => 'Guardian Doshaguma Fang+', 'icon' => 'claws.png', 'target' => 8, 'break' => "100% (Head)<br />100% (Head)", 'carve' => 13, 'wound' => null],  
        ['item' => 'Guardian Ebony Scale+', 'icon' => 'scale.png', 'target' => 18, 'break' => null, 'carve' => 30, 'wound' => 45],
        ['item' => 'Guardian Ebony Sinew+', 'icon' => 'head.png', 'target' => 18, 'break' => '100% (Tail)', 'carve' => 23, 'wound' => 35],
        ['item' => 'Guardian Ebony Tail', 'icon' => 'tail.png', 'target' => 8, 'break' => '93% (Tail)', 'carve' => 11, 'wound' => null],
        ['item' => 'Nourishing Extract', 'icon' => 'blood.png', 'target' => 16, 'break' => null, 'carve' => null, 'wound' => null],
        ['item' => 'G. Ebony Odogaron Certificate S', 'icon' => 'certificate.png', 'target' => 8, 'break' => null, 'carve' => null, 'wound' => null],
        ['item' => 'Guardian Ebony plate', 'icon' => 'certificate.png', 'target' => 7, 'break' => null, 'carve' => null, 'wound' => null],
        ['item' => 'Guardian Ebony Gem', 'icon' => 'gem.png', 'target' => 3, 'break' => null, 'carve' => "5%<br />7% (Tail)", 'wound' => null],       
        ['item' => 'Guardian Scale+', 'icon' => 'scale.png', 'target' => null, 'break' => null, 'carve' => null, 'wound' => 12],
        ['item' => 'Guardian Blood+', 'icon' => 'blood.png', 'target' => null, 'break' => null, 'carve' => null, 'wound' => 8],
        ],
    ],
    
        [
    'name' => 'Guardian Fulgur Anjanath',
    'slug' => 'guardian-fulgur-anjanath',
    'icon' => 'guardian-fulgur-anjanath_icons.png',
    'image' => 'guardian_fulgur_anjanath_full.jpg',

    'parts' => [
        [
            'name' => 'Head',
            'physical' => ['cut' => 4, 'blunt' => 4, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 2, 'thunder' => 0, 'ice' => 2, 'dragon' => 2],
        ],
        [
            'name' => 'Nose',
            'physical' => ['cut' => 4, 'blunt' => 4, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 2, 'thunder' => 0, 'ice' => 2, 'dragon' => 2],
        ],
        [
            'name' => 'Neck',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 1],
            'elemental' => ['fire' => 1, 'water' => 2, 'thunder' => 0, 'ice' => 2, 'dragon' => 1],
        ],
        [
            'name' => 'Torso',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 0, 'ice' => 2, 'dragon' => 0],
        ],
        [
            'name' => 'Left Wing',
            'physical' => ['cut' => 4, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 2, 'thunder' => 0, 'ice' => 2, 'dragon' => 1],
        ],
        [
            'name' => 'Right Wing',
            'physical' => ['cut' => 4, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 2, 'thunder' => 0, 'ice' => 2, 'dragon' => 1],
        ],
        [
            'name' => 'Left Leg',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 1],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 0, 'ice' => 2, 'dragon' => 0],
        ],
        [
            'name' => 'Right Leg',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 1],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 0, 'ice' => 2, 'dragon' => 0],
        ],
        [
            'name' => 'Tail',
            'physical' => ['cut' => 4, 'blunt' => 4, 'ammo' => 4],
            'elemental' => ['fire' => 1, 'water' => 2, 'thunder' => 0, 'ice' => 2, 'dragon' => 1],
        ],
    ],

    'affliction_weaknesses' => [
        'poison' => 1,
        'sleep' => 2,
        'paralysis' => 2,
        'blastlight' => 2,
        'stun' => 2,
        'exhaust' => 0,
    ],

    'drops' => [
        ['item' => 'Guardian Fulgur Scale+', 'icon' => 'scale.png', 'target' => 20, 'break' => "100% (Left Leg)<br />100% (Right Leg)", 'carve' => 30, 'wound' => 45],    
        ['item' => 'Guardian Fulgur Nosebone+', 'icon' => 'bones.png', 'target' => 8, 'break' => '70% (Head)', 'carve' => 13, 'wound' => null],  
        ['item' => 'Guardian Fulgur Tail', 'icon' => 'tail.png', 'target' => 8, 'break' => null, 'carve' => "11%<br />93% (Tail)", 'wound' => null],
        ['item' => 'Guardian Fulgur Pelt+', 'icon' => 'skin.png', 'target' => 20, 'break' => null, 'carve' => 23, 'wound' => 35],
        ['item' => 'Guardian Fulgur Fang+', 'icon' => 'claws.png', 'target' => 15, 'break' => '2x 30% (Head)', 'carve' => 18, 'wound' => null],
        ['item' => 'Thunder Sac', 'icon' => 'sac.png', 'target' => 18, 'break' => null, 'carve' => null, 'wound' => null],
        ['item' => 'G. Ebony Odogaron Certificate S', 'icon' => 'certificate.png', 'target' => 8, 'break' => null, 'carve' => null, 'wound' => null],
        ['item' => 'Guardian Fulgur Gem', 'icon' => 'gem.png', 'target' => 3, 'break' => null, 'carve' => "5%<br />7% (Severed Tail)", 'wound' => null],       
        ['item' => 'Guardian Pelt+', 'icon' => 'skin.png', 'target' => null, 'break' => null, 'carve' => null, 'wound' => 12],
        ['item' => 'Guardian Blood+', 'icon' => 'blood.png', 'target' => null, 'break' => null, 'carve' => null, 'wound' => 8],
        ],
    ],


        [
    'name' => 'Guardian Rathalos',
    'slug' => 'guardian-rathalos',
    'icon' => 'guardian-rathalos_icons.png',
    'image' => 'guardian_rathalos_full.jpg',

    'parts' => [
        [
            'name' => 'Head',
            'physical' => ['cut' => 4, 'blunt' => 4, 'ammo' => 3],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 2],
        ],
        [
            'name' => 'Neck',
            'physical' => ['cut' => 2, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 2],
        ],
        [
            'name' => 'Torso',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 2],
        ],
        [
            'name' => 'Left Wing',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 2],
        ],
        [
            'name' => 'Right Wing',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 2],
        ],
        [
            'name' => 'Left Leg',
            'physical' => ['cut' => 4, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 2, 'ice' => 1, 'dragon' => 2],
        ],
        [
            'name' => 'Right Leg',
            'physical' => ['cut' => 4, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 2, 'ice' => 1, 'dragon' => 2],
        ],
        [
            'name' => 'Tail',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 0, 'water' => 0, 'thunder' => 1, 'ice' => 0, 'dragon' => 1],
        ],
    ],

    'affliction_weaknesses' => [
        'poison' => 2,
        'sleep' => 2,
        'paralysis' => 2,
        'blastlight' => 2,
        'stun' => 2,
        'exhaust' => 0,
    ],

    'drops' => [
        ['item' => 'Guardian Rathalos Wing', 'icon' => 'wing.png', 'target' => 15, 'break' => "100% (Left Wing)<br />100% (Right Wing)", 'carve' => 24, 'wound' => null],    
        ['item' => 'Guardian Rathalos Scale+', 'icon' => 'scale.png', 'target' => 20, 'break' => null, 'carve' => 33, 'wound' => 45],  
        ['item' => 'Guardian Rathalos Tail', 'icon' => 'tail.png', 'target' => 10, 'break' => null, 'carve' => "11%<br />93% (Tail)", 'wound' => null],        
        ['item' => 'Guardian Rathalos Carapace', 'icon' => 'carapace.png', 'target' => 20, 'break' => null, 'carve' => 27, 'wound' => 35],
        ['item' => 'Inferno Sac', 'icon' => 'sac.png', 'target' => 17, 'break' => null, 'carve' => null, 'wound' => null],     
        ['item' => 'Guardian Rathalos Certificate S', 'icon' => 'certificate.png', 'target' => 8, 'break' => null, 'carve' => null, 'wound' => null],
        ['item' => 'Guardian Rathalos Plate', 'icon' => 'plate.png', 'target' => 7, 'break' => null, 'carve' => null, 'wound' => null],       
        ['item' => 'Guardian Rathalos Ruby', 'icon' => 'gem.png', 'target' => 3, 'break' => null, 'carve' => "5%<br />7% (Tail)", 'wound' => null],       
        ['item' => 'Guardian Scale+', 'icon' => 'scale.png', 'target' => null, 'break' => null, 'carve' => null, 'wound' => 12],
        ['item' => 'Guardian Blood+', 'icon' => 'blood.png', 'target' => null, 'break' => null, 'carve' => null, 'wound' => 8],
        ],
    ],


    [
    'name' => 'Gypceros',
    'slug' => 'gypceros',
    'icon' => 'gypceros_icons.png',
    'image' => 'gypceros_full.jpg',

    'parts' => [
        [
            'name' => 'Head',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 2, 'water' => 1, 'thunder' => 0, 'ice' => 2, 'dragon' => 1],
        ],
        [
            'name' => 'Neck',
            'physical' => ['cut' => 3, 'blunt' => 2, 'ammo' => 3],
            'elemental' => ['fire' => 2, 'water' => 1, 'thunder' => 0, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Torso',
            'physical' => ['cut' => 3, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 2, 'water' => 1, 'thunder' => 0, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Left Wing',
            'physical' => ['cut' => 3, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 2, 'water' => 1, 'thunder' => 0, 'ice' => 2, 'dragon' => 1],
        ],
        [
            'name' => 'Right Wing',
            'physical' => ['cut' => 3, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 2, 'water' => 1, 'thunder' => 0, 'ice' => 2, 'dragon' => 1],
        ],
        [
            'name' => 'Left Leg',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 0, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Right Leg',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 0, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Tail',
            'physical' => ['cut' => 4, 'blunt' => 3, 'ammo' => 4],
            'elemental' => ['fire' => 2, 'water' => 1, 'thunder' => 0, 'ice' => 1, 'dragon' => 1],
        ],
    ],

    'affliction_weaknesses' => [
        'poison' => 1,
        'sleep' => 2,
        'paralysis' => 2,
        'blastlight' => 2,
        'stun' => 2,
        'exhaust' => 2,
    ],

    'drops' => [

        ['item' => 'Rubbery Hide+', 'icon' => 'skin.png', 'target' => 22, 'break' => null, 'carve' => 33, 'wound' => 45],
        ['item' => 'Gypceros Head', 'icon' => 'skull.png', 'target' => 10, 'break' => "70% (Head)", 'carve' => 16, 'wound' => null],
        ['item' => 'Dash Extract', 'icon' => 'blood.png', 'target' => null, 'break' => null, 'carve' => null, 'wound' => 43],
        ['item' => 'Gypceros Head', 'icon' => 'wing.png', 'target' => 22, 'break' => null, 'carve' => 27, 'wound' => null],
        ['item' => 'Gypceros Tail', 'icon' => 'tail.png', 'target' => 15, 'break' => null, 'carve' => "20%<br \>20% (Head)", 'wound' => null],
        ['item' => 'Toxin Sac', 'icon' => 'sac.png', 'target' => 20, 'break' => null, 'carve' => null, 'wound' => null],
        ['item' => 'Novacrystal', 'icon' => 'crystal.png', 'target' => null, 'break' => "30% (Head)", 'carve' => null, 'wound' => 12],
        ['item' => 'Gypceros Certificate S', 'icon' => 'certificate.png', 'target' => 8, 'break' => null, 'carve' => null, 'wound' => null],
        ['item' => 'Bird Wyvern Gem', 'icon' => 'gem.png', 'target' => 3, 'break' => null, 'carve' => 5, 'wound' => null],
    ],
],
    [
    'name' => 'Hirabami',
    'slug' => 'hirabami',
    'icon' => 'hirabami_icons.png',
    'image' => 'hirabami_full.jpg',

    'parts' => [
        [
            'name' => 'Head',
            'physical' => ['cut' => 3, 'blunt' => 4, 'ammo' => 3],
            'elemental' => ['fire' => 2, 'water' => 1, 'thunder' => 2, 'ice' => 0, 'dragon' => 1],
        ],
        [
            'name' => 'Neck',
            'physical' => ['cut' => 3, 'blunt' => 4, 'ammo' => 3],
            'elemental' => ['fire' => 2, 'water' => 1, 'thunder' => 2, 'ice' => 0, 'dragon' => 1],
        ],
        [
            'name' => 'Toso',
            'physical' => ['cut' => 3, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 0, 'dragon' => 1],
        ],
        [
            'name' => 'Left Foreleg',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 0, 'dragon' => 1],
        ],
        [
            'name' => 'Right Foreleg',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 0, 'dragon' => 1],
        ],
        [
            'name' => 'Left Hind Leg',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 0, 'dragon' => 1],
        ],
        [
            'name' => 'Right Hind Leg',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 0, 'dragon' => 1],
        ],
        [
            'name' => 'Tail',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 2, 'water' => 1, 'thunder' => 1, 'ice' => 0, 'dragon' => 1],
        ]
    ],

    'affliction_weaknesses' => [
        'poison' => 3,
        'sleep' => 3,
        'paralysis' => 2,
        'blastlight' => 2,
        'stun' => 2,
        'exhaust' => 2,
    ],

    'drops' => [

        [ 'item' => 'Hirabami Tail Claw+', 'icon' => 'claws.png', 'target' => 10, 'break' =>  "100%(Tail)<BR \>100%(Tail)", 'carve' =>  "15%", 'wound' =>  "-" ],
        [ 'item' => 'Hirabami Scale+', 'icon' => 'scale.png', 'target' => 22, 'break' =>  "-", 'carve' =>  "33%", 'wound' =>  "45%" ],
        [ 'item' => 'Hirabami Hide +', 'icon' => 'skin.png', 'target' => 22, 'break' =>  "-", 'carve' =>  "27%", 'wound' =>  "43%" ],
        [ 'item' => 'Hirabami Webbing +', 'icon' => 'miel.png', 'target' => 15, 'break' =>  "100%(Head)", 'carve' =>  "20%", 'wound' =>  "12%" ],
        [ 'item' => 'Freezer Sac', 'icon' => 'sac.png', 'target' => 20, 'break' =>  "-", 'carve' =>  "-", 'wound' =>  "-" ],
        [ 'item' => 'Hirabami Certificate S', 'icon' => 'certificate.png', 'target' => 8, 'break' =>  "-", 'carve' =>  "-", 'wound' =>  "-" ],
        [ 'item' => 'Wyvern Gem', 'icon' => 'gem.png', 'target' => 3, 'break' =>  null, 'carve' =>  5, 'wound' =>  "-" ],
    ],
],

    [
    'name' => 'Jin Dahaad',
    'slug' => 'jin-dahaad',
    'icon' => 'jin-dahaad_icons.png',
    'image' => 'jin_dahaad_full.jpg',

    'parts' => [
        [
            'name' => 'Head',
            'physical' => ['cut' => 4, 'blunt' => 4, 'ammo' => 3],
            'elemental' => ['fire' => 2, 'water' => 1, 'thunder' => 1, 'ice' => 0, 'dragon' => 1],
        ],
        [
            'name' => 'Neck',
            'physical' => ['cut' => 4, 'blunt' => 4, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 0, 'dragon' => 1],
        ],
        [
            'name' => 'Toso',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 0, 'dragon' => 1],
        ],
        [
            'name' => 'Left Foreleg',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 0, 'dragon' => 1],
        ],
        [
            'name' => 'Right Foreleg',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 0, 'dragon' => 1],
        ],
        [
            'name' => 'Left Hind Leg',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 0, 'dragon' => 1],
        ],
        [
            'name' => 'Right Hind Leg',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 0, 'dragon' => 1],
        ],
        [
            'name' => 'Tail',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 0, 'dragon' => 1],
        ],
        [
            'name' => 'Abdominal Iceplate',
            'physical' => ['cut' => 4, 'blunt' => 4, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 0, 'dragon' => 1],
        ],
        [
            'name' => 'Lg. Iceplate (Hidden)',
            'physical' => ['cut' => 1, 'blunt' => 1, 'ammo' => 1],
            'elemental' => ['fire' => 0, 'water' => 0, 'thunder' => 0, 'ice' => 0, 'dragon' => 0],
        ],
        [
            'name' => 'Lg. Iceplate (Exposed)',
            'physical' => ['cut' => 4, 'blunt' => 4, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 0, 'dragon' => 1],
        ],
    ],

    'affliction_weaknesses' => [
        'poison' => 1,
        'sleep' => 1,
        'paralysis' => 1,
        'blastlight' => 2,
        'stun' => 1,
        'exhaust' => 2,
    ],

    'drops' => [
        ['item' => 'Jin Dahaad Claw +', 'icon' => 'claws.png', 'target' => 15, 'break' => "100% (Right Foreleg)<br \>100% (Left Foreleg)<br \>100% (Right Hind Leg)<br \>100% (Left Hind Leg)", 'carve' => "18%", 'wound' => "-"],
        ['item' => 'Jin Dahaad Iceplate', 'icon' => 'carapace.png', 'target' => null, 'break' => "100% (Tail Iceplate)<br \>100% (Abdominal Iceplate)<br \>88% (Lg. Iceplate - Exposed)", 'carve' => null, 'wound' => "12%"],
        ['item' => 'Jin Dahaad Scale +', 'icon' => 'scale.png', 'target' => 20, 'break' => null, 'carve' => "30%", 'wound' => "50%"],
        ['item' => 'Jin Dahaad Horn', 'icon' => 'claws.png', 'target' => 8, 'break' => "100% (Cranial Iceplate)", 'carve' => "13%", 'wound' => null],
        ['item' => 'Jin Dahaad Tail', 'icon' => 'tail.png', 'target' => 8, 'break' => "-", 'carve' => "11%<br \>93% (Tail)", 'wound' => null],
        ['item' => 'Jin Dahaad Carapace', 'icon' => 'carapace.png', 'target' => 20, 'break' => "-", 'carve' => 23, 'wound' => 38],
        ['item' => 'Freezer Sac', 'icon' => 'sac.png', 'target' => 18, 'break' => null, 'carve' => null, 'wound' => null],
        ['item' => 'Jin Dahaad Certificate S', 'icon' => 'certificate.png', 'target' => 8, 'break' => "-", 'carve' => null, 'wound' => null],
        ['item' => 'Jin Dahaad Icegem', 'icon' => 'gem.png', 'target' => 3, 'break' => "12% (Lg. Iceplate - Exposed)", 'carve' => "5%<br \>7% (Severed Tail)", 'wound' => null],

    ],
],


    
    [
    'name' => 'Lala Barina',
    'slug' => 'lala-barina',
    'icon' => 'lala-barina_icons.png',
    'image' => 'lala_barina_full.jpg',

    'parts' => [
        [
            'name' => 'Head',
            'physical' => ['cut' => 3, 'blunt' => 4, 'ammo' => 3],
            'elemental' => ['fire' => 2, 'water' => 0, 'thunder' => 1, 'ice' => 1, 'dragon' => 0],
        ],
        [
            'name' => 'Toso',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 1, 'ice' => 1, 'dragon' => 0],
        ],
        [
            'name' => 'Left Foreleg',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 1, 'ice' => 1, 'dragon' => 0],
        ],
        [
            'name' => 'Right Foreleg',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 1, 'ice' => 1, 'dragon' => 0],
        ],
        [
            'name' => 'Left Claw',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 1, 'ice' => 1, 'dragon' => 0],
        ],
        [
            'name' => 'Right Claw',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 1, 'ice' => 1, 'dragon' => 0],
        ],
        [
            'name' => 'Left Hind Leg',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 1, 'ice' => 1, 'dragon' => 0],
        ],
        [
            'name' => 'Right Hind Leg',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 1, 'ice' => 1, 'dragon' => 0],
        ],
        [
            'name' => 'Petals',
            'physical' => ['cut' => 4, 'blunt' => 4, 'ammo' => 3],
            'elemental' => ['fire' => 2, 'water' => 0, 'thunder' => 1, 'ice' => 1, 'dragon' => 0],
        ],
        [
            'name' => 'Tail',
            'physical' => ['cut' => 4, 'blunt' => 4, 'ammo' => 3],
            'elemental' => ['fire' => 2, 'water' => 0, 'thunder' => 1, 'ice' => 1, 'dragon' => 0],
        ],
    ],

    'affliction_weaknesses' => [
        'poison' => 2,
        'sleep' => 2,
        'paralysis' => 1,
        'blastlight' => 2,
        'stun' => 3,
        'exhaust' => 2,
    ],

    'drops' => [
        ['item' => 'Lala Barina Claw +', 'icon' => 'claws.png', 'target' => 11, 'break' => "100%(Left Claw)<br \>100%(Right Claw)", 'carve' => 15, 'wound' => null],
        ['item' => 'Lala Barina Floret +', 'icon' => 'skin.png', 'target' => 20, 'break' => null, 'carve' => 33, 'wound' => 45],
        ['item' => 'Lala Barina Stinger +', 'icon' => 'head.png', 'target' => 8, 'break' => "100% (Petals)", 'carve' => 11, 'wound' => null],
        ['item' => 'Lala Barina Carapace', 'icon' => 'carapace.png', 'target' => 20, 'break' => null, 'carve' => 23, 'wound' => 43],
        ['item' => 'Lala Barina Mucus +', 'icon' => 'blood.png', 'target' => 15, 'break' => "-", 'carve' => 18, 'wound' => 12],
        ['item' => 'Monster Broth', 'icon' => 'broth.png', 'target' => 18, 'break' => "-", 'carve' => null, 'wound' => null],
        ['item' => 'Lala Barina Certificate S', 'icon' => 'certificate.png', 'target' => 8, 'break' => "-", 'carve' => null, 'wound' => null],

    ],
],
    
    [
    'name' => 'Nerscylla',
    'slug' => 'nerscylla',
    'icon' => 'nerscylla_icons.png',
    'image' => 'nerscylla_full.jpg',

    'parts' => [
        [
            'name' => 'Head',
            'physical' => ['cut' => 3, 'blunt' => 4, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 0, 'ice' => 1, 'dragon' => 0],
        ],
        [
            'name' => 'Toso',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 3],
            'elemental' => ['fire' => 2, 'water' => 0, 'thunder' => 0, 'ice' => 1, 'dragon' => 0],
        ],
        [
            'name' => 'Left Foreleg',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 2, 'water' => 0, 'thunder' => 0, 'ice' => 1, 'dragon' => 0],
        ],
        [
            'name' => 'Right Foreleg',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 2, 'water' => 0, 'thunder' => 0, 'ice' => 1, 'dragon' => 0],
        ],
        [
            'name' => 'Left Claw',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 1, 'ice' => 1, 'dragon' => 0],
        ],
        [
            'name' => 'Right Claw',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 1, 'ice' => 1, 'dragon' => 0],
        ],
        [
            'name' => 'Belly',
            'physical' => ['cut' => 4, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 2, 'ice' => 1, 'dragon' => 0],
        ],
        [
            'name' => 'Stinger',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 4],
            'elemental' => ['fire' => 2, 'water' => 0, 'thunder' => 0, 'ice' => 1, 'dragon' => 0],
        ],
        [
            'name' => 'Left Hind Leg',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 0, 'ice' => 1, 'dragon' => 0],
        ],
        [
            'name' => 'Right Hind Leg',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 0, 'ice' => 1, 'dragon' => 0],
        ],
        [
            'name' => 'Mantle',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 2, 'water' => 0, 'thunder' => 0, 'ice' => 1, 'dragon' => 0],
        ],
    ],

    'affliction_weaknesses' => [
        'poison' => 2,
        'sleep' => 1,
        'paralysis' => 3,
        'blastlight' => 2,
        'stun' => 2,
        'exhaust' => 2,
    ],

    'drops' => [
        ['item' => 'Nerscylla Claw +', 'icon' => 'claws.png', 'target' => 15, 'break' => "100% (Left Claw)", 'carve' => 20, 'wound' => null],
        ['item' => 'Nerscylla Carapace', 'icon' => 'carapace.png', 'target' => 20, 'break' => null, 'carve' => 35, 'wound' => 63],
        ['item' => 'Rubbery Hide +', 'icon' => 'skin.png', 'target' => 8, 'break' => "100% (Mantle)", 'carve' => null, 'wound' => 12],
        ['item' => 'Nerscylla Spike +', 'icon' => 'head.png', 'target' => 8, 'break' => "100% (Stinger)", 'carve' => 15, 'wound' => 25],
        ['item' => 'Nerscylla Shear', 'icon' => 'claws.png', 'target' => 20, 'break' => null, 'carve' => 30, 'wound' => null],
        ['item' => 'Coma Sac', 'icon' => 'sac.png', 'target' => 21, 'break' => null, 'carve' => null, 'wound' => null],
        ['item' => 'Nerscylla Certificate S', 'icon' => 'certificate.png', 'target' => 8, 'break' => "-", 'carve' => null, 'wound' => null],

    ],
],
    [
    'name' => 'Nu Udra',
    'slug' => 'nu-udra',
    'icon' => 'nu-udra_icons.png',
    'image' => 'nu_udra_full.jpg',

    'parts' => [
        [
            'name' => 'Head',
            'physical' => ['cut' => 4, 'blunt' => 4, 'ammo' => 3],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Membrane',
            'physical' => ['cut' => 2, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Mouth',
            'physical' => ['cut' => 4, 'blunt' => 4, 'ammo' => 4],
            'elemental' => ['fire' => 0, 'water' => 2, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Torso',
            'physical' => ['cut' => 3, 'blunt' => 4, 'ammo' => 3],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Tentacle',
            'physical' => ['cut' => 2, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Front Left Arm',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Front Right Arm',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Middle Left Arm',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Middle Right Arm',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Rear Left Arm',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Rear Right Arm',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
    ],

    'affliction_weaknesses' => [
        'poison' => 2,
        'sleep' => 2,
        'paralysis' => 1,
        'blastlight' => 1,
        'stun' => 2,
        'exhaust' => 2,
    ],

    'drops' => [
        ['item' => 'Nu Udra Hide +', 'icon' => 'skin.png', 'target' => 22, 'break' => "-", 'carve' => 30, 'wound' => 45],
        ['item' => 'Nu Udra Horn +', 'icon' => 'claws.png', 'target' => 11, 'break' => "100% (Head)", 'carve' => 11, 'wound' => null],
        ['item' => 'Nu Udra Oilmucus +', 'icon' => 'oil.png', 'target' => 22, 'break' => "-", 'carve' => 23, 'wound' => 43],
        ['item' => 'Nu Udra Spike +', 'icon' => 'claws.png', 'target' => 16, 'break' => "-", 'carve' => "18%<br \>38% (Arm)", 'wound' => 12],
        ['item' => 'Nu Udra Tentacle +', 'icon' => 'head.png', 'target' => 11, 'break' => null, 'carve' => "13%<br \>60% (Arm)", 'wound' => null],
        ['item' => 'Nu Udra Certificate S', 'icon' => 'certificate.png', 'target' => 8, 'break' => "-", 'carve' => null, 'wound' => null],
        ['item' => 'Nu Udra Cerebrospinal Fluid', 'icon' => 'blood.png', 'target' => 7, 'break' => null, 'carve' => null, 'wound' => null],
        ['item' => 'Nu Udra Flamegem', 'icon' => 'gem.png', 'target' => 3, 'break' => "-", 'carve' => "5%<br \>2% (Arm)", 'wound' => null],

    ],
],
[
    'name' => 'Quematrice',
    'slug' => 'quematrice',
    'icon' => 'quematrice_icons.png',
    'image' => 'quematrice_full.jpg',

    'parts' => [
        [
            'name' => 'Head',
            'physical' => ['cut' => 4, 'blunt' => 4, 'ammo' => 4],
            'elemental' => ['fire' => 0, 'water' => 2, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Torso',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Left Foreleg',
            'physical' => ['cut' => 3, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Right Foreleg',
            'physical' => ['cut' => 3, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Left Hind Leg',
            'physical' => ['cut' => 3, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Right Hind Leg',
            'physical' => ['cut' => 3, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Tail',
            'physical' => ['cut' => 4, 'blunt' => 4, 'ammo' => 4],
            'elemental' => ['fire' => 0, 'water' => 2, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ]
    ],

    'affliction_weaknesses' => [
        'poison' => 3,
        'sleep' => 2,
        'paralysis' => 3,
        'blastlight' => 2,
        'stun' => 2,
        'exhaust' => 2,
    ],

    'drops' => [
        ['item' => 'Quematrice Scale +', 'icon' => 'scale.png', 'target' => 25, 'break' => "-", 'carve' => 30, 'wound' => 45],
        ['item' => 'Quematrice Hide +', 'icon' => 'skin.png', 'target' => 25, 'break' => null, 'carve' => 23, 'wound' => 43],
        ['item' => 'Qumatrice Crest +', 'icon' => 'skull.png', 'target' => 11, 'break' => "100% (Head)", 'carve' => 11, 'wound' => null],
        ['item' => 'Quematrice Tail', 'icon' => 'tail.png', 'target' => 8, 'break' => "-", 'carve' => "13%<br \>93% (Tail)", 'wound' => null],
        ['item' => 'Quematrice Igniter +', 'icon' => 'blood.png', 'target' => 20, 'break' => null, 'carve' => 18, 'wound' => 12],
        ['item' => 'Quematrice Certificate S', 'icon' => 'certificate.png', 'target' => 8, 'break' => "-", 'carve' => null, 'wound' => null],
        ['item' => 'Wyvern Gem', 'icon' => 'gem.png', 'target' => 3, 'break' => "-", 'carve' => "5%<br \>7% (Tail)", 'wound' => null],

    ],
],


    [
    'name' => 'Rathalos',
    'slug' => 'rathalos',
    'icon' => 'rathalos_icons.png',
    'image' => 'rathalos_full.jpg',

    'parts' => [
        [
            'name' => 'Head',
            'physical' => ['cut' => 4, 'blunt' => 4, 'ammo' => 4],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 2, 'ice' => 1, 'dragon' => 2],
        ],
        [
            'name' => 'Neck',
            'physical' => ['cut' => 2, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 2],
        ],
        [
            'name' => 'Torso',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 2],
        ],
        [
            'name' => 'Left Wing',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 2],
        ],
        [
            'name' => 'Right Wing',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 0, 'water' => 0, 'thunder' => 1, 'ice' => 0, 'dragon' => 1],
        ],
        [
            'name' => 'Left Leg',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 0, 'water' => 0, 'thunder' => 1, 'ice' => 0, 'dragon' => 1],
        ],
        [
            'name' => 'Right Leg',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 2],
        ],
        [
            'name' => 'Tail',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => null, 'water' => null, 'thunder' => null, 'ice' => null, 'dragon' => null],
        ],
    ],

    'affliction_weaknesses' => [
        'poison' => 1,
        'sleep' => 2,
        'paralysis' => 2,
        'blastlight' => 2,
        'stun' => 2,
        'exhaust' => 2,
    ],

    'drops' => [
        ['item' => 'Rathalos Wing', 'icon' => 'wings.png', 'target' => 15, 'break' => "100% (Left Wing) <br \n>100% (Right Wing)", 'carve' => 18, 'wound' => null],
        ['item' => 'Rathalos Scale +', 'icon' => 'scale.png', 'target' => 20, 'break' => null, 'carve' => 30, 'wound' => 50],
        ['item' => 'Rathalos Carapace', 'icon' => 'carapace.png', 'target' => 20, 'break' => null, 'carve' => 23, 'wound' => 50],
        ['item' => 'Rathalos Tail', 'icon' => 'tail.png', 'target' => 8, 'break' => "-", 'carve' => "13%<br \>80% (Tail)", 'wound' => null],
        ['item' => 'Inferno Sac', 'icon' => 'sac.png', 'target' => 18, 'break' => null, 'carve' => null, 'wound' => null],
        ['item' => 'Rathalos Certificate S', 'icon' => 'certificate.png', 'target' => 8, 'break' => "-", 'carve' => null, 'wound' => null],
        ['item' => 'Rath Medulla', 'icon' => 'head.png', 'target' => 8, 'break' => "-", 'carve' => "11%<br \>13% (Tail)", 'wound' => null],
        ['item' => 'Rathalos Ruby', 'icon' => 'gem.png', 'target' => 3, 'break' => "-", 'carve' => "5%<br \>7% (Tail)", 'wound' => null],

    ],
],
    [
    'name' => 'Rathian',
    'slug' => 'rathian',
    'icon' => 'rathian_icons.png',
    'image' => 'rathian_full.jpg',

    'parts' => [
        [
            'name' => 'Head',
            'physical' => ['cut' => 4, 'blunt' => 4, 'ammo' => 4],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 2, 'ice' => 1, 'dragon' => 2],
        ],
        [
            'name' => 'Neck',
            'physical' => ['cut' => 2, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 2],
        ],
        [
            'name' => 'Torso',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 2],
        ],
        [
            'name' => 'Left Wing',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 2],
        ],
        [
            'name' => 'Right Wing',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 0, 'water' => 0, 'thunder' => 1, 'ice' => 0, 'dragon' => 1],
        ],
        [
            'name' => 'Left Leg',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 0, 'water' => 0, 'thunder' => 1, 'ice' => 0, 'dragon' => 1],
        ],
        [
            'name' => 'Right Leg',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 2],
        ],
        [
            'name' => 'Tail',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => null, 'water' => null, 'thunder' => null, 'ice' => null, 'dragon' => null],
        ],
    ],

    'affliction_weaknesses' => [
        'poison' => 1,
        'sleep' => 2,
        'paralysis' => 2,
        'blastlight' => 2,
        'stun' => 2,
        'exhaust' => 2,
    ],

    'drops' => [
        ['item' => 'Rathian Webbing', 'icon' => 'wings.png', 'target' => 15, 'break' => "100% (Left Wing) <br \n>100% (Right Wing)", 'carve' => 18, 'wound' => null],
        ['item' => 'Rathian Scale +', 'icon' => 'scale.png', 'target' => 20, 'break' => null, 'carve' => 30, 'wound' => 50],
        ['item' => 'Rathian Carapace', 'icon' => 'carapace.png', 'target' => 20, 'break' => null, 'carve' => 23, 'wound' => 50],
        ['item' => 'Rathian Spike +', 'icon' => 'spike.png', 'target' => 8, 'break' => "-", 'carve' => "13%<br \>80% (Tail)", 'wound' => null],
        ['item' => 'Inferno Sac', 'icon' => 'sac.png', 'target' => 18, 'break' => null, 'carve' => null, 'wound' => null],
        ['item' => 'Rathian Certificate S', 'icon' => 'certificate.png', 'target' => 8, 'break' => "-", 'carve' => null, 'wound' => null],
        ['item' => 'Rath Medulla', 'icon' => 'head.png', 'target' => 8, 'break' => "-", 'carve' => "11%<br \>13% (Tail)", 'wound' => null],
        ['item' => 'Rathian Ruby', 'icon' => 'gem.png', 'target' => 3, 'break' => "-", 'carve' => "5%<br \>7% (Tail)", 'wound' => null],

    ],
],
    [
    'name' => 'Rey Dau',
    'slug' => 'rey-dau',
    'icon' => 'rey-dau_icons.png',
    'image' => 'rey_dau_full.jpg',

    'parts' => [
        [
            'name' => 'Head',
            'physical' => ['cut' => 4, 'blunt' => 4, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 0, 'ice' => 2, 'dragon' => 1],
        ],
        [
            'name' => 'Torso',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 0, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Left Wing',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 0, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Right Wing',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 0, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Left Leg',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 0, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Right Leg',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 0, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Tail',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 0, 'ice' => 1, 'dragon' => 1],
        ],
    ],

    'affliction_weaknesses' => [
        'poison' => 2,
        'sleep' => 2,
        'paralysis' => 1,
        'blastlight' => 2,
        'stun' => 1,
        'exhaust' => 2,
    ],

    'drops' => [
        ['item' => 'Rey Dau Fulgurtalon', 'icon' => 'talon.png', 'target' => 17, 'break' => "100% (Left Wing) <br \n>100% (Right Wing)", 'carve' => 18, 'wound' => null],
        ['item' => 'Rey Dau Scale +', 'icon' => 'scale.png', 'target' => 22, 'break' => null, 'carve' => 30, 'wound' => 50],
        ['item' => 'Rey Dau Carapace', 'icon' => 'carapace.png', 'target' => 22, 'break' => null, 'carve' => 23, 'wound' => 50],
        ['item' => 'Rey Dau Bolthorn', 'icon' => 'claws.png', 'target' => 11, 'break' => "100% (Horn)", 'carve' => 13, 'wound' => null],
        ['item' => 'Rey Dau Tail', 'icon' => 'tail.png', 'target' => 11, 'break' => null, 'carve' => "11%<br \>93% (Tail)", 'wound' => null],
        ['item' => 'Rey Dau Certificate S', 'icon' => 'certificate.png', 'target' => 8, 'break' => "-", 'carve' => null, 'wound' => null],
        ['item' => 'Rey Dau Plate', 'icon' => 'plate.png', 'target' => 7, 'break' => "-", 'carve' => null, 'wound' => null],
        ['item' => 'Rey Dau Boltgem', 'icon' => 'gem.png', 'target' => 3, 'break' => "-", 'carve' => "7% (Tail)", 'wound' => null],

    ],
],
    [
    'name' => 'Rompopolo',
    'slug' => 'rompopolo',
    'icon' => 'rompopolo_icons.png',
    'image' => 'rompopolo_full.jpg',

    'parts' => [
        [
            'name' => 'Head',
            'physical' => ['cut' => 4, 'blunt' => 4, 'ammo' => 4],
            'elemental' => ['fire' => 1, 'water' => 2, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Torso',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Left Foreleg',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Right Foreleg',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Back',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 2, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Left Hind Leg',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Right Hind Leg',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Tail',
            'physical' => ['cut' => 4, 'blunt' => 4, 'ammo' => 4],
            'elemental' => ['fire' => 1, 'water' => 2, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ]
    ],

    'affliction_weaknesses' => [
        'poison' => 1,
        'sleep' => 2,
        'paralysis' => 2,
        'blastlight' => 2,
        'stun' => 2,
        'exhaust' => 2,
    ],

    'drops' => [
        ['item' => 'Rompopolo Hide +', 'icon' => 'hide.png', 'target' => 22, 'break' => null, 'carve' => 33, 'wound' => 80],
        ['item' => 'Rompopolo Claw +', 'icon' => 'claws.png', 'target' => 15, 'break' => "60% (Foreleg)", 'carve' => 20, 'wound' => null],
        ['item' => 'Spotted Poison Hide +', 'icon' => 'hide.png', 'target' => 10, 'break' => "60% (Head) <br \n>60% (Back) <br \n>60% (Tail)", 'carve' => 15, 'wound' => 20],
        ['item' => 'Toxin Sac', 'icon' => 'sac.png', 'target' => 20, 'break' => "40% (Back) <br \n>40% (Tail)", 'carve' => 13, 'wound' => null],
        ['item' => 'Rompopolo Beak +', 'icon' => 'skull.png', 'target' => 22, 'break' => "40% (Head)", 'carve' => 27, 'wound' => null],
        ['item' => 'Rompopolo Certificate S', 'icon' => 'certificate.png', 'target' => 8, 'break' => "-", 'carve' => null, 'wound' => null],
        ['item' => 'Wyvern Gem', 'icon' => 'gem.png', 'target' => 3, 'break' => "-", 'carve' => 5, 'wound' => null],

    ],
],
    [
    'name' => 'Uth Duna',
    'slug' => 'uth-duna',
    'icon' => 'uth-duna_icons.png',
    'image' => 'uth_duna_full.jpg',

    'parts' => [
        [
            'name' => 'Head',
            'physical' => ['cut' => 3, 'blunt' => 4, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 2, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Torso',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Left Foreleg',
            'physical' => ['cut' => 4, 'blunt' => 4, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Right Foreleg',
            'physical' => ['cut' => 4, 'blunt' => 4, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Left Hind Leg',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Right Hind Leg',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Tail',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ]
    ],

    'affliction_weaknesses' => [
        'poison' => 2,
        'sleep' => 2,
        'paralysis' => 2,
        'blastlight' => 2,
        'stun' => 1,
        'exhaust' => 2,
    ],

    'drops' => [
        ['item' => 'Uth Duna Claw +', 'icon' => 'claws.png', 'target' => 8, 'break' => "100% (Right Foreleg) <br \n>100% (Left Foreleg)", 'carve' => 13, 'wound' => null],
        ['item' => 'Uth Duna Scale +', 'icon' => 'scale.png', 'target' => 18, 'break' => null, 'carve' => 30, 'wound' => 45],
        ['item' => 'Uth Duna Cilia +', 'icon' => 'skin.png', 'target' => 14, 'break' => "93% (Tail)", 'carve' => 18, 'wound' => 12],
        ['item' => 'Uth Duna Tentacle +', 'icon' => 'head.png', 'target' => 8, 'break' => "100% (Head)", 'carve' => 11, 'wound' => null],
        ['item' => 'Uth Duna Hide +', 'icon' => 'hide.png', 'target' => 18, 'break' => null, 'carve' => 23, 'wound' => 43],
        ['item' => 'Torrent Sac', 'icon' => 'sac.png', 'target' => 16, 'break' => null, 'carve' => null, 'wound' => null],
        ['item' => 'Uth Duna Certificate S', 'icon' => 'certificate.png', 'target' => 8, 'break' => "-", 'carve' => null, 'wound' => null],
        ['item' => 'Uth Duna Plate', 'icon' => 'plate.png', 'target' => 7, 'break' => null, 'carve' => null, 'wound' => null],
        ['item' => 'Uth Duna Watergem', 'icon' => 'gem.png', 'target' => 3, 'break' => "7% (Tail)", 'carve' => 5, 'wound' => null],

    ],
],
    [
    'name' => 'Xu Wu',
    'slug' => 'xu-wu',
    'icon' => 'xu-wu_icons.png',
    'image' => 'xu_wu_full.jpg',

    'parts' => [
        [
            'name' => 'Head',
            'physical' => ['cut' => 4, 'blunt' => 4, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 2, 'dragon' => 0],
        ],
        [
            'name' => 'Membrane',
            'physical' => ['cut' => 2, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 2, 'dragon' => 0],
        ],
        [
            'name' => 'Mouth',
            'physical' => ['cut' => 4, 'blunt' => 4, 'ammo' => 4],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 3, 'dragon' => 0],
        ],
        [
            'name' => 'Torso',
            'physical' => ['cut' => 2, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 2, 'dragon' => 0],
        ],
        [
            'name' => 'Tentacle',
            'physical' => ['cut' => 2, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 2, 'dragon' => 0],
        ],
        [
            'name' => 'Front Left Arm',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 2, 'dragon' => 0],
        ],
        [
            'name' => 'Front Right Arm',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 2, 'dragon' => 0],
        ],
        [
            'name' => 'Middle Left Arm',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 2, 'dragon' => 0],
        ],
        [
            'name' => 'Middle Right Arm',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 2, 'dragon' => 0],
        ],
        [
            'name' => 'Rear Left Arm',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 2, 'dragon' => 0],
        ],
        [
            'name' => 'Rear Right Arm',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 2, 'dragon' => 0],
        ],
    ],

    'affliction_weaknesses' => [
        'poison' => 3,
        'sleep' => 1,
        'paralysis' => 2,
        'blastlight' => 2,
        'stun' => 2,
        'exhaust' => 2,
    ],

    'drops' => [
        ['item' => 'Golden Corneum +', 'icon' => 'stone.png', 'target' => 22, 'break' => "93% (Head)", 'carve' => 23, 'wound' => 50],
        ['item' => 'Xu Wu Claw +', 'icon' => 'claws.png', 'target' => 16, 'break' => "100% (Front Right Arm) <br \n>100% (Front Left Arm)", 'carve' => 18, 'wound' => null],
        ['item' => 'Xu Wu Hide +', 'icon' => 'skin.png', 'target' => 22, 'break' => null, 'carve' => 30, 'wound' => 50],
        ['item' => 'Xu Wu Tentacle +', 'icon' => 'head.png', 'target' => 11, 'break' => null, 'carve' => "11%<br \>95%(Arm)", 'wound' => null],
        ['item' => 'Xu Wu Fang +', 'icon' => 'claws.png', 'target' => 11, 'break' => "100% (Mouth)", 'carve' => 13, 'wound' => null],
        ['item' => 'Xu Wu Certificate S', 'icon' => 'certificate.png', 'target' => 8, 'break' => "-", 'carve' => null, 'wound' => null],
        ['item' => 'Xu Wu Cerebrospinal Fluid', 'icon' => 'blood.png', 'target' => 7, 'break' => null, 'carve' => null, 'wound' => null],
        ['item' => 'Xu Wu Umbragem', 'icon' => 'gem.png', 'target' => 3, 'break' => "7% (Head)", 'carve' => "5%<br \>5%(Arm)", 'wound' => null],

    ],
],
    [
    'name' => 'Yian Kut-Ku',
    'slug' => 'yian-kut-ku',
    'icon' => 'yian-kut-ku_icons.png',
    'image' => 'yian_kut-ku_full.jpg',

    'parts' => [
        [
            'name' => 'Head',
            'physical' => ['cut' => 3, 'blunt' => 4, 'ammo' => 4],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 2, 'ice' => 2, 'dragon' => 0],
        ],
        [
            'name' => 'Neck',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 2, 'thunder' => 2, 'ice' => 3, 'dragon' => 2],
        ],
        [
            'name' => 'Torso',
            'physical' => ['cut' => 4, 'blunt' => 4, 'ammo' => 4],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 2, 'dragon' => 0],
        ],
        [
            'name' => 'Left Wing',
            'physical' => ['cut' => 4, 'blunt' => 3, 'ammo' => 4],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 2, 'ice' => 1, 'dragon' => 0],
        ],
        [
            'name' => 'Right Wing',
            'physical' => ['cut' => 4, 'blunt' => 3, 'ammo' => 4],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 2, 'ice' => 1, 'dragon' => 0],
        ],
        [
            'name' => 'Left Leg',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 0],
        ],
        [
            'name' => 'Right Leg',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 0],
        ],
        [
            'name' => 'Tail',
            'physical' => ['cut' => 4, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 2, 'dragon' => 0],
        ],
    ],

    'affliction_weaknesses' => [
        'poison' => 2,
        'sleep' => 2,
        'paralysis' => 2,
        'blastlight' => 2,
        'stun' => 2,
        'exhaust' => 2,
    ],

    'drops' => [
        ['item' => 'Kut-Ku Scale +', 'icon' => 'scale.png', 'target' => 20, 'break' => null, 'carve' => 30, 'wound' => 50],
        ['item' => 'Kut-Ku Scale +', 'icon' => 'carapace.png', 'target' => 20, 'break' => null, 'carve' => 23, 'wound' => null],
        ['item' => 'Kut-Ku Ear', 'icon' => 'head.png', 'target' => 8, 'break' => "100% (Head)", 'carve' => 13, 'wound' => 50],
        ['item' => 'Kut-Ku Wing', 'icon' => 'wings.png', 'target' => 15, 'break' => null, 'carve' => 18, 'wound' => null],
        ['item' => 'Inferno Sac', 'icon' => 'sac.png', 'target' => 18, 'break' => null, 'carve' => null, 'wound' => null],
        ['item' => 'Yian Kut-Ku Certificate S', 'icon' => 'certificate.png', 'target' => 8, 'break' => "-", 'carve' => null, 'wound' => null],
        ['item' => 'Giant Beak', 'icon' => 'skull.png', 'target' => 8, 'break' => null, 'carve' => 11, 'wound' => null],
        ['item' => 'Bird Wyvern Gem', 'icon' => 'gem.png', 'target' => 3, 'break' => null, 'carve' => 5, 'wound' => null],

    ],
],
    [
    'name' => 'Zoh Shia',
    'slug' => 'zoh-shia',
    'icon' => 'zoh-shia_icons.png',
    'image' => 'zoh_shia_full.jpg',

    'parts' => [
        [
            'name' => 'Head',
            'physical' => ['cut' => 4, 'blunt' => 4, 'ammo' => 4],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 2],
        ],
        [
            'name' => 'Head (Crystallized)',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Neck',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 2],
        ],
        [
            'name' => 'Torso',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 1],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Left Foreleg',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Right Foreleg',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Left Wingarm',
            'physical' => ['cut' => 4, 'blunt' => 4, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 2],
        ],
        [
            'name' => 'Right Wingarm',
            'physical' => ['cut' => 4, 'blunt' => 4, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 2],
        ],
        [
            'name' => 'L Wingarm (Crystallzed)',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 1],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'R Wingarm (Crystallzed)',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 1],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Lef Hind Leg',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Right Hind Leg',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Tail',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
    ],

    'affliction_weaknesses' => [
        'poison' => 2,
        'sleep' => 2,
        'paralysis' => 2,
        'blastlight' => 2,
        'stun' => 1,
        'exhaust' => 0,
    ],

    'drops' => [
        ['item' => 'Zoh Shia Stakeclaw', 'icon' => 'claws.png', 'target' => 18, 'break' => "100% (Left Foreleg)<br \>100% (Right Foreleg)", 'carve' => 16, 'wound' => null],
        ['item' => 'Blackember Mass', 'icon' => 'black.png', 'target' => 15, 'break' => "100% (Left Wingarm)<br \>100% (Right Wingarm)", 'carve' => 13, 'wound' => null],
        ['item' => 'Zoh Shia Crystalhorn', 'icon' => 'claws.png', 'target' => 8, 'break' => "100% (Head)", 'carve' => 11, 'wound' => null],
        ['item' => 'Zoh Shia Crystaltail', 'icon' => 'tail.png', 'target' => 8, 'break' => null, 'carve' => "11%<br \>93% (Tail)", 'wound' => null],
        ['item' => 'Guardian Blood +', 'icon' => 'blood.png', 'target' => null, 'break' => null, 'carve' => null, 'wound' => 30],
        ['item' => 'Zoh Shia Crystalscale', 'icon' => 'scale.png', 'target' => 20, 'break' => null, 'carve' => "24%", 'wound' => 40],
        ['item' => 'Zoh Shia Layershell', 'icon' => 'carapace.png', 'target' => 20, 'break' => null, 'carve' => "22%", 'wound' => 30],
        ['item' => 'Zoh Shia Certificate S', 'icon' => 'certificate.png', 'target' => 8, 'break' => null, 'carve' => null, 'wound' => null],
        ['item' => 'Faux Whitegleam Orb', 'icon' => 'gem.png', 'target' => 3, 'break' => null, 'carve' => "3%<br \>7% (Tail)", 'wound' => null],

    ],
],
    [
    'name' => 'Mizutsune',
    'slug' => 'mizutsune',
    'icon' => 'mizutsune_icons.png',
    'image' => 'mizutsune_full.jpg',

    'parts' => [
        [
            'name' => 'Head',
            'physical' => ['cut' => 4, 'blunt' => 4, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Torso',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Left Claw',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 1],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 2, 'ice' => 1, 'dragon' => 2],
        ],
        [
            'name' => 'Right Claw',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 1],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 2, 'ice' => 1, 'dragon' => 2],
        ],
        [
            'name' => 'Dorsal Fin',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Left Leg',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 1],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 2, 'ice' => 1, 'dragon' => 2],
        ],
        [
            'name' => 'Right Leg',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 1],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 2, 'ice' => 1, 'dragon' => 2],
        ],
        [
            'name' => 'Left Hind Leg',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Right Hind Leg',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Tail',
            'physical' => ['cut' => 3, 'blunt' => 2, 'ammo' => 3],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
    ],

    'affliction_weaknesses' => [
        'poison' => 2,
        'sleep' => 2,
        'paralysis' => 2,
        'blastlight' => 2,
        'stun' => 2,
        'exhaust' => 2,
    ],

    'drops' => [
        ['item' => 'Mizutsune Fin +', 'icon' => 'head.png', 'target' => 8, 'break' => "100% (Head I)<br \>100% (Head II) <br \>100% (Dorsal Fin)", 'carve' => 11, 'wound' => null],
        ['item' => 'Mizutsune Claw +', 'icon' => 'claws.png', 'target' => 15, 'break' => "100% (Left Claw)<br \>100% (Right Claw)", 'carve' => 13, 'wound' => null],
        ['item' => 'Mizutsune Purplefur +', 'icon' => 'skin.png', 'target' => 20, 'break' => "100% (Tail)", 'carve' => 22, 'wound' => 30],
        ['item' => 'Mizutsune Tail', 'icon' => 'tail.png', 'target' => 8, 'break' => null, 'carve' => "11%<br \>94% (Tail)", 'wound' => null],
        ['item' => 'Mizutsune Scale +', 'icon' => 'scale.png', 'target' => 20, 'break' => null, 'carve' => 24, 'wound' => 30],
        ['item' => 'Bubblefoam +', 'icon' => 'scale.png', 'target' => 18, 'break' => null, 'carve' => "16%", 'wound' => 40],
        ['item' => 'Mizutsune Certificate S', 'icon' => 'certificate.png', 'target' => 8, 'break' => null, 'carve' => null, 'wound' => null],
        ['item' => 'Mizutsune Water Orb', 'icon' => 'gem.png', 'target' => 3, 'break' => null, 'carve' => "3%<br \>6% (Tail)", 'wound' => null],

    ],
],
    [
    'name' => 'Lagiacrus',
    'slug' => 'lagiacrus',
    'icon' => 'lagiacrus_icons.png',
    'image' => 'lagiacrus_full.jpg',

    'parts' => [
        [
            'name' => 'Head',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 2, 'water' => 0, 'thunder' => 0, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Neck',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 1],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 0, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Chest',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 0, 'ice' => 1, 'dragon' => 2],
        ],
        [
            'name' => 'Torso',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 0, 'ice' => 1, 'dragon' => 2],
        ],
        [
            'name' => 'Foreleg',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 1],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 0, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Back',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 1],
            'elemental' => ['fire' => 3, 'water' => 0, 'thunder' => 0, 'ice' => 2, 'dragon' => 2],
        ],
        [
            'name' => 'Hind Leg',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 1, 'water' => 0, 'thunder' => 0, 'ice' => 1, 'dragon' => 2],
        ],
        [
            'name' => 'Tail',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 3, 'water' => 0, 'thunder' => 0, 'ice' => 1, 'dragon' => 1],
        ],
    ],

    'affliction_weaknesses' => [
        'poison' => 2,
        'sleep' => 2,
        'paralysis' => 1,
        'blastlight' => 2,
        'stun' => 1,
        'exhaust' => 2,
    ],

    'drops' => [
        ['item' => 'Lagiacrus Claw +', 'icon' => 'claws.png', 'target' => 18, 'break' => "100% (Foreleg)", 'carve' => 18, 'wound' => null],
        ['item' => 'Lagiacrus Hide +', 'icon' => 'skin.png', 'target' => 22, 'break' => null, 'carve' => 23, 'wound' => 50],
        ['item' => 'Lagiacrus Scale +', 'icon' => 'scale.png', 'target' => 20, 'break' => null, 'carve' => 22, 'wound' => 50],
        ['item' => 'Lagiacrus Shockspike', 'icon' => 'head.png', 'target' => 15, 'break' => "100% (Back)", 'carve' => 13, 'wound' => null],
        ['item' => 'Lagiacrus Horn +', 'icon' => 'claws.png', 'target' => 8, 'break' => "100% (Head)", 'carve' => 11, 'wound' => null],
        ['item' => 'Lagiacrus Tail', 'icon' => 'head.png', 'target' => 8, 'break' => null, 'carve' => "11%<br \>100% (Severed Part, Tail)", 'wound' => null],
        ['item' => 'Lagiacrus Certificate S', 'icon' => 'certificate.png', 'target' => 8, 'break' => null, 'carve' => null, 'wound' => null],
        ['item' => 'Lagiacrus Sapphire', 'icon' => 'gem.png', 'target' => 1, 'break' => null, 'carve' => 2, 'wound' => null],

    ],
],
[
    'name' => 'Seregios',
    'slug' => 'seregios',
    'icon' => 'seregios_icons.png',
    'image' => 'seregios_full.jpg',

    'parts' => [
        [
            'name' => 'Head',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 2, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Neck',
            'physical' => ['cut' => 2, 'blunt' => 3, 'ammo' => 2],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Torso',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 1],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Left Wing',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 1],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Ring Wing',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 1],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => 1],
        ],
        [
            'name' => 'Left Leg',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 3, 'ice' => 2, 'dragon' => 1],
        ],
        [
            'name' => 'Right Leg',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 3, 'ice' => 2, 'dragon' => 1],
        ],
        [
            'name' => 'Tail',
            'physical' => ['cut' => 3, 'blunt' => 2, 'ammo' => 3],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 2, 'ice' => 1, 'dragon' => 1],
        ],
    ],

    'affliction_weaknesses' => [
        'poison' => 2,
        'sleep' => 2,
        'paralysis' => 1,
        'blastlight' => 2,
        'stun' => 2,
        'exhaust' => 2,
    ],

    'drops' => [
        ['item' => 'Seregios Carver', 'icon' => 'claws.png', 'target' => 18, 'break' => "100% (Left Wing)<br \n>100% (Right Wing)", 'carve' => 18, 'wound' => null],
        ['item' => 'Seregios Scraper', 'icon' => 'claws.png', 'target' => 15, 'break' => "100% (Left Wing)<br \n>100% (Right Wing)", 'carve' => 13, 'wound' => null],
        ['item' => 'Seregios Slavescale', 'icon' => 'scale.png', 'target' => 22, 'break' => null, 'carve' => 23, 'wound' => 50],
        ['item' => 'Seregios Airblade', 'icon' => 'scale.png', 'target' => 20, 'break' => null, 'carve' => 22, 'wound' => 50],
        ['item' => 'Seregios Breacher', 'icon' => 'claws.png', 'target' => 8, 'break' => "100% (Head)", 'carve' => 11, 'wound' => null],
        ['item' => 'Seregios Impaler', 'icon' => 'tail.png', 'target' => 8, 'break' => null, 'carve' => "11%<br \>100% (Severed Part, Tail)", 'wound' => null],
        ['item' => 'Seregios Certificate S', 'icon' => 'certificate.png', 'target' => 8, 'break' => null, 'carve' => null, 'wound' => null],
        ['item' => 'Seregios Dissenter', 'icon' => 'plate.png', 'target' => 1, 'break' => null, 'carve' => 2, 'wound' => null],
    ],
],
    [
    'name' => 'Omega Planetes',
    'slug' => 'omega-planetes',
    'icon' => 'omega-planetes_icons.png',
    'image' => 'omega_planetes_full.jpg',

    'parts' => [
        [
            'name' => 'Head',
            'physical' => ['cut' => 3, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 3, 'ice' => 1, 'dragon' => null],
        ],
        [
            'name' => 'Torso',
            'physical' => ['cut' => 2, 'blunt' => 2, 'ammo' => 1],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 1, 'ice' => 1, 'dragon' => null],
        ],
        [
            'name' => 'Left Foreleg',
            'physical' => ['cut' => 3, 'blunt' => 4, 'ammo' => 4],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 3, 'ice' => 1, 'dragon' => null],
        ],
        [
            'name' => 'Right Foreleg',
            'physical' => ['cut' => 3, 'blunt' => 4, 'ammo' => 4],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 3, 'ice' => 1, 'dragon' => null],
        ],
        [
            'name' => 'Back',
            'physical' => ['cut' => 3, 'blunt' => 2, 'ammo' => 2],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 3, 'ice' => 1, 'dragon' => null],
        ],
        [
            'name' => 'Left Hind Lef',
            'physical' => ['cut' => 4, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 3, 'ice' => 1, 'dragon' => null],
        ],
        [
            'name' => 'Right Hind Leg',
            'physical' => ['cut' => 4, 'blunt' => 3, 'ammo' => 3],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 3, 'ice' => 1, 'dragon' => null],
        ],
        [
            'name' => 'Rear Power Unit',
            'physical' => ['cut' => 4, 'blunt' => 4, 'ammo' => 1],
            'elemental' => ['fire' => 0, 'water' => 1, 'thunder' => 2, 'ice' => 1, 'dragon' => null],
        ],
    ],

    'affliction_weaknesses' => [
        'poison' => 0,
        'sleep' => 0,
        'paralysis' => 1,
        'blastlight' => 2,
        'stun' => 1,
        'exhaust' => 0,
    ],

    'drops' => [
        ['item' => 'Omega Data 1.0', 'icon' => 'certificate.png', 'target' => 8, 'break' => null, 'carve' => null, 'wound' => null],
        ['item' => 'Omega Screw', 'icon' => 'claws.png', 'target' => 25, 'break' => null, 'carve' => 28, 'wound' => 40],
        ['item' => 'Omega Spring', 'icon' => 'claws.png', 'target' => 23, 'break' => null, 'carve' => 25, 'wound' => 40],
        ['item' => 'Omega Pedal', 'icon' => 'carapace.png', 'target' => 18, 'break' => "100% (Right Foreleg)<br \>100% (Left Foreleg)<br \>100% (Right Hind Leg)<br \>100% (Left Hind Leg)", 'carve' => 20, 'wound' => 20],
        ['item' => 'Omega Lens', 'icon' => 'head.png', 'target' => 13, 'break' => "100% (Head)", 'carve' => 13, 'wound' => null],
        ['item' => 'Omega Axle', 'icon' => 'carapace.png', 'target' => 11, 'break' => "100% (Read Power Unit)", 'carve' => 11, 'wound' => null],
        ['item' => 'Omega Nodule', 'icon' => 'gem.png', 'target' => 2, 'break' => null, 'carve' => 3, 'wound' => null],
    ],
],
        ];

        foreach ($monsters as $m) {
            $monster = Monster::create([
                'name'       => $m['name'],
                'slug'       => $m['slug'],
                'icon'       => $m['icon'],
                'image'      => $m['image'],
                'is_large'   => true,
                'affliction_weaknesses' => $m['affliction_weaknesses'] ?? null,
            ]);

            // PARTS → table monster_parts
            if (!empty($m['parts'] ?? null)) {
                foreach ($m['parts'] as $part) {
                    MonsterPart::create([
                        'monster_id' => $monster->id,
                        'name'       => $part['name'],
                        'physical'   => $part['physical'] ?? null,
                        'elemental'  => $part['elemental'] ?? null,
                    ]);
                }
            }

             if (!empty($m['drops'])) {
    foreach ($m['drops'] as $drop) {
        MonsterDrop::create([
            'monster_id' => $monster->id,
            'item_name'  => $drop['item'],
            'item_icon'  => $drop['icon'],
            'target'     => $drop['target'] ?? null,
            'break'      => $drop['break'] ?? null,
            'carve'      => $drop['carve'] ?? null,
            'wound'      => $drop['wound'] ?? null,
        ]);
    }
}


        }
    }
}