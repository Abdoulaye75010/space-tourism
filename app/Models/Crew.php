<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crew extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','name_fr','name_en',
        'role','role_fr','role_en',
        'bio','bio_fr','bio_en',
        'image'
    ];

    public function getTranslatedNameAttribute()
    {
        $locale = app()->getLocale();
        return $this->{'name_'.$locale} ?? $this->name;
    }

    public function getTranslatedRoleAttribute()
    {
        $locale = app()->getLocale();
        return $this->{'role_'.$locale} ?? $this->role;
    }

    public function getTranslatedBioAttribute()
    {
        $locale = app()->getLocale();
        return $this->{'bio_'.$locale} ?? $this->bio;
    }
}
