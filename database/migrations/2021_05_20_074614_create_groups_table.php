<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groups', function (Blueprint $table) {
            $table->id();
            $table->string("group_name")->index();
            $table->string("university_name");
            $table->foreignId('admin_id')->constrained('users')->onDelete('cascade');
            $table->string("colleague")->nullable(); //TODO : change name to college
            $table->string("country"); //TODO : change name to city
            $table->text("description")->nullable()->index();
            $table->text("photo");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('groups');
    }
}
