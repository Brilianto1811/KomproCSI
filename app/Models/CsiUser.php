<?php

namespace App\Models;

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CsiUser extends Model
{
    use HasFactory;

    protected $table = 'csi_user';
    protected $primaryKey = 'id_user';
    public $incrementing = true;
    protected $fillable = ['username_user', 'email_user', 'password', 'id_role'];
}
