<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Mutasi;

class Barang extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'nama_barang',
        'kode',
        'kategori',
        'lokasi'
    ];

    /**
     * Get mutasis for the barang.
     */
    public function mutasis()
    {
        return $this->hasMany(Mutasi::class);
    }
}
