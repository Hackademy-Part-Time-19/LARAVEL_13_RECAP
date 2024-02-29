<x-layout>
<h1>Libri disponibili</h1>
@foreach ($books as $book)

<div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$book->title}}</h5>
      <p class="card-text">{{$book->author}}</p>
      <p class="card-text">{{$book->price}}</p>
      <a href="#" class="btn btn-primary">Details</a>
    </div>
  </div>
    
@endforeach

</x-layout>