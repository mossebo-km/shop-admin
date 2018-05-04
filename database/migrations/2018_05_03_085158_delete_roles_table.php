<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteRolesTable extends Migration
{
    public function __construct() {
        $this->tableName = Config::get('migrations.Roles');
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        echo "Remove RolesTable\r\n";

        Schema::drop($this->tableName);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->increments('id')->index();
            $table->string('name');
            $table->string('description')->nullable();
            $table->integer('position')->unsigned()->default(0);
            $table->timestamps();
        });
    }
}
