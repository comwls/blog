<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBbsCommentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bbs_comment', function (Blueprint $table) {
            $table->bigIncrements('bbsc_id');
            $table->integer('bbs_id');
            $table->integer('user_id');
            $table->string('bbsc_context');
            $table->timestamp("bbsc_insert_date");
            $table->timestamp("bbsc_update_date")->nullable();
            $table->timestamp("bbsc_delete_date")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bbs_comment');
    }
}
