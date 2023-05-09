<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    use HasFactory;

     protected $table = 'keywords';

    protected $fillable = ['keyword', 'response'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($keyword) {
            $keyword->keywords = $keyword->keywords ?? 'default_value';
        });
    }

    // Définir la relation avec le modèle Response

    
    public function response()
{
    return $this->belongsTo(Response::class, 'responses_id');
}

    
}
