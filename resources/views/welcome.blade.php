<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if (session('message'))
                    <div class="alert alert-success my-0">
                        {{ session('message') }}
                    </div>
                @endif
                @if (session('alert'))
                    <div class="alert alert-danger my-0">
                        {{ session('alert') }}
                    </div>
                @endif

                <div id="carouselExampleFade" class="carousel slide carousel-fade mb-5" data-bs-ride="carousel"
                    data-bs-interval="5000">
                    <div class="carousel-inner">
                        @foreach ($carouselArticles as $article)
                            <div class="carousel-item {{ $loop->first ? 'active' : '' }} position-relative">
                                <img src="{{ Storage::url($article->image) }}" class="d-block w-100" alt="">
                                <div
                                    class="carousel-custom d-flex flex-column align-items-center justify-content-end pb-4">
                                    <h2 class="text-center m-0">{{ $article->title }} - {{ $article->type->name }}
                                    </h2>
                                    <p class="mb-2">Autore: {{ $article->user->name }}</p>
                                    <a href="{{ route('article.show', $article) }}"
                                        class="btn button-car transition mx-4">Leggi</a>
                                </div>
                            </div>
                        @endforeach

                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>

                <div class="container mt-5">
                    <div class="row justify-content-evenly">
                        @foreach ($articles as $article)
                            <x-card-home :article="$article" />
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-layout>
