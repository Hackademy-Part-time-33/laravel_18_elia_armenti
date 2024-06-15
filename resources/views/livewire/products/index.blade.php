<div class="container mt-5">
    <div class="align-middle gap-2 d-flex justify-content-between">
        <h3>Elenco prodotti inseriti</h3>
        <form class="d-flex">
            <input class="form-control me-2" name="search" type="search" placeholder="Cerca Articolo" aria-label="Search" wire:model.live="search">
        </form>
        <a href="{{ route('products.create') }}" class="btn btn-success me-md-2 mb-3">Crea Nuovo Prodotto</a>
    </div>
    <table class="table border mt-2">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Sottotitolo</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->title }}</td>
                    <td>{{ $product->subtitle }}</td>
                    <td>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <a href="#" class="btn btn-primary me-md-2">Visualizza</a>
                            <a href="{{route('products.edit', ['product' => $product])}}" class="btn btn-warning me-md-2">Modifica</a>
                            <a href="" wire:click.prevent="destroy({{$product}})" class="btn btn-danger me-md-2">Elimina</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
