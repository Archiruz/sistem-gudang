<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Mutasi;

class Barang extends Model
{
    public function mutasis()
    {
        return $this->hasMany(Mutasi::class);
    }
}
