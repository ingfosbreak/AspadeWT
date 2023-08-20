<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer("num_member");
            $table->integer("num_staff");
            $table->integer("budget");
            $table->date('date_register');
            $table->integer('upcoming_count')->nullable();
            $table->date('date_start');
            $table->date('date_close');
            $table->string('location');
            $table->string('description');
            $table->enum('status',['in-progress','finished'])->default("in-progress");
            $table->enum('publish',['draft','publish'])->default("draft");
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
