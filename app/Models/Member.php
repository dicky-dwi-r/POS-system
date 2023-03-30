<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $table ='member';
    protected $fillable = [
        'nama','alamat','telepon',
    ];

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';
}
