<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialRequirement extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'special_requirement_category_id',
        'name'
    ];

    /**
     * Define the relationship with the SpecialRequirementCategory model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function specialRequirementCategory()
    {
        return $this->hasMany(SpecialRequirementCategory::class);
    }
}
