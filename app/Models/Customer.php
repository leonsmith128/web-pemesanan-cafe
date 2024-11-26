<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customer'; //nama tabel
    protected $fillable = ['nomor_meja', 'nama_customer', 'nomor_hp']; //nama kolom yang dapat diisi
}
