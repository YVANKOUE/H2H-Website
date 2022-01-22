<?php

namespace App\Http\Livewire\Products;

use App\Models\Products\Color;
use Livewire\Component;

class CreateColor extends Component
{
    public $code;
    public $name;
    public $message = '';

    public function save()
    {
        $validatedData = $this->validate([
            'code' => 'required|string|unique:colors,code|max:10',
            'name' => 'required|string|unique:colors,name|max:15'
        ]);
        Color::create($validatedData);
        
        $this->reset(['code', 'name']);
        $this->message = trans('Color added!');
    }

    public function render()
    {
        return view('livewire.products.create-color');
    }
}