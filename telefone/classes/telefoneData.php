<?php 
class pessoal_telefoneData extends \classes\Model\DataModel{
    public $dados  = array(
         'tipotelefone' => array(
	    'name'     => '',
	    'type'     => 'int',
	    'grid'    => true,
	    'display' => true,
	    'especial' => 'session',
	    'session'  => 'pessoal/tipotelefone',
	    'fkey' => array(
	        'model' => 'pessoal/tipotelefone',
	        'cardinalidade' => '1n',
	        'keys' => array('cod', 'cod'),
	    ),
        ),
         'cod' => array(
	    'name'     => 'Código',
	    'type'     => 'int',
	    'size'     => '11',
	    'pkey'    => true,
	    'notnull' => true,
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
         'numero' => array(
	    'name'     => 'Número',
	    'type'     => 'int',
	    'size'     => '13',
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
        ),
         'padrao' => array(
	    'name'     => 'Padrao',
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
	    'button'     => array('button' => 'Gravar Telefone'),);
}