<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Query\Builder;

/**
 * App\Models\StaffStructure
 *
 * @mixin IdeHelperStaffStructure
 * @property-read Collection|DepartmentType[] $department_types
 * @property-read int|null $department_types_count
 * @property-read Collection|Department[] $departments
 * @property-read int|null $departments_count
 * @method static \Illuminate\Database\Eloquent\Builder|StaffStructure newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StaffStructure newQuery()
 * @method static Builder|StaffStructure onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|StaffStructure query()
 * @method static Builder|StaffStructure withTrashed()
 * @method static Builder|StaffStructure withoutTrashed()
 */
class StaffStructure extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'parent_id',
        'staff_order',
        'title',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $casts = [
        'created_at' => 'datetime:d-m-Y H:i:s',
        'updated_at' => 'datetime:d-m-Y H:i:s',
        'deleted_at' => 'datetime:d-m-Y H:i:s'
    ];

    public function departmentTypes(): BelongsToMany
    {
        return $this->belongsToMany(DepartmentType::class);
    }

    public function departments(): BelongsToMany
    {
        return $this->belongsToMany(Department::class);
    }
}
