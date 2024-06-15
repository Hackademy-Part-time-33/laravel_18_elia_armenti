<?php

namespace App\Livewire\Products;

use Livewire\Component;
use Livewire\Attributes\Validate; 
use App\Models\Product;

class Edit extends Component
{

    #[Validate('required|string')] 
    public $title;

    #[Validate('required|string')] 
    public $subtitle;

    #[Validate('required|min:15')] 
    public $body;


    public $product;
    

    public function mount(Product $product)
    {
        
        $this->title = $product->title;
        $this->subtitle = $product->subtitle;
        $this->body = $product->body;
    }

    public function update(){

        $this->validate(); 
        
        $this->product->update([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body,
        ]);

        session()->flash('status', 'Prodotto modificato con successo');

        /* return redirect()->route('livewire.products.create'); */

    }

    public function render()
    {
        return view('livewire.products.edit');
    }
}
