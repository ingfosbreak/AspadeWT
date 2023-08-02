<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\User;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_fulls', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->string('email')->unique()->nullable();
            $table->timestamp('email_verified_at')->nullable(); // 'email_verified_at' timestamp/ datetime
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('faculty')->nullable();
            $table->integer('year')->nullable();
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
