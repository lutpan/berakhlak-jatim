<?php

namespace App\Models;

use App\Models\Data;
use App\Models\Level;
use App\Models\Tahun;
use App\Models\Dokumentasi;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Cviebrock\EloquentSluggable\Sluggable;

class Content extends Model
{
    use HasFactory;
    // use Sluggable;

    protected $guarded = [];
    // protected $table = "contents";
    protected $primaryKey = 'id_content';
    // DB::table('contents');   
    // protected $fillable = ['latar_belakang', 'kategori'];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }

    public function tahun()
    {
        return $this->belongsTo(Tahun::class, 'id_tahun');
    }
    public function level()
    {
        return $this->belongsTo(Level::class, 'id_level');
    }
    public function users()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function data()
    {
        return $this->hasMany(Data::class, 'id_data_pendukung');
    }
    public function dokumentasi()
    {
        return $this->hasMany(Dokumentasi::class, 'id_dokumentasi');
    }
    public function getRouteKeyName()
    {
        return 'path';
    }

    // public function sluggable(): array
    // {
    //     return [
    //         'slug' => [
    //             'source' => ['nama_budaya_kerja', 'id_content']
    //         ]
    //     ];
    // }
}
