<?php

namespace App\Http\Livewire\Products;

use App\Models\Products\Size;
use Livewire\Component;

class CreateSize extends Component
{
    public $size;
    public $message = '';

    public function save()
    {
        $validatedData = $this->validate(['size' => 'required|string|max:5|unique:sizes,size']);
        Size::create($validatedData);
        
        $this->reset(['size']);
        $this->message = trans('Size added...');
    }

    public function render()
    {
        return view('livewire.products.create-size');
    }
}