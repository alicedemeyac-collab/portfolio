<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alice Demey – Portfolio</title>
    <meta name="description" content="Portfolio d'Alice Demey, étudiante en BUT Informatique, à la recherche d'un stage de développement.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Orbitron:wght@500;700&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/devicon@2.17.0/devicon.min.css">
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}">
</head>
<body>

<svg width="0" height="0" style="position:absolute" aria-hidden="true">
    <symbol id="i-age" viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></symbol>
    <symbol id="i-tel" viewBox="0 0 24 24"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></symbol>
    <symbol id="i-mail" viewBox="0 0 24 24"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-10 6L2 7"/></symbol>
    <symbol id="i-adresse" viewBox="0 0 24 24"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></symbol>
    <symbol id="i-mobilite" viewBox="0 0 24 24"><path d="M5 17H3v-4l2-6h14l2 6v4h-2M3 13h18"/><circle cx="7" cy="17" r="2"/><circle cx="17" cy="17" r="2"/></symbol>
    <symbol id="i-lien" viewBox="0 0 24 24"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></symbol>
    <symbol id="i-linkedin" viewBox="0 0 24 24"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></symbol>
    <symbol id="i-cv" viewBox="0 0 24 24"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4M7 10l5 5 5-5M12 15V3"/></symbol>
    <symbol id="i-github" viewBox="0 0 24 24"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"/></symbol>
    <symbol id="i-bureautique" viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><path d="M14 2v6h6M16 13H8M16 17H8M10 9H8"/></symbol>
</svg>

<header>
    <div class="conteneur">
        <a class="logo" href="{{ route('portfolio') }}">Alice Demey</a>
        <nav aria-label="Navigation principale">
            <ul>
                <li><a href="#profil">Profil</a></li>
                <li><a href="#projets">Projets</a></li>
                <li><a href="#formation">Formation</a></li>
                <li><a href="#experiences">Expériences</a></li>
                <li><a href="#competences">Compétences</a></li>
                <li><a href="#outils">Outils</a></li>
                <li><a href="#langues">Langues</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

<main>
    <div class="conteneur accueil">
        <div class="binaire" aria-hidden="true">01000001 01101100 01101001
            01100011 01100101 00100000
            01000100 01100101 01101101
            01100101 01111001 00100000
            01100100 01100101 01110110</div>
        <p class="etiquette">Portfolio</p>
        <h1>Étudiante en BUT Informatique, je développe des applications.</h1>
        <p>Je cherche un stage de développement de 8 à 10 semaines à partir d'avril 2027, dans les Hauts-de-France.</p>
        <div class="boutons">
            <a class="bouton plein" href="#projets">Voir mes projets</a>
            <a class="bouton vide" href="{{ asset($contact['cv']) }}">Télécharger mon CV</a>        </div>
    </div>

    <section id="profil">
        <div class="conteneur">
            <h2>Profil</h2>
            <div class="profil">
                @if ($profil['photo'])
                    <img class="photo" src="{{ asset($profil['photo']) }}" alt="Portrait d'Alice Demey">
                @endif
                <div>
                    @foreach ($profil['texte'] as $paragraphe)
                        <p>{{ $paragraphe }}</p>
                    @endforeach
                </div>
                <ul class="infos">
                    @foreach ($profil['infos'] as $info)
                        <li>
                            <span class="label">{{ $info['label'] }}</span>
                            <svg class="icone" aria-hidden="true"><use href="#i-{{ $info['icone'] }}"/></svg>
                            <span class="valeur">
                                @if (!empty($info['lien']))
                                    <a href="{{ $info['lien'] }}">{{ $info['valeur'] }}</a>
                                @else
                                    {{ $info['valeur'] }}
                                @endif
                            </span>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>

    <section id="projets">
        <div class="conteneur">
            <h2>Projets</h2>
            <div class="projets">
                @foreach ($projets as $projet)
                    <article class="projet">
                        <div class="capture">
                            @if ($projet['image'])
                                <img src="{{ asset($projet['image']) }}" alt="Capture de {{ $projet['titre'] }}">
                            @else
                                Capture d'écran à ajouter
                            @endif
                        </div>
                        <h3>{{ $projet['titre'] }}</h3>
                        <p>{{ $projet['description'] }}</p>
                        <ul class="technos">
                            @foreach ($projet['technos'] as $techno)
                                <li>{{ $techno }}</li>
                            @endforeach
                        </ul>
                        <div class="liens"><a href="{{ $projet['lien'] }}">Code source</a></div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <section id="formation">
        <div class="conteneur">
            <h2>Formation</h2>
            <ul class="parcours">
                @foreach ($formations as $f)
                    <li>
                        <h3>{{ $f['titre'] }}</h3>
                        <p class="periode">{{ $f['periode'] }}</p>
                        <p>{{ $f['texte'] }}</p>
                        @if (!empty($f['lien']))
                            <a class="bouton vide" href="{{ $f['lien'] }}" target="_blank" rel="noopener">Présentation de la formation</a>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    <section id="experiences">
        <div class="conteneur">
            <h2>Expériences personnelles</h2>
            <ul class="parcours">
                @foreach ($experiences as $e)
                    <li>
                        <h3>{{ $e['titre'] }}</h3>
                        <p class="periode">{{ $e['periode'] }}</p>
                        <p>{{ $e['texte'] }}</p>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    <section id="competences">
        <div class="conteneur">
            <h2>Compétences</h2>
            <div class="competences">
                @foreach ($competences as $titre => $liste)
                    <div>
                        <h3>{{ $titre }}</h3>
                        <ul class="logos">
                            @foreach ($liste as $c)
                                <li>
                                    @if ($c['icone'])<i class="{{ $c['icone'] }}" aria-hidden="true"></i>@endif
                                    {{ $c['nom'] }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="outils">
        <div class="conteneur">
            <h2>Outils informatiques</h2>
            <ul class="logos">
                @foreach ($outils as $o)
                    <li>
                        @if (!empty($o['icone']))
                            <i class="{{ $o['icone'] }}" aria-hidden="true"></i>
                        @elseif (!empty($o['svg']))
                            <svg class="icone-logo" aria-hidden="true"><use href="#{{ $o['svg'] }}"/></svg>
                        @endif
                        {{ $o['nom'] }}
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

    <section id="langues">
        <div class="conteneur">
            <h2>Langues</h2>
            <div class="langues">
                @foreach ($langues as $l)
                    <div>
                        <h3>{{ $l['langue'] }}</h3>
                        <span class="niveau">{{ $l['niveau'] }}</span>
                        @if (!empty($l['detail']))
                            <p>{{ $l['detail'] }}</p>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="contact">
        <div class="conteneur">
            <h2>Contact</h2>
            <p>{{ $contact['texte'] }}</p>
            <ul class="criteres">
                @foreach ($contact['criteres'] as $label => $valeur)
                    <li><span class="label">{{ $label }}</span><span>{{ $valeur }}</span></li>
                @endforeach
            </ul>
            <div class="boutons">
                <a class="bouton plein" href="mailto:{{ $contact['email'] }}">
                    <svg class="icone-bouton" aria-hidden="true"><use href="#i-mail"/></svg>
                    {{ $contact['email'] }}
                </a>
                <a class="bouton vide" href="{{ asset($contact['cv']) }}" download>
                    <svg class="icone-bouton" aria-hidden="true"><use href="#i-cv"/></svg>
                    Télécharger mon CV
                </a>
                <a class="bouton vide bouton-icone" href="{{ $contact['linkedin'] }}" target="_blank" rel="noopener" aria-label="LinkedIn (nouvel onglet)">
                    <svg class="icone-bouton" aria-hidden="true"><use href="#i-linkedin"/></svg>
                </a>
                <a class="bouton vide bouton-icone" href="{{ $contact['github'] }}" target="_blank" rel="noopener" aria-label="GitHub (nouvel onglet)">
                    <svg class="icone-bouton" aria-hidden="true"><use href="#i-github"/></svg>
                </a>
            </div>
        </div>
    </section>
</main>
<footer>
    <div class="conteneur">Alice Demey – BUT Informatique, IUT d'Artois à Lens</div>
</footer>

</body>
</html>
