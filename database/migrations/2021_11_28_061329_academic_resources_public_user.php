<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AcademicResourcesPublicUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academic_resources_public_user', function (Blueprint $table) {
            $table->unsignedBigInteger("academic_resources_id");
            $table->unsignedBigInteger("public_user_id");

            $table->foreign("academic_resources_id")->references("id")->on("academic_resources");
            $table->foreign("public_user_id")->references("users_id")->on("public_users");

            $table->primary(["academic_resources_id", "public_user_id"], "PK_bookmark");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
