<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                <h1 class="text-center p-5">Glitch&Bitch</h1>

                @foreach ($articles as $article)
                    <div class="col-12 col-md-3">
                        <div class="card" style="width: 18rem;">
                            <img src="{{ Storage::url($article->image) }}" class="card-img-top"
                                alt="Immagine dell'articolo: {{ $article->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $article->title }}</h5>
                                <p class="card-subtitle">{{ $article->subtitle }}</p>
                                <p class="small text-muted">Categoria:
                                    <a href="{{ route('article.byCategory', $article->category) }}"
                                        class="text-capitalize text-muted">{{ $article->category->name }}</a>
                                </p>
                            </div>
                            <div class="card-footer d-flex justify-content-between align-items-center">
                                <p class="small text-muted">Redatto il {{ $article->created_at->format('d/m/Y') }}<br>
                                    da <a class="text-capitalize text-muted"
                                        href="{{ route('article.byUser', $article->user) }}">{{ $article->user->name }}</a>
                                </p>
                                <a href="{{ route('article.show', $article) }}"
                                    class="btn btn-outline-secondary">Leggi</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-layout>
