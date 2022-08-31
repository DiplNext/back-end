<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Query\Builder;

/**
 * App\Models\Department
 *
 * @mixin IdeHelperDepartment
 * @property-read Collection|StaffStructure[] $staff_structures
 * @property-read int|null $staff_structures_count
 * @method static \Illuminate\Database\Eloquent\Builder|Department newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Department newQuery()
 * @method static Builder|Department onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Department query()
 * @method static Builder|Department withTrashed()
 * @method static Builder|Department withoutTrashed()
 */
class Department extends Model
{
    use HasFactory, SoftDeletes;

  /**
   * @return BelongsToMany
   */
    public function staffStructures(): BelongsToMany
    {
        return $this->belongsToMany(StaffStructure::class);
    }
}
