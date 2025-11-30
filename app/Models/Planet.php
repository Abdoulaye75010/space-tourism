<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    use HasFactory;

    /**
     * Colonnes autorisées à être remplies (mass assignment)
     */
    protected $fillable = [
        'name',
        'name_fr', 'name_en',
        'description',
        'description_fr', 'description_en',
        'distance',
        'duration',
        'image',
    ];

    /**
     * Retourne le nom dans la langue courante
     */
    public function getTranslatedNameAttribute()
    {
        $locale = app()->getLocale();
        return $this->{'name_' . $locale} ?? $this->name;
    }

    /**
     * Retourne la description dans la langue courante
     */
    public function getTranslatedDescriptionAttribute()
    {
        $locale = app()->getLocale();
        return $this->{'description_' . $locale} ?? $this->description;
    }
}
