<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table("users")
            ->insert([
                "email" => "avar@avar.com",
                "name" => "avarjan",
                "password" => bcrypt("password")
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table("users")->where("email", "=", "avar@avar.com")->delete();
    }
};
