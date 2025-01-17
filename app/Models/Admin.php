<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $fillable = ['nama', 'username', 'password', 'jabatan', 'alamat'];

    public function pengeluarans()
    {
        return $this->hasMany(Pengeluaran::class);
    }
}
