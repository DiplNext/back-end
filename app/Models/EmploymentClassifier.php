<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @mixin IdeHelperEmploymentClassifier
 */
class EmploymentClassifier extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable  = ['title_ro', 'title_ru', 'code', 'revision_code', 'user_id', 'created_at','updated_at', 'deleted_at'];
}
