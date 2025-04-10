<div class="col-12 col-md-3">
    <div class="card" style="width: 18rem;">
        <img src="{{ Storage::url($article->image) }}" class="card-img-top"
            alt="Immagine dell'articolo: {{ $article->title }}">
        <div class="card-body">
            <h5 class="card-title">{{ $article->title }}</h5>
            <p class="card-subtitle">{{ $article->subtitle }}</p>
            @if ($article->category)
                <p class="small text-muted">Categoria:
                    <a href="{{ route('article.byCategory', $article->category) }}"
                        class="text-capitalize text-muted">{{ $article->category->name }}</a>
                </p>
            @else
                <p class="small text-muted">Nessuna categoria</p>
            @endif
            <p class="small text-muted my-0">
                @foreach ($article->tags as $tag)
                    #{{ $tag->name }}
                @endforeach
            </p>
        </div>
        <div class="card-footer d-flex justify-content-between align-items-center">
            <p class="small text-muted">Redatto il {{ $article->created_at->format('d/m/Y') }}<br>
                da <a class="text-capitalize text-muted"
                    href="{{ route('article.byUser', $article->user) }}">{{ $article->user->name }}</a>
            </p>
            <a href="{{ route('article.show', $article) }}" class="btn btn-outline-secondary">Leggi</a>
        </div>
    </div>
</div>
