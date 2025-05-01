<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mutasi;

class MutasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
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
        //
    }

    /**
     * Display mutation history by barang.
     */
    public function historyByBarang($barangId)
    {
        $mutasi = Mutasi::where('barang_id', $barangId)->with('user')->get();
        return response()->json($mutasi);
    }

    /**
     * Display mutation history by user.
     */
    public function historyByUser($userId)
    {
        $mutasi = Mutasi::where('user_id', $userId)->with('barang')->get();
        return response()->json($mutasi);
    }
}
