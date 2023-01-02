<x-layout titre="{{$projet->titre}}">
    <div class="container-fluid">
        <div id="carouselExampleIndicators" class="carousel carousel-dark slide top" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <img src="{{url('/storage/'.$projet->img1)}}" class="d-block w-100" alt="...">
                    </div>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item">
                        <div class="container">
                            <img src="{{url('/storage/'.$projet->img2)}}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <img src="{{url('/storage/'.$projet->img3)}}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container text-lg-center">
                            <img src="{{url('/storage/'.$projet->img4)}}" class="d-block w-100" alt="...">
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next bl" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="container-fluid">
            <p class="text-center">{{$projet->desc}}</p>
        </div>
        <div class="bottom text-center top">
            <a href="{{route('projets.index')}}"><button type="button" class="btn btn-primary">Retour à la liste des projets</button></a>
            <a target="_blank" href="{{$projet->lien}}"><button type="button" class="btn btn-primary"><i class="bi bi-git blanc"></i> Voir le projet</button></a>
            <a href="{{route('contact',str("Projet ".$projet->titre))}}"><button type="button" class="btn btn-primary"><i class="bi bi-envelope blanc"></i> Me contacter pour ce projet</button></a>
        </div>
    </div>
</x-layout>
