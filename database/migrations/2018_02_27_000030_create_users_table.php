<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    protected $tableName;

    public function __construct() {
        $this->tableName = Config::get('migrations.Users');
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->down();

        echo "Create Users\r\n";

        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id')->index();

            $table->integer('role_id')->unsigned()->nullable();
            $table->foreign('role_id')->references('id')->on(Config::get('migrations.Roles'))->onDelete('set null');

            $table->string('name');
            $table->string('email')->unique()->index();
            $table->string('phone')->unique()->index()->nullable();
            $table->string('address', 512)->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists($this->tableName);
    }
}
