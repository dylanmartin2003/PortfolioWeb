<x-layout titre="Portfolios MARTIN Dylan">
    <body class="background">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="2000000000000000">
                <img class="carte" src="{{url("/storage/images/carte-1.png")}}">
            </div>
            <div class="carousel-item" data-bs-interval="2000000000000000">
                <svg class="carte" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 3123">
                    <image xlink:href="{{url("/storage/images/carte-2.png")}}" width="1920" height="3123"></image>
                    <a target="_blank" xlink:href="https://gitlab.univ-artois.fr/dylan_martin">
                        <rect x="720" y="389" fill="#fff" opacity="0" width="204" height="193"></rect>
                    </a>
                    <a target="_blank" xlink:href="https://www.linkedin.com/in/dylan-martin-2bb2a7239/">
                        <rect x="979" y="385" fill="#fff" opacity="0" width="209" height="205"></rect>
                    </a>
                    <a target="_blank" xlink:href="{{url("/storage/CV_Dylan_MARTIN_Alternance.pdf")}}">
                        <rect x="472" y="1860" fill="#fff" opacity="0" width="979" height="252"></rect>
                    </a>
                </svg>
            </div>
        </div>
        <button class="carousel-control-prev control1" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next control2" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    </body>
</x-layout>
