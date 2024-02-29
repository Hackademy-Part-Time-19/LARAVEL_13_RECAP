<x-layout>
    <div class="container">

        <div class="row">

            <div class="col-lg-4 mx-auto">

                <form class="mt-5" action="{{ route('books.update') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    @method('PUT')

                    <h1>Aggiorna il libro {{$book->title}}</h1>

                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo</label>
                        <input name="title" type="text" class="form-control" id="title" value="{{ols('title',$book->title)}}">
                    </div>
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="mb-3">
                        <label for="price" class="form-label">Prezzo</label>
                        <input name="price" type="decimal" class="form-control" id="price" value="{{ols('price',$book->price)}}">
                    </div @error('price') <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione</label>
                        <input name="description" type="text" class="form-control" id="description" value="{{ols('description',$book->description)}}">
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Immagine</label>
                        <input name="image" type="file" class="form-control" id="image">
                    </div>
                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror

                    <button type="submit" class="btn btn-primary">Salva</button>

                </form>

            </div>
        </div>
    </div>
</x-layout>
