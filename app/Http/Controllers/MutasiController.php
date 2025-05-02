<?php
namespace App\Http\Controllers;

use App\Models\Mutasi;
use Illuminate\Http\Request;

class MutasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mutasis = Mutasi::with(['user', 'barang'])->get();
        return response()->json([
            'status' => 'success',
            'data'   => [
                'mutasis' => $mutasis,
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
            'tanggal'      => 'required|date',
            'jenis_mutasi' => 'required|string',
            'jumlah'       => 'required|integer',
            'user_id'      => 'required|exists:users,id',
            'barang_id'    => 'required|exists:barangs,id',
            'keterangan'   => 'nullable|string',
        ]);

        $mutasi = Mutasi::create($request->all());
        return response()->json([
            'status' => 'success',
            'data'   => [
                'mutasi' => $mutasi,
            ],
        ], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mutasi = Mutasi::with(['user', 'barang'])->findOrFail($id);
        return response()->json([
            'status' => 'success',
            'data'   => [
                'mutasi' => $mutasi,
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
        $mutasi = Mutasi::findOrFail($id);

        $request->validate([
            'tanggal'      => 'sometimes|required|date',
            'jenis_mutasi' => 'sometimes|required|string',
            'jumlah'       => 'sometimes|required|integer',
            'keterangan'   => 'sometimes|nullable|string',
            'user_id'      => 'sometimes|required|exists:users,id',
            'barang_id'    => 'sometimes|required|exists:barangs,id',
        ]);

        $mutasi->update($request->all());
        return response()->json([
            'status' => 'success',
            'data'   => [
                'mutasi' => $mutasi,
            ],
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $mutasi = Mutasi::findOrFail($id);
        $mutasi->delete();

        return response()->json([
            'status'  => 'success',
            'data'    => null,
            'message' => 'Mutasi deleted successfully',
        ]);
    }

    /**
     * Display mutation history by barang.
     */
    public function historyByBarang($barangId)
    {
        $mutasi = Mutasi::where('barang_id', $barangId)->with('user')->get();
        return response()->json([
            'status' => 'success',
            'data'   => [
                'mutasi' => $mutasi,
            ],
        ]);
    }

    /**
     * Display mutation history by user.
     */
    public function historyByUser($userId)
    {
        $mutasi = Mutasi::where('user_id', $userId)->with('barang')->get();
        return response()->json([
            'status' => 'success',
            'data'   => [
                'mutasi' => $mutasi,
            ],
        ]);
    }
}
