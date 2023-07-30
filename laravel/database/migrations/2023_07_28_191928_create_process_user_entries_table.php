<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\UserEntry;
use App\Models\Process;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('process_user_entry', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(UserEntry::class);
            $table->foreignIdFor(Process::class);
            $table->enum('status',['approved','denied'])->default("denied");
            $table->timestamps();

            $table->softDeletes($column = 'deleted_at', $precision = 0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('process_user_entry');
    }
};
