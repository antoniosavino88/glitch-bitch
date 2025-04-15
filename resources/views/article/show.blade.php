<x-layout>
    <div class="container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1 text-title">{{ $article->title }}</h1>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 d-flex flex-column">
                <img src="{{ Storage::url($article->image) }}" class="img-fluid"
                    alt="Immagine dell'articolo: {{ $article->title }}">
                <div class="text-center">
                    <h2>{{ $article->subtitle }}</h2>
                    @if ($article->category)
                        <p class="fs-5">Categoria:
                            <a href="{{ route('article.byCategory', $article->category) }}"
                                class="text-capitalize fw-bold">{{ $article->category->name }}</a>
                        </p>
                    @else
                        <p class="fs-5">Nessuna categoria</p>
                    @endif
                </div>
                <div class="my-3">
                    <p class="card-subtitle fst-italic small">tempo di lettura {{ $article->readDuration() }}
                        min
                    </p>
                    <p class="small">Redatto il {{ $article->created_at->format('d/m/Y') }}<br>
                        da <a class="text-capitalize "
                            href="{{ route('article.byUser', $article->user) }}">{{ $article->user->name }}</a>
                    </p>
                    <p class="small my-0">
                        <span class="fw-bold">Tags:</span>
                        @foreach ($article->tags as $tag)
                            #{{ $tag->name }}
                        @endforeach
                    </p>
                </div>
                <hr>
                <p>{{ $article->body }}</p>
                @if (Auth::user() && Auth::user()->is_revisor && $article->is_accepted == null)
                    <div class="container my-5">
                        <div class="row">
                            <div class="col-12 d-flex justify-content-evenly">
                                <form action="{{ route('revisor.acceptArticle', $article) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-success">Accetta l'articolo</button>
                                </form>
                                <form action="{{ route('revisor.rejectArticle', $article) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Rifiuta l'articolo</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="text-center">
                    <a href="{{ route('article.index') }}" class="text-secondary">Vai alla lista degli articoli</a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
