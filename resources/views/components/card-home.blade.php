<a href="{{ route('article.show', $article) }}" class="text-decoration-none mb-5">
    <div class="container card-home transition position-relative">
        <div class="row card-hover transition rounded">
            <div class="col-5 ps-0 pe-3">
                <img src="{{ Storage::url($article->image) }}" alt="" class="img-fluid rounded">
            </div>
            <div class="col-7">
                <h2 class="text-title">{{ $article->title }} - {{ $article->type->name }}
                </h2>
                <p class="mt-5 mb-0 fst-italic truncate-multiline">{{ $article->body }}
                    <span>Continua</span>
                </p>
            </div>
        </div>
    </div>
</a>
