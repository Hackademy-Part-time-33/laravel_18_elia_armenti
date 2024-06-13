<div class="container mt-5">
    <div
    class="align-middle gap-2 d-flex justify-content-between">
    <h3>Elenco prodotti inseriti</h3>
    <form class="d-flex" role="search" action="#"
    method="POST">
    <input class="form-control me-2" name="search"
    type="search" placeholder="Cerca Articolo"
    aria-label="Search">
</form>
<a href="{{route('products.create')}}" 
class="btn btn btn-success me-md-2 mb-3">
Crea Nuovo Prodotto
</a>
</div>
    <table class="table border mt-2">
        <div>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Sottotitolo</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
            @foreach ($products as $product)
            <tr>
                <th scope="row">#1</th>
                <td>
                    {{-- <img class="card-img-top" style="width:3rem"
                    src="https://images.freeimages.com/images/large-previews/83c/barn-silo-detail-5-1210478.jpg"
                    alt="..." /> --}}
                </td>
                <td>{{$product->id}}</td>
                <td>{{$product->title}}</td>
                <td>{{$product->subtitle}}</td>
            
            <div
            class="d-grid gap-2 d-md-flex justify-content-md-end">
            
            <a href="#"
            class="btn btn-primary me-md-2">
            Visualizza
            </a>
            <a href="#"
            class="btn btn-warning me-md-2">
            Modifica
        </a>
        <button type="button"
        class="btn btn-danger me-md-2">Elimina</button>
    </div>
    </td>
    </tr>
@endforeach

</tbody>
</table>
</div>
</div>