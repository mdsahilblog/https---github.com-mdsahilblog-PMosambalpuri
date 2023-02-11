<?php

namespace App\Http\Livewire\Admin\Brand;

use Livewire\Component;

class Index extends Component
{
    public $name, $slug, $status;
    
    public function rules()
    {
        return [
           //nothing you can edit here today
        ];
    }

    public function StoreBrand()
    {
        # code...
    }

    public function render()
    {
        return view('livewire.admin.brand.index')
                    ->extends('layouts.admin')
                    ->section('content');
    }
}
