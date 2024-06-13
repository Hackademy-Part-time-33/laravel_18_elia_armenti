<x-main>
    
    <div class="px-4 px-md-5 mb-5">
        <div class="row gx-5 justify-content-center ">
            <div class="col-lg-8 col-xl-6 border p-5 rounded">
                
                <form action="#" method="POST"
                enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="name">Titolo</label>
                    <input class="form-control" value
                    name="title" type="text">
                </div>
                <div class="mb-3">
                    <label for="name">Sottotitolo</label>
                    <input class="form-control" value
                    name="subtitle" type="text">
                </div>
                <div class="mb-3">
                    <label for="name">Corpo</label>
                    <textarea class="form-control"
                    name="body" cols="4"></textarea>
                </div>
                <div class="d-grid">
                    <button class="btn btn-primary btn-lg"
                    type="submit">Salva</button>
                </div>
            </form>
        </div>
    </div>
</div>

</x-main>