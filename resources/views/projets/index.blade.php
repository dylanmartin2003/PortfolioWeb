<x-layout titre="Mes Projets">
    <div class="container-fluid top bottom">
        <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach($projets as $projet)
            <div class="col">
                <div class="card h-100">
                    <a href="{{route('projets.show',$projet->id)}}"><img src="{{url('/storage/'.$projet->img1)}}" class="card-img-top" alt="Image projet"></a>
                    <div class="card-body">
                        <h5 class="card-title">{{$projet->titre}}</h5>
                        <a href=""><span class="badge {{$projet->tag1}}">{{$projet->tag1}}</span></a>
                        <a href=""><span class="badge {{$projet->tag2}}">{{$projet->tag2}}</span></a>
                        <a href=""><span class="badge {{$projet->tag3}}">{{$projet->tag3}}</span></a>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</x-layout>
