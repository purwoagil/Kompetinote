<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'Nama',
        'password',
        'email',
        'EmailStaff',
        'EmailOff',
        'No_hp',
        'Role',
        'Fakultas',
        'Prodi',
        'Angkatan',
        'NIK',
        'NIM',
        'No_Rek'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'Password',
    ];
    
}
