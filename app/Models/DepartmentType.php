<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @mixin IdeHelperDepartmentType
 */
class DepartmentType extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'staff_structure_id',
        'title',
        'short_title',
        'department_level',
        'user_id',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $casts = [
        'created_at' => 'datetime:d-m-Y H:i:s',
        'updated_at' => 'datetime:d-m-Y H:i:s',
        'deleted_at' => 'datetime:d-m-Y H:i:s'
    ];

    public function staff_structures(): BelongsToMany
    {
        return $this->belongsToMany(StaffStructure::class);
    }
}
