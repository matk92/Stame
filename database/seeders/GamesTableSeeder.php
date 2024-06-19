<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GamesTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('games')->insert([
            [
                'title' => 'The Legend of Zelda: Breath of the Wild',
                'release_date' => '2017-03-03',
                'genre' => 'Action-Aventure',
                'summary' => 'Un jeu d\'action-aventure en monde ouvert développé par Nintendo.',
                'producer' => 'Nintendo',
                'pegi' => 12,
                'score' => 97,
                'comment' => 'Innovant et captivant, un must-have sur Switch.',
                'cover_image' => '8p6fmM19zgBADkyQkZFlQ6HzGP9525NlorrB37ED.jpg'
            ],
            [
                'title' => 'The Witcher 3: Wild Hunt',
                'release_date' => '2015-05-18',
                'genre' => 'RPG',
                'summary' => 'Un jeu de rôle en monde ouvert basé sur la série de livres The Witcher.',
                'producer' => 'CD Projekt',
                'pegi' => 18,
                'score' => 92,
                'comment' => 'Une aventure épique avec une narration exceptionnelle.',
                'cover_image' => 'KcKdwVnoRsQlVUPEK7erZjhRBXMFFhqZNGJ1SHui.jpg'
            ],
            [
                'title' => 'Dark Souls III',
                'release_date' => '2016-04-12',
                'genre' => 'Action-RPG',
                'summary' => 'Le troisième opus de la série Dark Souls, connu pour sa difficulté.',
                'producer' => 'FromSoftware',
                'pegi' => 16,
                'score' => 89,
                'comment' => 'Difficile mais gratifiant, un chef-d\'œuvre du game design.',
                'cover_image' => 'Gu0RcdLal218TBmktyU4j8qV6b2YYkZG8lFQaML1.jpg'
            ],
            [
                'title' => 'Red Dead Redemption 2',
                'release_date' => '2018-10-26',
                'genre' => 'Action-Aventure',
                'summary' => 'Un jeu d\'action-aventure en monde ouvert développé par Rockstar Games.',
                'producer' => 'Rockstar Games',
                'pegi' => 18,
                'score' => 97,
                'comment' => 'Un monde ouvert immersif et une histoire captivante.',
                'cover_image' => 'SlRzKl6peDEMdm8nYe1yA85J880YOSnbFptoIm0C.jpg'
            ],
            [
                'title' => 'Bloodborne',
                'release_date' => '2015-03-24',
                'genre' => 'Action-RPG',
                'summary' => 'Un jeu d\'action-RPG développé par FromSoftware, connu pour sa difficulté.',
                'producer' => 'FromSoftware',
                'pegi' => 16,
                'score' => 92,
                'comment' => 'Un gameplay exigeant et une atmosphère unique.',
                'cover_image' => 'Apec7UIZAcw0899zw5ZhRMGWg9YZHecNEbNM9pMM.jpg'
            ],
            [
                'title' => 'Horizon Zero Dawn',
                'release_date' => '2017-03-01',
                'genre' => 'Action-RPG',
                'summary' => 'Un jeu d\'action-RPG en monde ouvert développé par Guerrilla Games.',
                'producer' => 'Guerrilla Games',
                'pegi' => 16,
                'score' => 89,
                'comment' => 'Un univers original et des combats dynamiques.',
                'cover_image' => 'aDxAUT0NsqHcdB9rnFyBrcankIkR8ZTgSaJBECUx.jpg'
            ],
            [
                'title' => 'God of War',
                'release_date' => '2018-04-20',
                'genre' => 'Action-Aventure',
                'summary' => 'Un jeu d\'action-aventure mythologique développé par Santa Monica Studio.',
                'producer' => 'Sony Interactive Entertainment',
                'pegi' => 18,
                'score' => 94,
                'comment' => 'Une narration profonde et un combat satisfaisant.',
                'cover_image' => 'WFUUNggHXCAWfT3Xz2LAwMEZ0tHEcw06FnJwe6Rp.jpg'
            ],
            [
                'title' => 'Super Mario Odyssey',
                'release_date' => '2017-10-27',
                'genre' => 'Plateforme',
                'summary' => 'Un jeu de plateforme en 3D développé par Nintendo.',
                'producer' => 'Nintendo',
                'pegi' => 3,
                'score' => 97,
                'comment' => 'Innovant, joyeux, et plein de surprises.',
                'cover_image' => 'JbLwYDRrJuDqaebBZ3HQlLCk4OYM8rrYXdGWbz8L.jpg'
            ],
            [
                'title' => 'Persona 5',
                'release_date' => '2016-09-15',
                'genre' => 'RPG',
                'summary' => 'Un jeu de rôle japonais développé par Atlus.',
                'producer' => 'Atlus',
                'pegi' => 16,
                'score' => 93,
                'comment' => 'Une histoire captivante avec un style visuel unique.',
                'cover_image' => 'kKCh72AQ1JvENstfG6NAsFJ86AXC6iwKhdem5Cb5.jpg'
            ],
            [
                'title' => 'Sekiro: Shadows Die Twice',
                'release_date' => '2019-03-22',
                'genre' => 'Action-Aventure',
                'summary' => 'Un jeu d\'action-aventure développé par FromSoftware.',
                'producer' => 'Activision',
                'pegi' => 18,
                'score' => 90,
                'comment' => 'Difficile, gratifiant, avec un système de combat innovant.',
                'cover_image' => 'JKqD3mpNyV9dkxGzfE1KD219abMywjCDUqkb8b29.jpg'
            ],
            [
                'title' => 'Genshin Impact',
                'release_date' => '2020-09-28',
                'genre' => 'Action-RPG',
                'summary' => 'Un jeu d\'action-RPG en monde ouvert développé par miHoYo.',
                'producer' => 'miHoYo',
                'pegi' => 12,
                'score' => 85,
                'comment' => 'Un monde ouvert magnifique avec beaucoup à explorer.',
                'cover_image' => 'N6NgGDs3LBl8KqYKu52iXLiidKFHfNyHlTlcGxun.jpg'
            ],
            [
                'title' => 'Cyberpunk 2077',
                'release_date' => '2020-12-10',
                'genre' => 'RPG',
                'summary' => 'Un jeu de rôle en monde ouvert développé par CD Projekt.',
                'producer' => 'CD Projekt',
                'pegi' => 18,
                'score' => 76,
                'comment' => 'Ambitieux mais avec un lancement controversé.',
                'cover_image' => 'y3hsq4Dd9NcD9yNvRdOIiSKjng9WPvByEOon3yOg.jpg'
            ],
            [
                'title' => 'Monster Hunter: World',
                'release_date' => '2018-01-26',
                'genre' => 'Action-RPG',
                'summary' => 'Un jeu d\'action-RPG développé par Capcom.',
                'producer' => 'Capcom',
                'pegi' => 16,
                'score' => 90,
                'comment' => 'Chasse de monstres captivante et monde riche.',
                'cover_image' => 'FhWebXfvrfAPvzCVg003zgUC2NU8njAVLqc02Hpm.jpg'
            ],
            [
                'title' => 'Fortnite',
                'release_date' => '2017-07-25',
                'genre' => 'Battle Royale',
                'summary' => 'Un jeu de survie et de construction en battle royale développé par Epic Games.',
                'producer' => 'Epic Games',
                'pegi' => 12,
                'score' => 81,
                'comment' => 'Populaire, compétitif, et constamment mis à jour.',
                'cover_image' => 'Af2G0GmTLRJuizh7fNZEFs7mib8pmsSzWT4aGoeN.jpg'
            ],
            [
                'title' => 'Minecraft',
                'release_date' => '2011-11-18',
                'genre' => 'Sandbox',
                'summary' => 'Un jeu de type sandbox développé par Mojang Studios.',
                'producer' => 'Mojang Studios',
                'pegi' => 7,
                'score' => 93,
                'comment' => 'Créatif, addictif, et avec une grande communauté.',
                'cover_image' => 'cOGYA0gyf7E6mQKLLmIKtz4iV7LXP3xI81OmIjkw.jpg'
            ],
            [
                'title' => 'Overwatch',
                'release_date' => '2016-05-24',
                'genre' => 'FPS',
                'summary' => 'Un jeu de tir à la première personne par équipe développé par Blizzard Entertainment.',
                'producer' => 'Blizzard Entertainment',
                'pegi' => 12,
                'score' => 91,
                'comment' => 'Dynamique, stratégique, avec un fort aspect de jeu en équipe.',
                'cover_image' => 'OOzezN4WXsbfSpbeKaI7MX1yE2Lzxh6dNX4I8Q6j.jpg'
            ],
        ]);
    }
}