<?php
namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barangs = Barang::all();
        return response()->json([
            'status' => 'success',
            'data'   => [
                'barangs' => $barangs,
            ],
        ]);
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
            'nama_barang' => 'required|string|max:255',
            'kode'        => 'required|string|unique:barangs,kode',
            'kategori'    => 'required|string',
            'lokasi'      => 'required|string',
        ]);

        $barang = Barang::create($request->all());
        return response()->json([
            'status' => 'success',
            'data'   => [
                'barang' => $barang,
            ],
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $barang = Barang::findOrFail($id);
        return response()->json([
            'status' => 'success',
            'data'   => [
                'barang' => $barang,
            ],
        ]);
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
        $barang = Barang::findOrFail($id);

        $request->validate([
            'nama_barang' => 'sometimes|required|string|max:255',
            'kode'        => 'sometimes|required|string|unique:barangs,kode,' . $barang->id,
            'kategori'    => 'sometimes|required|string',
            'lokasi'      => 'sometimes|required|string',
        ]);

        $barang->update($request->all());
        return response()->json([
            'status' => 'success',
            'data'   => [
                'barang' => $barang,
            ],
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();

        return response()->json([
            'status'  => 'success',
            'data'    => null,
            'message' => 'Barang deleted successfully',
        ]);
    }
}
