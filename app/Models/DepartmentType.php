<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Query\Builder;

/**
 * App\Models\DepartmentType
 *
 * @mixin IdeHelperDepartmentType
 * @property-read Collection|StaffStructure[] $staff_structures
 * @property-read int|null $staff_structures_count
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentType newQuery()
 * @method static Builder|DepartmentType onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|DepartmentType query()
 * @method static Builder|DepartmentType withTrashed()
 * @method static Builder|DepartmentType withoutTrashed()
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

    public function staffStructures(): BelongsToMany
    {
        return $this->belongsToMany(StaffStructure::class);
    }
}
