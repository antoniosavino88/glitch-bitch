<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-12">
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif
                @if (session('alert'))
                    <div class="alert alert-danger">
                        {{ session('alert') }}
                    </div>
                @endif
                <h1 class="text-center p-5 text-3">Glitch&Bitch</h1>

                <div class="container">
                    <div class="row justify-content-evenly">
                        @foreach ($articles as $article)
                            <x-card :article="$article" />
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-layout>
