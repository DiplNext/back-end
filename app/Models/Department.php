<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @mixin IdeHelperDepartment
 */
class Department extends Model
{
    use HasFactory, SoftDeletes;

    public function staff_structures(): BelongsToMany
    {
        return $this->belongsToMany(StaffStructure::class);
    }
}
