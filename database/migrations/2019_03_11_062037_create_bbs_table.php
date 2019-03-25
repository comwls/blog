<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bbs', function (Blueprint $table) {
            $table->bigIncrements('bbs_id');
            $table->string("bbs_title")->comment("제목");
            $table->integer("bbs_view_cnt" )->default(0) ->comment("뷰 카운트");
            $table->string("bbs_content")->comment("상세설명");
            $table->enum("bbs_state",["active","stop","wait", "delete"]) ->comment("상태값");
            $table->timestamp("bbs_insert_date");
            $table->timestamp("bbs_update_date")->nullable();
            $table->timestamp("bbs_delete_date")->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bbs');
    }
}
