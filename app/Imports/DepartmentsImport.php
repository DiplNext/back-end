<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class DepartmentsImport implements ToCollection
{
    /**
     * @param Collection $collection
     * @return Collection
     */
    public function collection(Collection $collection): Collection
    {
        return $collection;
    }
}
