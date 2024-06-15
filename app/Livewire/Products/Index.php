<?php

namespace App\Livewire\Products;

use App\Models\Product;
use Livewire\Component;

class Index extends Component
{

    public $search = '';

    public function destroy(Product $product)
    {
        $product->delete();
        session()->flash('status', 'Prodotto cancellato con successo');
    }

    public function render()
    {
        if ($this->search) {
            $products = Product::where('title', 'LIKE', '%' . $this->search . '%')
                ->orWhere('subtitle', 'LIKE', '%' . $this->search . '%')
                ->get();
        } else {
            $products = Product::all();
        }

        return view('livewire.products.index', compact('products'));
    }
}
