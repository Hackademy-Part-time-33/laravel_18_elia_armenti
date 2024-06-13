<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Validate; 

class Create extends Component
{
    #[Validate('required|string')] 
    public $title;

    #[Validate('required|string')] 
    public $subtitle;

    #[Validate('required|min:15')] 
    public $body;

    public function store() {

        $this->validate(); 

        Product::create([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body,
        ]);

        session()->flash('status', 'Prodotto creato con successo');

        $this->title = '';
        $this->subtitle = '';
        $this->body = '';
 
        return $this->redirect('/products');
    }

    public function render()
    {
        return view('livewire.products.create');
    }
}
