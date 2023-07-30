<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\UserEntry;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_fulls', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(UserEntry::class);
            $table->string('password');
            $table->string('email');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('faculty');
            $table->integer('year');
            $table->string('image_path')->nullable();
            $table->timestamps();
            $table->softDeletes($column = 'deleted_at', $precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_fulls');
    }
};
