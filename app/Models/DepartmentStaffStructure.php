<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * @mixin IdeHelperDepartmentStaffStructure
 */
class DepartmentStaffStructure extends Pivot
{
    use HasFactory;
}
