<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CsiProyek extends Model
{
    use HasFactory;

    protected $table = 'csi_proyek';
    protected $primaryKey = 'id_proyek';

    protected $fillable = [
        'uid_proyek',
        'id_user',
        'judul_proyek',
        'deskripsi_proyek',
        'file_proyek',
        'bukti_proyek',
        'partner_proyek',
        'tgl_mulai',
        'tgl_selesai',
        'tgl_upload',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(CsiUser::class, 'id_user', 'id_user');
    }
}
