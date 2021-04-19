<?php

use App\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->integer('type')->default(3)->comment('1=admin,2=buyer,3=seller');
            $table->rememberToken();
            $table->timestamps();
        });

        $user = new User();
        $user->name = "Admin";
        $user->username = 'admin';
        $user->email = "admin@gmail.com";
        $user->password = \Illuminate\Support\Facades\Hash::make('123456');
        $user->type = 1;
        $user->save();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
