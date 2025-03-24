<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use HasFactory;

    protected $table = 'notes';

    protected $fillable = ['user_id','title', 'body'];
    // Bez $fillable Laravel blokuje hromadné priraďovanie ako ochranu pred neoprávnenými zmenami.
    // S $fillable sa špecifikuje, ktoré polia sa môžu hromadne priraďovať.

    //protected $guarded = ['id']; // Chráni iba "id", všetko ostatné je povolené
    //Alternatíva $guarded umožňuje ochranu len vybraných polí namiesto povolenia konkrétnych.

    //public $timestamps = false; // Vypnutie timestamps, pričom true je default, čo znamená, že v Controlleri nemusíme manuálne pridávať timestamps.


    // Vlastná metóda na vyhľadávanie podľa názvu a poznámky samotnej
    public static function searchByTitleOrBody($keyword)
    {
        return self::where('title', 'LIKE', "%$keyword%")
            ->orWhere('body', 'LIKE', "%$keyword%")
            ->get();
    }
}
