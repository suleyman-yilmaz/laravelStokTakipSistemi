<?php

namespace App\Http\Controllers;

use App\Models\StockCards;
use App\Models\ProductsIn;
use Illuminate\Http\Request;

class ProductsInController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productsIn = ProductsIn::all(); // Tüm kayıtları alın
        $stockCards = StockCards::all(); // Tüm kayıtları alın
        return view('products.productsIn', compact('productsIn', 'stockCards')); // Görüntüle
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'stock_cards_id' => 'required|integer|exists:stock_cards,id', // stock_cards tablosunda mevcut olmalı
            'input_amount' => 'required|integer|min:1', // Pozitif tamsayı olmalı
            'entry_price' => 'required|numeric|min:0', // Pozitif bir sayı (decimal) olmalı
            'total_amount' => 'required|numeric|min:0', // Pozitif bir sayı (decimal) olmalı, genellikle otomatik hesaplanır
            'input_date' => 'required|date', // Geçerli bir tarih formatı
            'description' => 'required|string|max:255', // Boş olabilir, ancak maksimum 255 karakter içermeli
        ]);

        // Yeni giriş oluşturma
        ProductsIn::create([
            'stock_cards_id' => $request->stock_cards_id,
            'input_amount' => $request->input_amount,
            'entry_price' => $request->entry_price,
            'total_amount' => $request->total_amount,
            'input_date' => $request->input_date,
            'description' => $request->description,
        ]);

        // Başarılı bir şekilde kayıt yapıldıktan sonra yönlendirme
        return redirect()->route('products.in.index')->with('success', 'Ürün girişi başarıyla oluşturuldu.');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $productIn = ProductsIn::findOrFail($id); // Girişi bul
        $productIn->delete(); // Sil
        return redirect()->route('products.in.index')->with('success', 'Ürün girişi başarıyla silindi.');
    }
}