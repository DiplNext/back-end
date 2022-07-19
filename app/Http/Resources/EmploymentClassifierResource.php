<?php

namespace App\Http\Resources;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use JsonSerializable;

class EmploymentClassifierResource extends JsonResource
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
      'title_ro' => $this->title_ro,
      'title_ru' => $this->title_ru,
      'code' => $this->code,
      'revision_code' => $this->revision_code,
      'user_id' => $this->user_id,
      'created_at' => $this->created_at->format('d-m-Y H:i:s'),
      'updated_at' => $this->updated_at->format('d-m-Y H:i:s'),
      'deleted_at' => $this->deleted_at ? $this->deleted_at->format('d-m-Y H:i:s') : null,
    ];
  }
}
