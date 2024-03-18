<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Progetto extends Model
{
    use HasFactory;
    
    protected $fillable =['nomeProgetto','descrizione','nomeCliente','completato', 'created_at', 'user_id'];
    public function attivita():HasMany
    {
        return $this->hasMany(Attivita::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
