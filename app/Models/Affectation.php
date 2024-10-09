<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Affectation extends Model
{
    protected $fillable = ['responsable_id', 'departement_id', 'au_siege', 'date_debut', 'date_fin'];

    public function responsable()
    {
        return $this->belongsTo(Responsable::class);
    }

    public function departement()
    {
        return $this->belongsTo(Departement::class);
    }
}
