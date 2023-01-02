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
<div class="container-fluid top ">
    <p id="p_circle" class="text-center"><i class="bi bi-circle-fill grey circle"></i><i class="bi bi-circle-fill blanc circle"></i><i class="bi bi-circle-fill grey circle"></i></p>
    <div>
        <p class="text-center grey"><a href="{{route('experiences')}}"><i class="bi bi-arrow-left-square marg2"></i></a>EXPERIENCES<strong class="blanc title fw-bold marg">COMPÉTENCES</strong>LOGICIELS<a href="{{route('logiciels')}}"><i class="bi bi-arrow-right-square marg2"></i></a></p>
    </div>
</div>
<svg class="img-fluid comp" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 1080">
    <image width="1920" height="1080" xlink:href="{{url('storage/images/ARBRE_COMPETENCE.png')}}"></image>
    <a <button type="button" data-bs-toggle="modal" data-bs-target="#web"></button> >
        <rect x="376" y="256" fill="#fff" opacity="0" width="152" height="146"></rect>
    </a>
    <a <button type="button" data-bs-toggle="modal" data-bs-target="#java"></button> >
        <rect x="486" y="532" fill="#fff" opacity="0" width="149" height="144"></rect>
    </a>
    <a <button type="button" data-bs-toggle="modal" data-bs-target="#python"></button> >
        <rect x="719" y="685" fill="#fff" opacity="0" width="174" height="154"></rect>
    </a>
    <a <button type="button" data-bs-toggle="modal" data-bs-target="#bash"></button> >
        <rect x="1007" y="689" fill="#fff" opacity="0" width="159" height="150"></rect>
    </a>
    <a <button type="button" data-bs-toggle="modal" data-bs-target="#git"></button> >
        <rect x="1252" y="527" fill="#fff" opacity="0" width="140" height="153"></rect>
    </a>
    <a <button type="button" data-bs-toggle="modal" data-bs-target="#bdd"></button> >
        <rect x="1349" y="259" fill="#fff" opacity="0" width="164" height="151"></rect>
    </a>
</svg>

<div class="modal fade" id="web" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="bi bi-globe"></i> Compétences Web</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>PHP (Laravel)</p>
                <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 60%"></div>
                    <div class="progress-bar bg-black bg-opacity-25" style="width: 40%"></div>
                </div>
                <p>HTML</p>
                <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 80%"></div>
                    <div class="progress-bar bg-black bg-opacity-25" style="width: 20%"></div>
                </div>
                <p>CSS (Bootstrap, Bulma)</p>
                <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 55%"></div>
                    <div class="progress-bar bg-black bg-opacity-25" style="width: 45%"></div>
                </div>
                <p>JavaScript (React)</p>
                <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 20%"></div>
                    <div class="progress-bar bg-black bg-opacity-25" style="width: 80%"></div>
                </div>
                <p></p>
                <p>Le Web est la partie qui me plaît le plus en informatique, actuellement je maîtrise le PHP avec le framework Laravel, HTML, CSS et j'ai des notions en JavaScript et React. </p>
                <p>Vous pouvez retrouver mes projet Web <a href="{{route('projets.index',['comp'=>'web'])}}">ici</a></p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="java" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="bi bi-filetype-java"></i> Compétences Java</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Java</p>
                <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 80%"></div>
                    <div class="progress-bar bg-black bg-opacity-25" style="width: 20%"></div>
                </div>
                <p>Patrons de conceptions</p>
                <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 55%"></div>
                    <div class="progress-bar bg-black bg-opacity-25" style="width: 45%"></div>
                </div>
                <p>JavaFX</p>
                <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 60%"></div>
                    <div class="progress-bar bg-black bg-opacity-25" style="width: 40%"></div>
                </div>
                <p></p>
                <p>Je maîtrise le Java ainsi que le module JavaFX, c'est grâce à ce langage que j'ai pu apprendre l'orientée objet.</p>
                <p>Vous pouvez retrouver mes projet Java <a href="{{route('projets.index',['comp'=>'java'])}}">ici</a></p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="python" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="bi bi-filetype-py"></i> Compétences Python</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Python</p>
                <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-success" style="width: 85%"></div>
                    <div class="progress-bar bg-black bg-opacity-25" style="width: 15%"></div>
                </div>
                <p></p>
                <p>Je maîtrise le Python ainsi que de nombreux modules, le python est le premier langage avec lequel j'ai codé.</p>
                <p>Vous pouvez retrouver mes projet Python <a href="{{route('projets.index',['comp'=>'python'])}}">ici</a></p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="bash" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="bi bi-terminal"></i> Compétences Bash</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Bash</p>
                <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-dark" style="width: 75%"></div>
                    <div class="progress-bar bg-black bg-opacity-25" style="width: 25%"></div>
                </div>
                <p></p>
                <p>Je maîtrise le bash, je peux l'utiliser pour une utilisation basique, mais je peux aussi réaliser des script me permettant d'automatiser des taches.</p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="git" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="bi bi-git"></i> Compétences Git</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Git</p>
                <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning" style="width: 60%"></div>
                    <div class="progress-bar bg-black bg-opacity-25" style="width: 40%"></div>
                </div>
                <p></p>
                <p>J'utilise Git (GitLab) presque tous les jours pour mes projets cela me permet de travailler en équipe ou pouvoir gérer le versionnage de mes projets.</p>
                <p>Vous pouvez retrouver mes projet Git <a target="_blank" href="https://gitlab.univ-artois.fr/dylan_martin">ici</a></p>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="bdd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="bi bi-database"></i> Compétences Base de données</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>PostgreSQL</p>
                <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 80%"></div>
                    <div class="progress-bar bg-black bg-opacity-25" style="width: 20%"></div>
                </div>
                <p>MySQL</p>
                <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 60%"></div>
                    <div class="progress-bar bg-black bg-opacity-25" style="width: 40%"></div>
                </div>
                <p>Sqlite</p>
                <div class="progress" role="progressbar" aria-label="Animated striped example" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                    <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" style="width: 70%"></div>
                    <div class="progress-bar bg-black bg-opacity-25" style="width: 30%"></div>
                </div>
                <p></p>
                <p>Que ce soit pour mes projets personnels ou en tant qu'étudiant, j'utilise des bases de données pour une grande partie de mes projets Web, j'utilise essentiellement Sqlite (rapide et léger) et PostgreSQL, mais je connais aussi MySQL.</p>
            </div>
        </div>
    </div>
</div>
<a class="left" href="{{route('apropos')}}"><button class="btn btn-outline-light bottom untop"><strong class="blue ">FERMER</strong></button></a>
</body>
</html>
