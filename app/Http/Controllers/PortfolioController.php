<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    public function index()
    {

        // À MODIFIER : ta présentation et tes infos. 'lien' est facultatif.
        $profil = [
            'texte' => [
                'Étudiante en deuxième année de BUT Informatique, j\'aime concevoir des applications du début à la fin, de la base de données à l\'interface.',
                'Ajoute ici une phrase sur ce qui te motive ou ce que tu veux apprendre.',
            ],
            'infos' => [
                ['label' => 'Âge',       'icone' => 'age',      'valeur' => '19 ans'],
                ['label' => 'Téléphone', 'icone' => 'tel',      'valeur' => '+33 6 51 43 72 31', 'lien' => 'tel:+33600000000'],
                ['label' => 'Mail',      'icone' => 'mail',     'valeur' => 'alicedemeyac@gmail.com', 'lien' => 'mailto:alicedemeyac@gmail.com'],
                ['label' => 'Adresse',   'icone' => 'adresse',  'valeur' => 'Lens'],
                ['label' => 'Mobilité',  'icone' => 'mobilite', 'valeur' => 'Hauts-de-France'],
                ['label' => 'GitHub',    'icone' => 'lien',     'valeur' => 'github.com/alicedemey', 'lien' => 'https://github.com/alicedemeyac-collab'],
                ['label' => 'LinkedIn',  'icone' => 'linkedin', 'valeur' => 'Alice Demey', 'lien' => 'https://www.linkedin.com/in/alice-demey'],
            ],
            'photo' => null,
        ];

        // À MODIFIER : tout le contenu du site est ici, la vue n'a pas besoin d'être touchée.
        $projets = [
            [
                'titre' => 'Pac-Man',
                'description' => 'Jeu Pac-Man réalisé pour le cours d\'IHM. Intégration de l\'architecture MVC : modèles, vues, contrôleur',
                'technos' => ['Java', 'JavaFX'],
                'image' => 'images/pacman.png',
                'lien' => 'https://github.com/alicedemeyac-collab/pac-man',
            ],
            [
                'titre' => 'Puissance 4',
                'description' => 'Un jeu de Puissance 4 (Four in a line) développé en Java avec JavaFX, jouable à deux ou seul contre un ordinateur dont l\'intelligence artificielle.',
                'technos' => ['Java', 'JavaFX'],
                'image' => 'images/puissance4.png',
                'lien' => 'https://github.com/alicedemeyac-collab/Puissance_4',
            ],
            [
                'titre' => 'Sudoku',
                'description' => 'Application web en architecture MVC du jeu Sudoku. Différents niveaux de difficultés sont prévus en fonction du choix du joueur',
                'technos' => ['PHP', 'BladeOne', 'Bootstrap'],
                'image' => 'images/sudoku.png',
                'lien' => 'https://github.com/ton-pseudo/first-app-web',
            ],
            [
                'titre' => 'Lights-Off',
                'description' => 'Jeu du Lights-Off. Le but : éteindre toutes les lumières de la grille. Cliquer sur une lumière inverse son état ainsi que celui de ses quatre voisines (haut, bas, gauche, droite).',
                'technos' => ['Java', 'JavaFX'],
                'image' => 'images/lights-off.png',
                'lien' => 'https://github.com/alicedemeyac-collab/Ligths-Off',
            ],
        ];

        $formations = [
            [
                'titre' => 'BUT Informatique',
                'periode' => '2025 – en cours · IUT d\'Artois, Lens',
                'texte' => 'Développement d\'applications, bases de données, programmation orientée objet, IHM.',
                'lien' => 'https://formations.univ-artois.fr/fr/formations/feuilleter-le-catalogue/but-DR/but-informatique-LJ6VA387.html', // À MODIFIER
            ],
            [
                'titre' => 'Baccalauréat général',
                'periode' => '2025 · Lycée Jean-Bart, Dunkerque',
                'texte' => 'Spécialité mathématiques, physique-chimie, NSI (Numérique et Science de l\'Informatique. Section européenne anglais, et obtention de la certification Cambridge.',
            ],
        ];

        $experiences = [
            ['titre' => 'Emploi saisonnier : agent entretien espace vert', 'periode' => 'juin 2026-juillet 2026 · Dunkerque', 'texte' => 'Découverte d\'outils d\'entretien dédié aux espaces vert.Apprentissage du travail en équipe dans le milieu professionne.'],
        ];

        $competences = [
            'Langages' => [
                ['nom' => 'Java',     'icone' => 'devicon-java-plain'],
                ['nom' => 'PHP',      'icone' => 'devicon-php-plain'],
                ['nom' => 'SQL',      'icone' => null],
                ['nom' => 'PL/pgSQL', 'icone' => 'devicon-postgresql-plain'],
                ['nom' => 'Python',   'icone' => 'devicon-python-plain'],
                ['nom' => 'HTML',     'icone' => 'devicon-html5-plain'],
                ['nom' => 'CSS',      'icone' => 'devicon-css3-plain'],
            ],
            'Frameworks et outils' => [
                ['nom' => 'Laravel', 'icone' => 'devicon-laravel-original'],
                ['nom' => 'JavaFX',  'icone' => null],
                ['nom' => 'Git',     'icone' => 'devicon-git-plain'],
            ],
            'Systèmes d\'exploitation' => [
                ['nom' => 'Linux',   'icone' => 'devicon-linux-plain'],
                ['nom' => 'Windows', 'icone' => 'devicon-windows11-original'],
            ],
            'Méthodes' => [
                ['nom' => 'Programmation orientée objet', 'icone' => null],
                ['nom' => 'Architecture MVC',             'icone' => null],
                ['nom' => 'Travail en groupe',            'icone' => null],
                ['nom' => 'Méthode agile',                'icone' => null],
            ],
        ];

        // À MODIFIER : ta section contact
        $contact = [
            'texte' => 'Je cherche un stage de développement. Si mon profil vous intéresse, contactez-moi.',
            'criteres' => [
                'Contrat' => 'Stage de 8 à 10 semaines',
                'Début' => 'À partir du 12 avril 2027',
                'Zone' => 'Hauts-de-France',
                'Réponse' => 'Sous 48 h',
            ],
            'email' => 'alicedemeyac@gmail.com',
            'cv' => 'images/CV_2026-10-06_Alice_Demey.pdf',
            'linkedin' => 'https://www.linkedin.com/in/alice-demey',
            'github' => 'https://github.com/alicedemeyac-collab',
        ];

        return view('portfolio', compact('profil', 'projets', 'formations', 'experiences', 'competences', 'contact'));
    }
}
