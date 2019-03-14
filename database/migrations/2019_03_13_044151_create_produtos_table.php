<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class CreateProdutosTable.
 */
class CreateProdutosTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('produtos', function(Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('breve_descricao')->nullable();
            $table->double('valor', 8, 2)->default(0.00);
            $table->text('descricao')->nullable();

            $table->timestampsTz();
            $table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::table('produtos', function(Blueprint $table) {
		});
		Schema::drop('produtos');
	}
}
