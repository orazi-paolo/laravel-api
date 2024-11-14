<?php

namespace App\Models;

use App\Models\Type;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'url',
        'type_id',
        'image_url'
    ];
    public function type()
    {
        // definisco la relazione molti a uno con la tabella types (dipende da types)
        return $this->belongsTo(Type::class);
    }

    public function technologies() {

        return $this->belongsToMany(Technology::class);
    }
}