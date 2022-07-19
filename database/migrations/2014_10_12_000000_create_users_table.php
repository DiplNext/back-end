<?php

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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('idnp', 13)->unique()->nullable();
            $table->date('birth_date')->nullable();
            $table->unsignedTinyInteger('sex')->nullable();
            $table->unsignedBigInteger('partners_fk_id')->comment('PartnersFK ContactID')->nullable();
            $table->unsignedBigInteger('crm_user_id')->comment('Intranet User ID')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
