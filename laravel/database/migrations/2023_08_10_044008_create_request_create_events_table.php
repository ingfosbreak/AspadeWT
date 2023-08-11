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
        Schema::create('request_create_events', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->string("name");
            $table->integer("num_member");
            $table->integer("budget");
            $table->date('date');
            $table->string('location');
            $table->string("description");
            $table->enum('status-request',['approved','denied'])->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_create_events');
    }
};
