<?php

namespace App\Models;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class CsiUser extends Authenticatable
{
    use HasFactory;

    protected $table = 'csi_user';
    protected $primaryKey = 'id_user';
    public $incrementing = true;
    protected $fillable = ['username_user', 'email_user', 'password', 'id_role'];
    protected $hidden = [
        'password',
    ];

    public function proyek()
    {
        return $this->hasMany(CsiProyek::class, 'id_user', 'id_user');
    }
}
