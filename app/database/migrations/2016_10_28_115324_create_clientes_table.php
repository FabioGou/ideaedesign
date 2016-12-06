<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('clientes', function($table)
        {
            $table->increments('id');
            $table->string('nome');
            $table->string('razao_social');
            $table->string('cnpj_cpf', 12);
            $table->string('slug');
            $table->timestamps();
        });

        Schema::create('cliente_enderecos', function($table)
        {
            $table->increments('id');
            $table->integer('cliente_id');
            $table->string('logradouro');
            $table->string('numero');
            $table->string('complemento');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
            $table->string('cep');
            $table->timestamps();
        });

        Schema::create('cliente_items', function($table)
        {
            $table->increments('id');
            $table->integer('cliente_id');
            $table->string('nome');
            $table->string('descricao');
            $table->string('img');
            $table->decimal('valor', 10, 2);
            $table->string('extra')->nullable();
            $table->timestamps();
        });

        Schema::create('consumidors', function($table)
        {
            $table->increments('id');
            $table->integer('cliente_id');
            $table->string('nome');
            $table->string('sobrenome');
            $table->timestamps();
        });

        Schema::create('consumidor_enderecos', function($table)
        {
            $table->increments('id');
            $table->integer('consumidor_id');
            $table->string('logradouro');
            $table->string('numero');
            $table->string('complemento');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
            $table->string('cep');
            $table->timestamps();
        });

        Schema::create('consumidor_pedidos', function($table)
        {
            $table->increments('id');
            $table->integer('consumidor_id');
            $table->string('itens');
            $table->decimal('valor_total', 10, 2);
            $table->text('observacao');
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
		Schema::drop('clientes');
		Schema::drop('cliente_enderecos');
		Schema::drop('cliente_items');
		Schema::drop('consumidors');
		Schema::drop('consumidor_enderecos');
		Schema::drop('consumidor_pedidos');

	}

}
