<?php
namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductSearch extends Component
{
    use WithPagination; // Import the WithPagination trait

    public $search = '';

    public function updatingSearch()
    {
        // Reset pagination whenever the search term changes
        $this->resetPage();
    }

    public function updateProducts()
    {
        // This function is no longer needed as pagination is handled automatically.
    }

    public function render()
    {
        $products = Product::query()
            ->when($this->search, function ($query) {
                $query->where('title', 'like', '%' . $this->search . '%')
                      ->orWhere('description', 'like', '%' . $this->search . '%')
                      ->orWhere('category', 'like', '%' . $this->search . '%');
            })
            ->paginate(3); // Paginate with 3 items per page

        return view('livewire.product-search', ['products' => $products]);
    }
}
