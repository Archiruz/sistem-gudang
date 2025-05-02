<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Barang;

class Mutasi extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'user_id',
        'barang_id',
        'jumlah',
        'tanggal',
        'keterangan',
        'jenis_mutasi',
    ];

    /**
     * Get user that owns the mutasi.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get barang that owns the mutasi.
     */
    public function barang()
    {
        return $this->belongsTo(Barang::class);
    }
}
