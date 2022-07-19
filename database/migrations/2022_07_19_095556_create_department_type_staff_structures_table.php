<?php

use App\Models\DepartmentType;
use App\Models\StaffStructure;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('department_type_staff_structure', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(DepartmentType::class);
            $table->foreignIdFor(StaffStructure::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('department_type_staff_structure');
    }
};
