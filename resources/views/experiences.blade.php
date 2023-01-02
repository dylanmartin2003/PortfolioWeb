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
<body class="bg-black bottom">
<div class="container-fluid top bottom">
    <p id="p_circle" class="text-center"><i class="bi bi-circle-fill blanc circle"></i><i class="bi bi-circle-fill grey circle"></i><i class="bi bi-circle-fill grey circle"></i></p>
    <div>
        <p class="text-center grey"><a href="{{route('logiciels')}}"><i class="bi bi-arrow-left-square marg2"></i></a>LOGICIELS<strong class="blanc title fw-bold marg">EXPERIENCES</strong>COMPÉTENCES<a href="{{route('competences')}}"><i class="bi bi-arrow-right-square marg2"></i></a></p>
    </div>
</div>
<div class="container py-5">
    <div class="main-timeline-4 text-white">
        <div class="timeline-4 left-4">
            <div class="card gradient-custom">
                <div class="card-body p-4">
                    <i class="fas fa-palette fa-2x mb-3"></i>
                    <h4>Septembre 2021</h4>
                    <p class="small text-white-50 mb-4">IUT Lens - Universite d'Artois</p>
                    <p>
                        Début de mon BUT informatique, parcours Conception et Développement d'application.
                    </p>
                    <h6 class="badge bg-light text-black mb-0">BUT</h6>
                </div>
            </div>
        </div>
        <div class="timeline-4 right-4">
            <div class="card gradient-custom-4">
                <div class="card-body p-4">
                    <i class="fas fa-laugh-beam fa-2x mb-3"></i>
                    <h4>Juin 2021</h4>
                    <p class="small text-white-50 mb-4">Lycée polyvalent d'Artois, Noeux-les-Mines</p>
                    <p>
                        Obtention d'un Baccalauréat générale mention assez bien avec spécialité Numérique et sciences informatiques et Mathématiques.
                    </p>
                    <h6 class="badge bg-light text-black mb-0">Baccalauréat</h6>
                </div>
            </div>
        </div>
        <div class="timeline-4 left-4">
            <div class="card gradient-custom">
                <div class="card-body p-4">
                    <i class="fas fa-palette fa-2x mb-3"></i>
                    <h4>Juin 2018</h4>
                    <p class="small text-white-50 mb-4">Collège Blaise Pascal, Mazingarbe</p>
                    <p>
                        Réalisation d'un projet d'aménagement du territoire avec Sciences Po et le département. Lors de ce projet, j'ai pu expérimenté le travail d'équipe dans un projet à grande échelle, avec des délais stricts.
                    </p>
                </div>
            </div>
        </div>
        <div class="timeline-4 right-4">
            <div class="card gradient-custom-4">
                <div class="card-body p-4">
                    <i class="fas fa-laugh-beam fa-2x mb-3"></i>
                    <h4>Janvier 2018</h4>
                    <p class="small text-white-50 mb-4">Collège Blaise Pascal, Mazingarbe</p>
                    <p>
                        Découverte du milieu professionnel lors de mon stage de 3ème.
                    </p>
                    <h6 class="badge bg-light text-black mb-0">Stage</h6>
                </div>
            </div>
        </div>
    </div>
</div>
<a class="left" href="{{route('apropos')}}"><button class="btn btn-outline-light bottom"><strong class="blue ">FERMER</strong></button></a>
</body>
</html>
