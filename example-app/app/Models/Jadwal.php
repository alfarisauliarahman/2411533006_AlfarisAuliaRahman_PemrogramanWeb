<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $fillable = ['subject_id', 'hari', 'jam_mulai', 'jam_selesai', 'ruangan'];

    // Mapping ID hari ke nama hari
    const HARI = [
        1 => 'Senin',
        2 => 'Selasa',
        3 => 'Rabu',
        4 => 'Kamis',
        5 => 'Jumat',
        6 => 'Sabtu',
        7 => 'Minggu',
    ];

    // Accessor: otomatis konversi angka ke nama hari
    public function getNamaHariAttribute(): string
    {
        return self::HARI[$this->hari] ?? '-';
    }

    // Relationship: Jadwal belongs to Subject
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
