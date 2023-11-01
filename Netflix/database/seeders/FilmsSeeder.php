<?php
 
namespace Database\Seeders;
 
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
 
class FilmsSeeder extends Seeder
{
    public function run(): void
    {

        DB::table('films')->insert([
            [
                'id' => 1,
                'titre' => 'Scott Pilgrim vs. the World',
                'resumer' => 'Scott Pilgrim vs. the World est une comédie canado-américano-britannico-japonaise',
                'duree' => 112,
                'annee' => 2010,
                'realisateur' => 1,
                'producteur' => 1,
                'lienFilm' => 1,
                'pochetteURL' => 'https://th.bing.com/th/id/OIP.6FYMlvP9amgL4K2KxkiwvgHaKO?w=198&h=274&c=7&r=0&o=5&pid=1.7',
                'rating' => 82,
                'type_id' => 1,
            ],
            [
                'id' => 2,
                'titre' => 'Whiplash',
                'resumer' => 'Whiplash est un film dramatique américain',
                'duree' => 106,
                'annee' => 2014,
                'realisateur' => 2,
                'producteur' => 2,
                'lienFilm' => 2,
                'pochetteURL' => 'https://th.bing.com/th/id/OIP.GaeD0arCSn1Nn8wFJH5XyAHaLH?w=121&h=182&c=7&r=0&o=5&pid=1.7',
                'rating' => 94,
                'type_id' => 2,
            ],
            [
                'id' => 3,
                'titre' => 'Interstellar',
                'resumer' => 'Interstellar est un film de Christopher Nolan qui raconte les aventures d un groupe d explorateurs qui utilise un trou de ver ou une faille dans lespace-temps pour parcourir des distances astronomiques et trouver un nouveau foyer pour l humanité',
                'duree' => 165,
                'annee' => 2014,
                'realisateur' => 3,
                'producteur' => 3,
                'lienFilm' => 3,
                'pochetteURL' => 'https://m.media-amazon.com/images/M/MV5BZjdkOTU3MDktN2IxOS00OGEyLWFmMjktY2FiMmZkNWIyODZiXkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_.jpg',
                'rating' => 73,
                'type_id' => 3,
            ],
            [
                'id' => 4,
                'titre' => 'Tenet',
                'resumer' => 'Muni d un seul mot, Tenet, et décidé à se battre pour sauver le monde, un homme sillonne l univers crépusculaire de l espionnage international.',
                'duree' => 150,
                'annee' => 2020,
                'realisateur' => 4,
                'producteur' => 4,
                'lienFilm' => 4,
                'pochetteURL' => 'https://m.media-amazon.com/images/M/MV5BOTU4ZmNmMTktYzRkYS00Njc1LTg3ZjQtNDY4MmM0MTE5ZjhmXkEyXkFqcGdeQXVyMTA3MDk2NDg2._V1_.jpg',
                'rating' => 69,
                'type_id' => 4,
            ],
            [
                'id' => 5,
                'titre' => 'Flash',
                'resumer' => 'Homme le plus rapide du monde,Flash decide de changer les evenements du passe pour sauver sa mere mais tout ne se deroule pas comme prevu',
                'duree' => 144,
                'annee' => 2023,
                'realisateur' => 5,
                'producteur' => 5,
                'lienFilm' => 5,
                'pochetteURL' => 'https://m.media-amazon.com/images/M/MV5BZWE2ZWE5MDQtMTJlZi00MTVjLTkxOTgtNmNiYjg2NDIxN2NhXkEyXkFqcGdeQXVyMTUzMTg2ODkz._V1_.jpg',
                'rating' => 63,
                'type_id' => 5,
            ],
            [
                'id' => 6,
                'titre' => 'mortal Kombat',
                'resumer' => 'Dans « Mortal Kombat », le combattant de MMA Cole Young, habitué à prendre des coups pour de l’argent, n’est pas au courant de son héritage - ou pourquoi l’empereur de l’Outre-Monde Shang Tsung a envoyé son meilleur guerrier, Sub-Zero, un cryomancien d’un autre monde, pour traquer Cole.',
                'duree' => 110,
                'annee' => 2021,
                'realisateur' => 6,
                'producteur' => 6,
                'lienFilm' => 6,
                'pochetteURL' => 'https://m.media-amazon.com/images/M/MV5BY2ZlNWIxODMtN2YwZi00ZjNmLWIyN2UtZTFkYmZkNDQyNTAyXkEyXkFqcGdeQXVyODkzNTgxMDg@._V1_.jpg',
                'rating' => 55,
                'type_id' => 6,
            ],
            [
                'id' => 7,
                'titre' => 'Prey',
                'resumer' => 'Il y a trois siècles sur le territoire des Comanches, Naru, une farouche et brillante guerrière, se fait désormais un devoir de protéger sa tribu dès qu\'un danger la menace. Elle découvre que la proie qu\'elle traque en ce moment n\'est autre qu\'un prédateur extraterrestre particulièrement évolué doté d\'un arsenal de pointe des plus sophistiqués. Une confrontation aussi perverse que terrifiante s\'engage bientôt entre les deux adversaires.',
                'duree' => 106,
                'annee' => 2014,
                'realisateur' => 7,
                'producteur' => 7,
                'lienFilm' => 7,
                'pochetteURL' => 'https://th.bing.com/th/id/R.064062682c34025ea067c710c3269dc8?rik=cPowMT6mWxlaiA&riu=http%3a%2f%2fsharethegoodnews.org%2fwp-content%2fuploads%2f2022%2f08%2f5-reasons-to-see-Prey-the-new-and-great-Predator.jpeg&ehk=KHBqSO3x74sNu1hgAdfAO6VnaChmllVYstW6gb95Cs0%3d&risl=&pid=ImgRaw&r=0',
                'rating' => 94,
                'type_id' => 7,
            ],
            [
                'id' => 8,
                'titre' => 'Birdemic 3',
                'resumer' => 'une armee d oiseau attaque la ville de santa cruz, qui va survivre ? ',
                'duree' => 106,
                'annee' => 2014,
                'realisateur' => 8,
                'producteur' => 8,
                'lienFilm' => 8,
                'pochetteURL' => 'https://www.voicesfromthebalcony.com/wp-content/uploads/2022/09/Birdemic-3-Sea-Eagle-Poster.jpg',
                'rating' => 17,
                'type_id' => 8,
            ],
            [
                'id' => 9,
                'titre' => 'Alita',
                'resumer' => 'Se passant plusieurs siecles dans le futur,la petite Alita est trouve dans les decharges de Iron City par ido,un cyber-docteur passione et prends soin de la cyborg inconsciente dans sa clinique ',
                'duree' => 122,
                'annee' => 2019,
                'realisateur' => 9,
                'producteur' => 9,
                'lienFilm' => 9,
                'pochetteURL' => 'https://th.bing.com/th/id/R.ff7394c2143acd6f4f777f2f05e42885?rik=JUyg4UZWvRzCmg&pid=ImgRaw&r=0',
                'rating' => 62,
                'type_id' => 9,
            ]
            ,
            [
                'id' => 10,
                'titre' => 'THE MATRIX',
                'resumer' => 'Neo(Shany Carl) pense que Morpheus(Laurence Fishburne),une image representant l  homme le plus dangereux du monde,peut repondre a sa question -- Qu est ce que la Matrice?',
                'duree' => 136,
                'annee' => 1999,
                'realisateur' => 10,
                'producteur' => 10,
                'lienFilm' => 10,
                'pochetteURL' => 'https://m.media-amazon.com/images/I/613ypTLZHsL._AC_UF1000,1000_QL80_.jpg',
                'rating' => 83,
                'type_id' => 10,
            ]
 
        ]);  
    }
}
 
