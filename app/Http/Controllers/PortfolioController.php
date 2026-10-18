<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    public function index()
    {

        $profil = [
            'texte' => [
                'Étudiante en deuxième année de BUT Informatique à l\'IUT d\'Artois de Lens, parcours développement d\'application.',
                'Je recherche un stage de 8 à 10 semaines à partir de 12 avril 2027 dans le développement informatique.',
                'Ainsi qu\'une alternance pour ma troisième année de BUT, à partir de septembre 2027.',
            ],
            'infos' => [
                ['label' => 'Âge',       'icone' => 'age',      'valeur' => '19 ans'],
                ['label' => 'Téléphone', 'icone' => 'tel',      'valeur' => '+33 6 51 43 72 31', 'lien' => 'tel:+33600000000'],
                ['label' => 'Mail',      'icone' => 'mail',     'valeur' => 'alicedemeyac@gmail.com', 'lien' => 'mailto:alicedemeyac@gmail.com'],
                ['label' => 'Adresse',   'icone' => 'adresse',  'valeur' => 'Lens'],
                ['label' => 'Mobilité',  'icone' => 'mobilite', 'valeur' => 'Hauts-de-France'],
                ['label' => 'Permis',    'icone' => 'mobilite', 'valeur' => 'Permis B'],
                ['label' => 'GitHub',    'icone' => 'lien',     'valeur' => 'github.com/alicedemey', 'lien' => 'https://github.com/alicedemeyac-collab'],
                ['label' => 'LinkedIn',  'icone' => 'linkedin', 'valeur' => 'Alice Demey', 'lien' => 'https://www.linkedin.com/in/alice-demey'],
            ],
            'photo' => null,
        ];

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
            'Frameworks' => [
                ['nom' => 'Laravel', 'icone' => 'devicon-laravel-original'],
                ['nom' => 'JavaFX',  'icone' => null],
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

        $outils = [
            ['nom' => 'IntelliJ IDEA', 'icone' => 'devicon-intellij-plain'],
            ['nom' => 'PhpStorm',      'icone' => 'devicon-phpstorm-plain'],
            ['nom' => 'PyCharm',       'icone' => 'devicon-pycharm-plain'],
            ['nom' => 'VS Code',       'icone' => 'devicon-vscode-plain'],
            ['nom' => 'PostgreSQL',    'icone' => 'devicon-postgresql-plain'],
            ['nom' => 'Pack Office(Word, Excel, PowerPoint)',   'icone' => null, 'svg' => 'i-bureautique'],
            ['nom' => 'Git',           'icone' => 'devicon-git-plain'],
        ];

        $langues = [
            ['langue' => 'Français', 'niveau' => 'Langue maternelle', 'detail' => null],
            ['langue' => 'Anglais',  'niveau' => 'B1 · courant',      'detail' => 'Certification Cambridge'],
            ['langue' => 'Espagnol', 'niveau' => 'A2 · notions', 'detail' => null],
        ];

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

        return view('portfolio', compact('profil', 'projets', 'formations', 'experiences', 'competences', 'outils', 'langues', 'contact'));    }
}
