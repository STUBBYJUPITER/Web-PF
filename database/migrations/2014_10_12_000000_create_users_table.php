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
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();//integer Unsigned Increment
            $table->string('name',100);//varchar con 100 chars
            $table->string('last_name',100);//varchar con 100 chars
            $table->string('last_name2',100);//varchar con 100 chars
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('blood_type',3);
            $table->date('birthday');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {   //elimina la tabla si ya existe
        Schema::dropIfExists('users');
    }
};
