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
            </div>
        </div>
    </div>
</x-layout>
