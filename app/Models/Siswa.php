<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;
    protected $table = 'siswa';
    protected $fillable = ['nama_depan', 'nama_belakang', 'jenis_kelamin', 'agama', 'alamat', 'gambar'];

    public function getGambar()
    {
        if (!$this->gambar) {
            return asset('images/IMG_9103.JPG');
        }
        return asset('images/' . $this->gambar);
    }
}
