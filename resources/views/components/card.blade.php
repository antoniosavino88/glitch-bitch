<div class="col-12 col-md-6 d-flex justify-content-center">
    <div class="card bg-2 text-4" style="width: 32rem;">
        <img src="{{ Storage::url($article->image) }}" class="card-img-top"
            alt="Immagine dell'articolo: {{ $article->title }}">
        <div class="card-body">
            <h5 class="card-title text-center text-title">{{ $article->title }}</h5>
            <p class="card-subtitle text-center fst-italic mb-4">{{ $article->subtitle }}</p>
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-6 p-0">
                        @if ($article->category)
                            <p class="small">Categoria:
                                <a href="{{ route('article.byCategory', $article->category) }}"
                                    class="text-capitalize mini-button transition">{{ $article->category->name }}</a>
                            </p>
                        @else
                            <p class="small">Nessuna categoria</p>
                        @endif
                        @if ($article->type)
                            <p class="small">
                                <a href="{{ route('article.byType', ['type' => $article->type]) }}" class="text-capitalize mini-button transition">
                                    {{ $article->type->name }}
                                </a>
                            </p>
                        @else
                            <p class="small">Nessun tipo di articolo</p>
                        @endif
                    </div>

                    <div class="col-6 p-0 text-end">
                        <p class="small my-0">
                            @foreach ($article->tags as $tag)
                                #{{ $tag->name }}
                            @endforeach
                        </p>
                        <p class="card-subtitle fst-italic small">tempo di lettura {{ $article->readDuration() }} min
                        </p>
                    </div>
                </div>
            </div>


        </div>
        <div class="card-footer d-flex justify-content-between align-items-center">
            <p class="small">Redatto il {{ $article->created_at->format('d/m/Y') }}<br>
                da <a class="text-capitalize mini-button transition"
                    href="{{ route('article.byUser', $article->user) }}">{{ $article->user->name }}</a>
            </p>
            <a href="{{ route('article.show', $article) }}" class="btn button">Leggi</a>
        </div>
    </div>
</div>
