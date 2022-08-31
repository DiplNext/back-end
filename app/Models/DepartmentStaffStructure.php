<?php

namespace App\Models;

use Database\Factories\DepartmentStaffStructureFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * App\Models\DepartmentStaffStructure
 *
 * @mixin IdeHelperDepartmentStaffStructure
 * @method static DepartmentStaffStructureFactory factory(...$parameters)
 * @method static Builder|DepartmentStaffStructure newModelQuery()
 * @method static Builder|DepartmentStaffStructure newQuery()
 * @method static Builder|DepartmentStaffStructure query()
 */
class DepartmentStaffStructure extends Pivot
{
    use HasFactory;
}
