<?php

namespace App\Models;

use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Type extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];

    // definisco il rapporto uno a molti con i projects
    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}