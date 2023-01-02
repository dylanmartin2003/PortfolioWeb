<nav class="navbar navbar-expand-lg bg-black navbar-dark">
        <div class="container-fluid ">
            <a class="navbar-brand" href="{{route('home')}}"><i class="bi bi-house-door"> Accueil</i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="{{route('apropos')}}">A Propos</a>
                    <a class="nav-link" href="{{route('projets.index',['comp'=>" "])}}">Mes Projets</a>
                    <a class="nav-link" href="{{route('contact',['projet'=>" "])}}">Contact</a>
                </div>
            </div>
            <a class="nav-link justify-content-end" target="_blank" href="https://www.linkedin.com/in/dylan-martin-2bb2a7239/"><i class="bi bi-linkedin blanc"></i></a>ㅤ
            <a class="nav-link justify-content-end" target="_blank" href="https://gitlab.univ-artois.fr/dylan_martin"><i class="bi bi-git blanc"></i></a>
        </div>
</nav>
