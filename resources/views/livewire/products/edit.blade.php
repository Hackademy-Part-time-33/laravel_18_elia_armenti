<div class="px-4 px-md-5 mb-5">

    @if (session('status'))
        {{session('status')}}
    @endif
        
   

    <div class="row gx-5 justify-content-center ">
        <div class="col-lg-8 col-xl-6 border p-5 rounded">
            
            <form wire:submit="store">
                <div class="mb-3">
                    <label for="name">Titolo</label>
                    <input class="form-control" wire:model.blur.debounce.1000ms="update" type="text">
                </div>
                @error('title')
                    {{$message}}
                @enderror
                <div class="mb-3">
                    <label for="name">Sottotitolo</label>
                    <input class="form-control" wire:model.blur.debounce.1000ms="subtitle" type="text">
                </div>
                @error('subtitle')
                    {{$message}}
                @enderror
                <div class="mb-3">
                    <label for="name">Corpo</label>
                    <textarea class="form-control"
                    wire:model.live.lazy.1000ms="body" rows="4"></textarea>
                </div>
                @error('body')
                    {{$message}}
                @enderror
                <div class="d-grid">
                    <button class="btn btn-primary btn-lg"
                    type="submit">Salva</button>
                </div>
            </form>
        </div>
    </div>
</div>