<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectStationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_stations', function (Blueprint $table) {
            $table->id();
            $table->text('research');
            $table->text('research_en');
            $table->text('research_img');
            $table->text('wireframe');
            $table->text('wireframe_en');
            $table->text('wireframe_img');
            $table->text('design');
            $table->text('design_en');
            $table->text('design_img');
            $table->text('development');
            $table->text('development_en');
            $table->text('development_img');
            $table->text('testing');
            $table->text('testing_en');
            $table->text('testing_img');
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
        Schema::dropIfExists('project_stations');
    }
}
