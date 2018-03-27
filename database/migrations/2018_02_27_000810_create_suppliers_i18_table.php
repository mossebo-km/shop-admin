<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliersI18Table extends Migration
{
    protected $tableName;

    public function __construct() {
        $this->tableName = Config::get('migrations.SuppliersI18');
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->down();

        echo "Create SuppliersI18\r\n";

        Schema::create($this->tableName, function (Blueprint $table) {
            $table->engine = "InnoDB";
            $table->integer('supplier_id')->unsigned();
            $table->foreign('supplier_id')->references('id')->on(Config::get('migrations.Suppliers'))->onDelete('cascade');

            $table->char('language_code', 2);
            $table->foreign('language_code')->references('code')->on(Config::get('migrations.Languages'));

            $table->string('name');
            $table->text('description')->nullable();

            $table->primary(['supplier_id', 'language_code'])->index();
            $table->softDeletes();
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
