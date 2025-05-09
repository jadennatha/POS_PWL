<?php

use App\Models\m_level;
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
        schema::create('useri', function (Blueprint $table) {
            $table-> id('user_id');
            $table-> unsignedBigInteger('level_id')->index();
            $table-> string ('username', 20)->uniqe();
            $table-> string ('nama', 100);
            $table-> string ('password');
            $table-> timestamps();

            $table->foreign('level_id')-> references('level_id')->on('m_level');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropIfExists('useri');
    }
};
