<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    protected $tableName;

    public function __construct() {
        $this->tableName = Config::get('migrations.Products');
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->down();

        echo "Create Products\r\n";

        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id')->index();
            $table->string('code')->unique()->index(); // внутренний артикул/код товара
            $table->string('sku')->nullable(); // артикул производителя
            $table->integer('quantity')->nullable()->unsigned();
            $table->integer('showed')->unsigned()->default(0);
            $table->integer('bought')->unsigned()->default(0);
            $table->boolean('is_new')->index()->default(0);
            $table->boolean('is_popular')->index()->default(0);
            $table->time('sale_time')->nullable()->unsigned();
            $table->boolean('enabled')->index()->default(1);
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