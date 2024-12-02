<?php

namespace App\Livewire\Produk;

use App\Models\produk;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class DataProduk extends Component
{
    public $produks;
    public $data;

    public function mount(): void {

        $this->produks = Auth::check()
        ? (Auth::user()->role === 'admin' 
            ? produk::latest()->get() : produk::where('status', 'aktif')->latest()->get())
        : produk::where('status', 'aktif')->latest()->get();
    }

    public function hapusProduk($id): void
    {
        $produk = Produk::findOrFail($id);
        if ($produk->image) {
            Storage::disk('public')->delete($produk->image);
        }

        $produk->delete();
        if ($this->data->role === 'admin') {
            $this->produks = Produk::latest()->get();
        }
        $this->dispatch('alert-success', message: 'Produk berhasil dihapus.');
    }
}
