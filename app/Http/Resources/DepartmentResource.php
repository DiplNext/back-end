<?php

namespace App\Http\Resources;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use JsonSerializable;

class DepartmentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array|Arrayable|JsonSerializable
     */
    public function toArray($request): array|JsonSerializable|Arrayable
    {
        return [
            'id' => $this->id,
            'parent_id' => $this->parent_id,
            'department_type_id' => $this->department_type_id,
            'code' => $this->code,
            'title' => $this->title,
            'short_title' => $this->short_title,
            'employees_count' => $this->employees_count,
            'supervisors_count' => $this->supervisior_count,
            'user_id' => $this->user_id,
            'created_at' => $this->created_at->format('d-m-Y H:i:s'),
            'updated_at' => $this->updated_at->format('d-m-Y H:i:s'),
            'deleted_at' => $this->deleted_at ? $this->deleted_at->format('d-m-Y H:i:s') : null,
        ];
    }
}
