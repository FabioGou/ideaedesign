<?php

/**
 * @package     ${NAMESPACE}
 * @subpackage
 *
 * @copyright   A copyright
 * @license     A "Slug" license name e.g. GPL2
 */
class InicialTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('clientes')->insert(array(
            array('id'=>1, 'nome'=>"Cliente-1", 'razao_social'=>'Cliente-1 LTDA', 'cnpj_cpf'=>'123456789', 'slug'=>'cliente1'),
            array('id'=>2, 'nome'=>"Cliente-2", 'razao_social'=>'Cliente-2 LTDA', 'cnpj_cpf'=>'223456789', 'slug'=>'cliente2'),
            array('id'=>3, 'nome'=>"Cliente-3", 'razao_social'=>'Cliente-3 LTDA', 'cnpj_cpf'=>'333456789', 'slug'=>'cliente3'),
            array('id'=>4, 'nome'=>"Cliente-4", 'razao_social'=>'Cliente-4 LTDA', 'cnpj_cpf'=>'444456789', 'slug'=>'cliente4'),
            array('id'=>5, 'nome'=>"Cliente-5", 'razao_social'=>'Cliente-5 LTDA', 'cnpj_cpf'=>'555556789', 'slug'=>'cliente5')

        ));

        DB::table('cliente_enderecos')->insert(array(
            array('id'=>1, 'cliente_id'=>1, 'logradouro'=>'rua Doze de Outubro', 'numero'=>'126', 'complemento'=>'', 'bairro'=>'Lapa', 'cidade'=>'São Paulo', 'estado'=>'SP', 'cep'=>'05311-030'),
            array('id'=>2, 'cliente_id'=>2, 'logradouro'=>'rua Trajano', 'numero'=>'205', 'complemento'=>'', 'bairro'=>'Lapa', 'cidade'=>'São Paulo', 'estado'=>'SP', 'cep'=>'05311-030'),
            array('id'=>3, 'cliente_id'=>3, 'logradouro'=>'av Rebouças', 'numero'=>'68', 'complemento'=>'', 'bairro'=>'Jardins', 'cidade'=>'São Paulo', 'estado'=>'SP', 'cep'=>'05311-030'),
            array('id'=>4, 'cliente_id'=>4, 'logradouro'=>'av Paulista', 'numero'=>'92', 'complemento'=>'', 'bairro'=>'Jardins', 'cidade'=>'São Paulo', 'estado'=>'SP', 'cep'=>'05311-030'),
            array('id'=>5, 'cliente_id'=>5, 'logradouro'=>'rua Mergenthaler', 'numero'=>'223', 'complemento'=>'ap 13', 'bairro'=>'Leopoldina', 'cidade'=>'São Paulo', 'estado'=>'SP', 'cep'=>'05311-030')
        ));

        DB::table('cliente_items')->insert(array(
            array('id'=>1, 'cliente_id'=>1, 'nome'=>'Nome do Produto 1', 'descricao'=>'descricao do Produto', 'img'=>'', 'valor'=>24.35, 'extra'=>''),
            array('id'=>2, 'cliente_id'=>1, 'nome'=>'Nome do Produto 2', 'descricao'=>'descricao do Produto', 'img'=>'', 'valor'=>24.35, 'extra'=>''),
            array('id'=>3, 'cliente_id'=>1, 'nome'=>'Nome do Produto 3', 'descricao'=>'descricao do Produto', 'img'=>'', 'valor'=>24.35, 'extra'=>''),
            array('id'=>4, 'cliente_id'=>2, 'nome'=>'Nome do Produto 4', 'descricao'=>'descricao do Produto', 'img'=>'', 'valor'=>24.35, 'extra'=>''),
            array('id'=>5, 'cliente_id'=>2, 'nome'=>'Nome do Produto 5', 'descricao'=>'descricao do Produto', 'img'=>'', 'valor'=>24.35, 'extra'=>''),
            array('id'=>6, 'cliente_id'=>2, 'nome'=>'Nome do Produto 6', 'descricao'=>'descricao do Produto', 'img'=>'', 'valor'=>24.35, 'extra'=>''),
            array('id'=>7, 'cliente_id'=>3, 'nome'=>'Nome do Produto 7', 'descricao'=>'descricao do Produto', 'img'=>'', 'valor'=>24.35, 'extra'=>''),
            array('id'=>8, 'cliente_id'=>3, 'nome'=>'Nome do Produto 8', 'descricao'=>'descricao do Produto', 'img'=>'', 'valor'=>24.35, 'extra'=>''),
            array('id'=>9, 'cliente_id'=>3, 'nome'=>'Nome do Produto 9', 'descricao'=>'descricao do Produto', 'img'=>'', 'valor'=>24.35, 'extra'=>''),
            array('id'=>10, 'cliente_id'=>4, 'nome'=>'Nome do Produto 10', 'descricao'=>'descricao do Produto', 'img'=>'', 'valor'=>24.35, 'extra'=>''),
            array('id'=>11, 'cliente_id'=>4, 'nome'=>'Nome do Produto 11', 'descricao'=>'descricao do Produto', 'img'=>'', 'valor'=>24.35, 'extra'=>''),
            array('id'=>12, 'cliente_id'=>4, 'nome'=>'Nome do Produto 12', 'descricao'=>'descricao do Produto', 'img'=>'', 'valor'=>24.35, 'extra'=>''),
            array('id'=>13, 'cliente_id'=>5, 'nome'=>'Nome do Produto 13', 'descricao'=>'descricao do Produto', 'img'=>'', 'valor'=>24.35, 'extra'=>''),
            array('id'=>14, 'cliente_id'=>5, 'nome'=>'Nome do Produto 14', 'descricao'=>'descricao do Produto', 'img'=>'', 'valor'=>24.35, 'extra'=>''),
            array('id'=>15, 'cliente_id'=>5, 'nome'=>'Nome do Produto 15', 'descricao'=>'descricao do Produto', 'img'=>'', 'valor'=>24.35, 'extra'=>''),
        ));

        // CONSUMIDORS ===========================================================================
        $cId = 1;
        $j = 1;
        $ar = [];
        for($i=1; $i<=25; $i++){
            if( $j > 5){
                $cId++;
                $j = 1;
            }
            $ar[] = array('id'=>$i, 'cliente_id'=>$cId, 'nome'=>'Nome-'.$i, 'sobrenome'=>'Sobrenome-'.$i);

                $j++;
        }

        DB::table('consumidors')->insert($ar);

        // CONSUMIDOR ENDERECOS ==================================================================
        $ar = [];
        for($i=1; $i<=25; $i++){
            $ar[] = array('id'=>$i, 'consumidor_id'=>$i, 'logradouro'=>'Endereco-'.$i, 'numero'=>$i,
                'complemento'=>'',
                'bairro'=>'Bairro-'.$i,
                'cidade'=>'São Paulo',
                'estado'=>'SP',
                'cep'=>'05311-030'
            );
        }
        DB::table('consumidor_enderecos')->insert($ar);

        // CONSUMIDOR PEDIDOS ====================================================================
        $cId = 1;
        $j = 1;
        $k = 1;
        $l = 1;
        $ar = [];
        $itens = '1,2,3';
        $valor = 24.35 * 3;
        for($i=1; $i<=75; $i++){
            if( $j > 3){
                $cId++;
                $j = 1;

            }

            if($k > 15){
                $l++;
                $k = 1;
                $x = $l * 3;

                $itens = $x - 2 . ',';
                $itens .= $x -1 . ',';
                $itens .= $x;
            }

            $ar[] = array('id'=>$i, 'consumidor_id'=>$cId, 'itens'=>$itens, 'valor_total'=>$valor, 'observacao'=>'');
            $j++;$k++;
        }

        DB::table('consumidor_pedidos')->insert($ar);
    }
}