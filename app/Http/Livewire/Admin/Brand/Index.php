<?php

namespace App\Http\Livewire\Admin\Brand;

use App\Models\Brand;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;

class Index extends Component
{
    use withPagination;
    protected $paginationTheme = 'bootstrap';
    public $name, $slug, $status, $brand_id;
    public function rules(){
        return[
            'name'=> 'required|string',
            'slug'=> 'required|string',
            'status' => 'nullable'
        ];
    }
    public function resetInput(){
        $this->name = NULL;
        $this->slug = NULL;
        $this->status = NULL;
        $this->brand_id = NULL;

    }
    public function closeModal(){
        $this->resetInput();
    }
    public function openModal(){
        $this->resetInput();
    }

    public function storeBrand(){
        $ValidatedData = $this -> validate();
        Brand::create([
            'name' => $this ->name,
            'slug' => Str::slug($this ->slug),
            'status' => $this ->status == true ? '1':'0',
        ]);
            session()->flush('message', 'Brand Added Successfully');
            $this->dispatchBrowserEvent('close-modal');
            $this->resetInput();
    }
    // edit brand
    public function editBrand(int $brand_id)
    {
        $this->brand_id = $brand_id;
        $brand = Brand::findOrFail($brand_id);
        $this->name = $brand->name;
        $this->slug = $brand->slug;
        $this->status = $brand->status;
    }
    public function updateBrand()
    {
        $ValidatedData = $this -> validate();
        Brand::findOrFail($this->brand_id)->update([
            'name' => $this ->name,
            'slug' => Str::slug($this ->slug),
            'status' => $this ->status == true ? '1':'0',
        ]);
            session()->flush('message', 'Brand Updated Successfully');
            $this->dispatchBrowserEvent('close-modal');
            $this->resetInput();
    }

    public function deleteBrand($brand_id){
        $this->brand_id = $brand_id;
    }
    public function destroyBrand(){
        Brand::findOrFail($this->brand_id)->delete();
        session()->flush('message', 'Brand Deleted');
            $this->dispatchBrowserEvent('close-modal');
            $this->resetInput();
    }

    public function render()
    {
        $brands = Brand::orderBy('id', 'DESC')->paginate(10);
        return view('livewire.admin.brand.index', ['brands' => $brands])
                    ->extends('layouts.admin')
                    ->section('content');
    }
}
