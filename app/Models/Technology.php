<!-- <?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image'
    ];
} -->

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    use HasFactory;

    /**
     * Colonnes autorisées à être remplies
     */
    protected $fillable = [
        'name',
        'name_fr', 'name_en',
        'description',
        'description_fr', 'description_en',
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

