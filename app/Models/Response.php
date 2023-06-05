<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Response extends Model
{
    use HasFactory;

    protected $table = 'responses';

    protected $fillable = ['response'];

    // Définir la relation inverse avec le modèle Keyword
    public function keyword()
    {
        return $this->belongsTo(Keyword::class);
    }
    
    
}
