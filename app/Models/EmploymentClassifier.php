<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Query\Builder;

/**
 * App\Models\EmploymentClassifier
 *
 * @mixin IdeHelperEmploymentClassifier
 * @method static \Illuminate\Database\Eloquent\Builder|EmploymentClassifier newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|EmploymentClassifier newQuery()
 * @method static Builder|EmploymentClassifier onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|EmploymentClassifier query()
 * @method static Builder|EmploymentClassifier withTrashed()
 * @method static Builder|EmploymentClassifier withoutTrashed()
 */
class EmploymentClassifier extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable  = [
      'title_ro',
      'title_ru',
      'code',
      'revision_code',
      'user_id',
      'created_at',
      'updated_at',
      'deleted_at'
    ];
}
