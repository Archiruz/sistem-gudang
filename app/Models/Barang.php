<?php
namespace App\Models;

use App\Models\Mutasi;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'nama_barang',
        'kode',
        'kategori',
        'lokasi',
    ];

    /**
     * Get mutasis for the barang.
     */
    public function mutasis()
    {
        return $this->hasMany(Mutasi::class);
    }
}
