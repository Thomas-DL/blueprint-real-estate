<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialRequirementCategory extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['name'];

    /**
     * Define the relationship with the SpecialRequirement model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function specialRequirements()
    {
        return $this->belongsTo(SpecialRequirement::class);
    }
}
