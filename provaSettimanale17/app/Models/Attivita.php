<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Attivita extends Model
{
   protected $fillable=['nome','descrizione','progetto_id','dataInizio','dataFine','completato'];
    use HasFactory;
    public function progetto():BelongsTo
    {
        return $this->belongsTo(Progetto::class);
    }
}
