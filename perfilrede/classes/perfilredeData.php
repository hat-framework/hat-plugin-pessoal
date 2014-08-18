<?php 
class pessoal_perfilredeData extends \classes\Model\DataModel{
    public $dados  = array(
         'login' => array(
	    'name'     => '',
	    'type'     => 'int',
	    'size'     => '11',
	    'pkey'    => true,
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
	    'fkey' => array(
	        'model' => 'usuario/login',
	        'cardinalidade' => '1n',
	        'keys' => array('cod', 'cod'),
	    ),
        ),
         'redesocial' => array(
	    'name'     => '',
	    'type'     => 'int',
	    'size'     => '11',
	    'pkey'    => true,
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
	    'especial' => 'session',
	    'session'  => 'pessoal/redesocial',
	    'fkey' => array(
	        'model' => 'pessoal/redesocial',
	        'cardinalidade' => '1n',
	        'keys' => array('cod', 'cod'),
	    ),
        ),
         'perfil' => array(
	    'name'     => 'Perfil',
	    'type'     => 'varchar',
	    'size'     => '32',
	    'notnull' => true,
	    'grid'    => true,
	    'display' => true,
        ),
	    'button'     => array('button' => 'Gravar Perfilrede'),);
}