<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/style.css">
    @vite(['resources/css/style.css'])
    <title>Compétences</title>
</head>
<body class="bg-black">
<div class="container-fluid top">
    <p id="p_circle" class="text-center"><i class="bi bi-circle-fill grey circle"></i><i class="bi bi-circle-fill grey circle"></i><i class="bi bi-circle-fill blanc circle"></i></p>
    <div>
        <p class="text-center grey"><a href="{{route('competences')}}"><i class="bi bi-arrow-left-square marg2"></i></a>COMPÉTENCES<strong class="blanc title fw-bold marg">LOGICIELS</strong>EXPERIENCES<a href="{{route('experiences')}}"><i class="bi bi-arrow-right-square marg2"></i></a></p>
    </div>
    <div class="container-fluid top text-center">
        <div class="row row-cols-1 row-cols-md-3 g-4 top">
            <div class="col">
                <p>
                    <a data-bs-toggle="collapse" href="#jetbrain" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <img src="{{url('/storage/images/jetbrain.jpg')}}" class="rounded img-icon" alt="jetbrain">
                    </a>
                </p>
                <div class="collapse" id="jetbrain">
                    <div class="card card-body">
                        JetBrains est un éditeur de logiciels pour développeurs
                    </div>
                </div>
            </div>
            <div class="col">
                <p>
                    <a data-bs-toggle="collapse" href="#git" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <img src="{{url('/storage/images/git.png')}}" class="rounded img-icon" alt="git">
                    </a>
                </p>
                <div class="collapse" id="git">
                    <div class="card card-body">
                        Git est un logiciel de gestion de versions décentralisé. C'est un logiciel libre et gratuit, créé en 2005 par Linus Torvalds, auteur du noyau Linux, et distribué selon les termes de la licence publique générale GNU version 2. Le principal contributeur actuel de Git, et ce depuis plus de 16 ans, est Junio C Hamano.
                    </div>
                </div>
            </div>
            <div class="col">
                <p>
                    <a data-bs-toggle="collapse" href="#vscode" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <img src="{{url('/storage/images/vscode.png')}}" class="rounded img-icon" alt="git">
                    </a>
                </p>
                <div class="collapse" id="vscode">
                    <div class="card card-body">
                        Visual Studio Code est un éditeur de code extensible développé par Microsoft pour Windows, Linux et macOS. Les fonctionnalités incluent la prise en charge du débogage, la mise en évidence de la syntaxe, la complétion intelligente du code, les snippets, la refactorisation du code et Git intégré.
                    </div>
                </div>
            </div>
            <div class="col">
                <p>
                    <a data-bs-toggle="collapse" href="#eclipse" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <img src="{{url('/storage/images/eclipse.png')}}" class="rounded img-icon" alt="git">
                    </a>
                </p>
                <div class="collapse" id="eclipse">
                    <div class="card card-body">
                        Eclipse est un projet, décliné et organisé en un ensemble de sous-projets de développements logiciels, de la fondation Eclipse visant à développer un environnement de production de logiciels libre qui soit extensible, universel et polyvalent, en s'appuyant principalement sur Java.
                    </div>
                </div>
            </div>
            <div class="col">
                <p>
                    <a data-bs-toggle="collapse" href="#fedora" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <img src="{{url('/storage/images/fedora.png')}}" class="rounded img-icon" alt="git">
                    </a>
                </p>
                <div class="collapse" id="fedora">
                    <div class="card card-body">
                        Fedora Linux est un système d’exploitation libre et une distribution Linux communautaire développée par le projet Fedora et sponsorisée par l’entreprise Red Hat, qui lui fournit des développeurs ainsi que des moyens financiers et logistiques.
                    </div>
                </div>
            </div>
            <div class="col">
                <p>
                    <a data-bs-toggle="collapse" href="#adobe" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <img src="{{url('/storage/images/adobe.png')}}" class="rounded img-icon" alt="git">
                    </a>
                </p>
                <div class="collapse" id="adobe">
                    <div class="card card-body">
                        Adobe Inc. ou Adobe, anciennement Adobe Systems est une entreprise informatique éditant des logiciels graphiques dont InDesign, Acrobat, Photoshop, Illustrator et Flash. La société a également édité des logiciels de montage vidéo et audio.
                    </div>
                </div>
            </div>
            <div class="col">
                <p>
                    <a data-bs-toggle="collapse" href="#office" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <img src="{{url('/storage/images/office.png')}}" class="rounded img-icon" alt="git">
                    </a>
                </p>
                <div class="collapse" id="office">
                    <div class="card card-body">
                        Microsoft 365, anciennement Office 365, est la marque désignant un abonnement à la dernière version de Microsoft Office et à un ensemble de services Cloud, par opposition aux licences dites perpétuelles qui s'installent pour une durée indéterminée sur un seul ordinateur à la fois.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<a class="left" href="{{route('apropos')}}"><button class="btn btn-outline-light bottom untop"><strong class="blue ">FERMER</strong></button></a>
</body>
</html>
