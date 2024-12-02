<?php

namespace App\Livewire\Produk;

use App\Models\produk;

use Livewire\Component;

class DetailProduk extends Component
{
    public $id;
    public $data;
    public $kategori;
    public $produk;
    public $penukaranSampah;
    public $akun;
    public function mount($id): void
    {
        $this->id = $id;
        $this->data = produk::findOrFail($id);
    } 
}
