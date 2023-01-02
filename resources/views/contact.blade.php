<x-layout titre="Contact">
    <div class="container-fluid">
        @if($msg=="Le message a été envoyé !")
            <div class="alert alert-success top alert-dismissible fade show" role="alert">
                {{$msg}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @elseif($msg=="Le message n'a pas pu être envoyé !")
            <div class="alert alert-danger top alert-dismissible fade show" role="alert">
                {{$msg}}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <section class="mb-4">
            <h2 class="h1-responsive font-weight-bold text-center my-4">Contact</h2>
            <p class="text-center w-responsive mx-auto mb-5">Vous avez des questions ? Contactez-moi.</p>
            <div class="row">
                <div class="col-md-9 mb-md-0 mb-5">
                    <form id="contact-form" name="contact-form" action="{{route('send')}}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <label for="name" class="">Nom</label>
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Votre nom">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <label for="email" class="">Email</label>
                                    <input type="text" id="email" name="email" class="form-control" placeholder="Votre email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                @if($projet==" ")
                                    <div class="md-form mb-0">
                                        <label for="subject" class="">Objet</label>
                                        <input type="text" id="subject" name="subject" class="form-control" placeholder="Votre objet">
                                    </div>
                                @else
                                    <div class="md-form mb-0">
                                        <label for="subject" class="">Objet</label>
                                        <input type="text" id="subject" name="subject" class="form-control" placeholder="Votre objet" value="{{$projet}}">
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form">
                                    <label for="message">Message</label>
                                    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" placeholder="Votre message"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="text-center text-md-left top">
                            <button type="" class="btn btn-danger">Cancel</button>
                            <button type="submit" class="btn btn-success">Envoyer</button>
                        </div>
                        <div class="status"></div>
                    </form>
                </div>
                <div class="col-md-3 text-center">
                    <ul class="list-unstyled mb-0">
                        <li><i class="bi bi-geo-alt-fill"></i>
                            <p>Mazingarbe 62670, France</p>
                        </li>

                        <li><i class="bi bi-phone mt-4 bi-2x"></i>
                            <p>07 68 39 42 71</p>
                        </li>

                        <li><i class="bi bi-envelope mt-4 bi-2x"></i>
                            <p>martindylan0406@gmail.com</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
</x-layout>
