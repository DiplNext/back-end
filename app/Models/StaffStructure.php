<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @mixin IdeHelperStaffStructure
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

    protected  $casts = [
        'created_at' => 'datetime:d-m-Y H:i:s',
        'updated_at' => 'datetime:d-m-Y H:i:s',
        'deleted_at' => 'datetime:d-m-Y H:i:s'
    ];

    public function department_types(): BelongsToMany
    {
        return $this->belongsToMany(DepartmentType::class);
    }

    public function departments(): BelongsToMany
    {
        return $this->belongsToMany(Department::class);
    }
}
