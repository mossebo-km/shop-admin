<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminRoleRelationsTable extends Migration
{
    protected $tableName;

    public function __construct() {
        $this->tableName = Config::get('migrations.AdminRoleRelations');
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->down();

        echo "Create AdminRoleRelations\r\n";

        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = "InnoDB";

            $table->integer('admin_id')->unsigned()->index();
            $table->foreign('admin_id')->references('id')->on(Config::get('migrations.Admins'))->onDelete('cascade');

            $table->integer('admin_role_id')->unsigned()->index();
            $table->foreign('admin_role_id')->references('id')->on(Config::get('migrations.AdminRoles'))->onDelete('cascade');

            $table->primary(['admin_id', 'admin_role_id']);
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
