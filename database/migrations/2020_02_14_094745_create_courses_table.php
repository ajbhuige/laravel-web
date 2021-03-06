<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("courses", function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger("term_id");
            $table->text("name");
            $table->decimal("ec", 3, 1)->nullable();
            $table->timestamps();

            $table->foreign("term_id")
                ->references("id")
                ->on("terms")
                ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
