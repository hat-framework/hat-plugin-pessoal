<?php 
class pessoal_enderecoData extends \classes\Model\DataModel{
    public $dados  = array(
         'cod' => array(
	    'name'     => 'Código',
	    'type'     => 'int',
	    'pkey'    => true,
	    'ai'      => true,
	    'grid'    => true,
	    'display' => true,
	    'private' => true
        ),
         'login' => array(
	    'name'     => '',
	    'type'     => 'int',
	    'size'     => '11',
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
	    'fkey' => array(
	        'model' => 'usuario/login',
	        'cardinalidade' => '1n',
	        'keys' => array('cod', 'cod'),
	    ),
        ),
         'cep' => array(
	    'name'     => 'Cep',
	    'type'     => 'int',
	    'size'     => '8',
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
        ),
         'rua' => array(
	    'name'     => 'Rua',
	    'type'     => 'varchar',
	    'size'     => '256',
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
        ),
         'numero' => array(
	    'name'     => 'Número',
	    'type'     => 'varchar',
	    'size'     => '10',
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
        ),
         'complemento' => array(
	    'name'     => 'Complemento',
	    'type'     => 'varchar',
	    'size'     => '256',
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
        ),
         'bairro' => array(
	    'name'     => 'Bairro',
	    'type'     => 'varchar',
	    'size'     => '64',
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
        ),
         'cidade' => array(
	    'name'     => 'Cidade',
	    'type'     => 'varchar',
	    'size'     => '64',
	    'grid'    => true,
	    'display' => true,
        ),
         'estado' => array(
	    'name'     => 'Estado',
	    'type'     => 'varchar',
	    'size'     => '2',
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
        ),
         'padrao' => array(
	    'name'     => 'Padrão',
	    'type'     => 'enum',
	    'default' => 's',
	    'options' => array(
	    	's' => 's',
	    	'n' => 'n',
	    ),
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
        ),
	    'button'     => array('button' => 'Gravar Endereco'),);
}