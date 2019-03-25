<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modules', function (Blueprint $table) {
            $table->increments('id');
            $table->string('leadership_competence');
            $table->string('leadership_sub_competence');
            $table->string('domain')->default('General');
            $table->string('level');  
            $table->longText('learn_url');
            $table->longText('certificate_url')->nullable();
            $table->string('moscow')->nullable(); 
            $table->string('course_date')->nullable();
            $table->integer('role_id');
            $table->longText('description')->nullable();
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
        Schema::dropIfExists('modules');
    }
}
