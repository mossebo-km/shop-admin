<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminRolePermissionRelationsTable extends Migration
{
    protected $tableName;

    public function __construct() {
        $this->tableName = Config::get('migrations.AdminRolePermissionRelations');
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

            $table->integer('admin_role_id')->unsigned()->index();
            $table->foreign('admin_role_id')->references('id')->on(Config::get('migrations.AdminRoles'))->onDelete('cascade');

            $table->integer('admin_role_permission_group_id')->unsigned()->index();
            $table->foreign('admin_role_permission_group_id')->references('id')->on(Config::get('migrations.AdminRolePermissionGroups'))->onDelete('cascade');

            $table->integer('admin_role_permission_id')->unsigned()->index();
            $table->foreign('admin_role_permission_id')->references('id')->on(Config::get('migrations.AdminRolePermissions'))->onDelete('cascade');

            $table->primary(['admin_role_id', 'admin_role_permission_id']);
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
