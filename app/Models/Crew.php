<!-- <?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crew extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'role',
        'biography',
        'image'
    ];
} -->

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Crew extends Model
{
    use HasFactory;

    /**
     * Colonnes autorisées à être remplies
     */
    protected $fillable = [
        'name',
        'name_fr', 'name_en',
        'role',
        'role_fr', 'role_en',
        'bio',
        'bio_fr', 'bio_en',
        'image',
    ];

    /**
     * Retourne le nom selon la langue active
     */
    public function getTranslatedNameAttribute()
    {
        $locale = app()->getLocale();
        return $this->{'name_' . $locale} ?? $this->name;
    }

    /**
     * Retourne le rôle selon la langue active
     */
    public function getTranslatedRoleAttribute()
    {
        $locale = app()->getLocale();
        return $this->{'role_' . $locale} ?? $this->role;
    }

    /**
     * Retourne la biographie selon la langue active
     */
    public function getTranslatedBioAttribute()
    {
        $locale = app()->getLocale();
        return $this->{'bio_' . $locale} ?? $this->bio;
    }
}

