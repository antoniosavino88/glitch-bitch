<x-layout>
    <div class="container-fluid p-5 text-center">
        <div class="row justify-content-center">
            <div class="col-12">
                <h1 class="display-1 text-title">Modifica l'articolo</h1>
            </div>
        </div>
    </div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form method="POST" action="{{ route('article.update', $article) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input type="text" name="title" class="form-control" id="title"
                            value="{{ $article->title }}">
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Sottotitolo</label>
                        <input type="text" name="subtitle" class="form-control" id="subtitle"
                            value="{{ $article->subtitle }}">
                        @error('subtitle')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Immagine attuale</label>
                        <img src="{{ Storage::url($article->image) }}" alt="{{ $article->title }}"
                            class="img-fluid p-2 border">
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Nuova Immagine</label>
                        <input type="file" name="image" class="form-control" id="image">
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="category" class="form-label">Categoria</label>
                        <select name="category" id="category" class="form-control">
                            <option value="">Seleziona la categoria</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    {{ $article->category_id == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('category')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="tags" class="form-label">Tags</label>
                        <input type="text" name="tags" class="form-control" id="tags"
                            value="{{ $article->tags->implode('name', ', ') }}"
                            placeholder="Inserisci i tag separati da una virgola">
                        @error('tags')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="body" class="form-label">Corpo del testo</label>
                        <textarea name="body" id="body" class="form-control" cols="30" rows="10">{{ $article->body }}</textarea>
                        @error('body')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="d-flex justify-content-center align-items-center">
                        <button type="submit" class="btn button me-3">Modifica articolo</button>
                        <a href="#" class="btn btn-secondary">Torna alla Home</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
