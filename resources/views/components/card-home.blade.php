<a href="{{ route('article.show', $article) }}" class="text-decoration-none my-5">
    <div class="container card-home transition position-relative">
        <div class="row card-hover transition rounded-custom">
            <div class="col-5 ps-0 pe-3">
                <img src="{{ Storage::url($article->image) }}" alt="" class="img-fluid rounded-custom">
            </div>
            <div class="col-7">
                <h2 class="text-title">{{ $article->title }} - {{ $article->type->name }}
                </h2>
                <div class="justify-content-between align-items-center mt-2">
                    <p class="small my-1">Tempo di lettura <span
                            class="text-3 fst-italic ms-1">{{ $article->readDuration() }}
                            min</span>
                    </p>
                    <p class="small">Redatto il {{ $article->created_at->format('d/m/Y') }} da
                        <span class="text-3 fst-italic ms-1">{{ $article->user->name }}</span>
                    </p>
                </div>
                <p class="margin-top-custom mb-0 truncate-multiline fst-italic">{{ $article->body }}
                </p>
            </div>
        </div>
    </div>
</a>
