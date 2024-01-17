<?php

use App\Models\User;
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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->boolean('VIP');
            $table->rememberToken();
            $table->timestamps();
        });
        User::create(['name'=>'Tóth Alexandra','email'=>'toth.alexandra@gmail.com','balance'=>'9','email_verified_at'=>'2023-11-22 18:00:00']);
         User::create(['name'=>'Szlucska Dóra','email'=>'szlucska.dora@gmail.com','balance'=>'8','email_verified_at'=>'2023-11-22']);
         User::create(['name'=>'Baráczius Zsuzsanna','email'=>'baraczius.zsuzsanna@gmail.com','balance'=>'7','email_verified_at'=>'2023-11-22']);
         User::create(['name'=>'Koza József','email'=>'koza.jozsef@gmail.com','balance'=>'10','email_verified_at'=>'2023-11-22']);
    
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
