<?php

namespace App\Models;

use Database\Factories\DepartmentTypeStaffStructureFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * App\Models\DepartmentTypeStaffStructure
 *
 * @mixin IdeHelperDepartmentTypeStaffStructure
 * @method static DepartmentTypeStaffStructureFactory factory(...$parameters)
 * @method static Builder|DepartmentTypeStaffStructure newModelQuery()
 * @method static Builder|DepartmentTypeStaffStructure newQuery()
 * @method static Builder|DepartmentTypeStaffStructure query()
 */
class DepartmentTypeStaffStructure extends Pivot
{
    use HasFactory;
}
