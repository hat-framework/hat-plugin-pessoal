<?php 
use classes\Classes\Actions;   
class pessoalActions extends Actions{
    protected $permissions = array(
        "pessoal_public" => array(
            "nome"      => "pessoal_public",
            "label"     => "Acesso ao pessoal",
            "descricao" => "Acesso público ao plugin pessoal",
            "default"   => "s",
        ),
         "pessoal_admin" => array(
            "nome"      => "pessoal_admin",
            "label"     => "Administrar pessoal",
            "descricao" => "Permite gerenciar (adicionar, visualizar, editar e apagar) os dados do plugin pessoal",
            "default"   => "n",
        ),
        
    );
    
    protected $actions = array( 
        "pessoal/index/index" => array(
            "label" => "pessoal", "publico" => "n", "default_yes" => "s","default_no" => "n",
            "permission" => "pessoal_admin",
            "menu" => array('pessoal/endereco/index','pessoal/telefone/index','pessoal/email/index','pessoal/tipotelefone/index','pessoal/redesocial/index','pessoal/perfilrede/index','pessoal/dadosextras/index',),
            "breadscrumb" => array("pessoal/index/index", )
        ),
        
        
        'usuario/login/index' => array(
            'label' => 'login', 'publico' => 'n', 'default_yes' => 's','default_no' => 'n',
            'permission' => 'usuario/admin',
            'menu' => array('Página Principal' => 'usuario/index/index', 'usuario/login/formulario')
        ),
        
        'usuario/login/formulario' => array(
            'label' => 'Criar login', 'publico' => 'n', 'default_yes' => 's','default_no' => 'n',
            'permission' => 'usuario/admin',
            'menu' => array('Voltar' => 'usuario/login/index')
        ),
        
        'usuario/login/show' => array(
            'label' => 'Visualizar login', 'publico' => 'n', 'default_yes' => 's','default_no' => 'n',
            'permission' => 'usuario/admin', 'needcod' => true,
            'menu' => array('usuario/login/index', 'Ações' => array('Editar' => 'usuario/login/edit', 'Excluir' => 'usuario/login/apagar'))
        ),
        
        'usuario/login/edit' => array(
            'label' => 'Editar login', 'publico' => 'n', 'default_no' => 's','default_no' => 'n', 
            'permission' => 'usuario/admin', 'needcod' => true,
            'menu' => array('usuario/login/index', 'Voltar para login' => 'usuario/login/show')
        ),

        'usuario/login/apagar' => array(
            'label' => 'Excluir login', 'publico' => 'n', 'default_no' => 's','default_no' => 'n',
            'permission' => 'usuario/admin', 'needcod' => true,
            'menu' => array()
        ),

    
        
        'pessoal/endereco/index' => array(
            'label' => 'endereco', 'publico' => 'n', 'default_yes' => 's','default_no' => 'n',
            'permission' => 'pessoal_admin',
            'menu' => array('Página Principal' => 'pessoal/index/index', 'pessoal/endereco/formulario')
        ),
        
        'pessoal/endereco/formulario' => array(
            'label' => 'Criar endereco', 'publico' => 'n', 'default_yes' => 's','default_no' => 'n',
            'permission' => 'pessoal_admin',
            'menu' => array('Voltar' => 'pessoal/endereco/index')
        ),
        
        'pessoal/endereco/show' => array(
            'label' => 'Visualizar endereco', 'publico' => 'n', 'default_yes' => 's','default_no' => 'n',
            'permission' => 'pessoal_admin', 'needcod' => true,
            'menu' => array('pessoal/endereco/index', 'Ações' => array('Editar' => 'pessoal/endereco/edit', 'Excluir' => 'pessoal/endereco/apagar'))
        ),
        
        'pessoal/endereco/edit' => array(
            'label' => 'Editar endereco', 'publico' => 'n', 'default_no' => 's','default_no' => 'n', 
            'permission' => 'pessoal_admin', 'needcod' => true,
            'menu' => array('pessoal/endereco/index', 'Voltar para endereco' => 'pessoal/endereco/show')
        ),

        'pessoal/endereco/apagar' => array(
            'label' => 'Excluir endereco', 'publico' => 'n', 'default_no' => 's','default_no' => 'n',
            'permission' => 'pessoal_admin', 'needcod' => true,
            'menu' => array()
        ),

    
        
        'pessoal/telefone/index' => array(
            'label' => 'telefone', 'publico' => 'n', 'default_yes' => 's','default_no' => 'n',
            'permission' => 'pessoal_admin',
            'menu' => array('Página Principal' => 'pessoal/index/index', 'pessoal/telefone/formulario')
        ),
        
        'pessoal/telefone/formulario' => array(
            'label' => 'Criar telefone', 'publico' => 'n', 'default_yes' => 's','default_no' => 'n',
            'permission' => 'pessoal_admin',
            'menu' => array('Voltar' => 'pessoal/telefone/index')
        ),
        
        'pessoal/telefone/show' => array(
            'label' => 'Visualizar telefone', 'publico' => 'n', 'default_yes' => 's','default_no' => 'n',
            'permission' => 'pessoal_admin', 'needcod' => true,
            'menu' => array('pessoal/telefone/index', 'Ações' => array('Editar' => 'pessoal/telefone/edit', 'Excluir' => 'pessoal/telefone/apagar'))
        ),
        
        'pessoal/telefone/edit' => array(
            'label' => 'Editar telefone', 'publico' => 'n', 'default_no' => 's','default_no' => 'n', 
            'permission' => 'pessoal_admin', 'needcod' => true,
            'menu' => array('pessoal/telefone/index', 'Voltar para telefone' => 'pessoal/telefone/show')
        ),

        'pessoal/telefone/apagar' => array(
            'label' => 'Excluir telefone', 'publico' => 'n', 'default_no' => 's','default_no' => 'n',
            'permission' => 'pessoal_admin', 'needcod' => true,
            'menu' => array()
        ),

    
        
        'pessoal/email/index' => array(
            'label' => 'email', 'publico' => 'n', 'default_yes' => 's','default_no' => 'n',
            'permission' => 'pessoal_admin',
            'menu' => array('Página Principal' => 'pessoal/index/index', 'pessoal/email/formulario')
        ),
        
        'pessoal/email/formulario' => array(
            'label' => 'Criar email', 'publico' => 'n', 'default_yes' => 's','default_no' => 'n',
            'permission' => 'pessoal_admin',
            'menu' => array('Voltar' => 'pessoal/email/index')
        ),
        
        'pessoal/email/show' => array(
            'label' => 'Visualizar email', 'publico' => 'n', 'default_yes' => 's','default_no' => 'n',
            'permission' => 'pessoal_admin', 'needcod' => true,
            'menu' => array('pessoal/email/index', 'Ações' => array('Editar' => 'pessoal/email/edit', 'Excluir' => 'pessoal/email/apagar'))
        ),
        
        'pessoal/email/edit' => array(
            'label' => 'Editar email', 'publico' => 'n', 'default_no' => 's','default_no' => 'n', 
            'permission' => 'pessoal_admin', 'needcod' => true,
            'menu' => array('pessoal/email/index', 'Voltar para email' => 'pessoal/email/show')
        ),

        'pessoal/email/apagar' => array(
            'label' => 'Excluir email', 'publico' => 'n', 'default_no' => 's','default_no' => 'n',
            'permission' => 'pessoal_admin', 'needcod' => true,
            'menu' => array()
        ),

    
        
        'pessoal/tipotelefone/index' => array(
            'label' => 'tipotelefone', 'publico' => 'n', 'default_yes' => 's','default_no' => 'n',
            'permission' => 'pessoal_admin',
            'menu' => array('Página Principal' => 'pessoal/index/index', 'pessoal/tipotelefone/formulario')
        ),
        
        'pessoal/tipotelefone/formulario' => array(
            'label' => 'Criar tipotelefone', 'publico' => 'n', 'default_yes' => 's','default_no' => 'n',
            'permission' => 'pessoal_admin',
            'menu' => array('Voltar' => 'pessoal/tipotelefone/index')
        ),
        
        'pessoal/tipotelefone/show' => array(
            'label' => 'Visualizar tipotelefone', 'publico' => 'n', 'default_yes' => 's','default_no' => 'n',
            'permission' => 'pessoal_admin', 'needcod' => true,
            'menu' => array('pessoal/tipotelefone/index', 'Ações' => array('Editar' => 'pessoal/tipotelefone/edit', 'Excluir' => 'pessoal/tipotelefone/apagar'))
        ),
        
        'pessoal/tipotelefone/edit' => array(
            'label' => 'Editar tipotelefone', 'publico' => 'n', 'default_no' => 's','default_no' => 'n', 
            'permission' => 'pessoal_admin', 'needcod' => true,
            'menu' => array('pessoal/tipotelefone/index', 'Voltar para tipotelefone' => 'pessoal/tipotelefone/show')
        ),

        'pessoal/tipotelefone/apagar' => array(
            'label' => 'Excluir tipotelefone', 'publico' => 'n', 'default_no' => 's','default_no' => 'n',
            'permission' => 'pessoal_admin', 'needcod' => true,
            'menu' => array()
        ),

    
        
        'pessoal/redesocial/index' => array(
            'label' => 'redesocial', 'publico' => 'n', 'default_yes' => 's','default_no' => 'n',
            'permission' => 'pessoal_admin',
            'menu' => array('Página Principal' => 'pessoal/index/index', 'pessoal/redesocial/formulario')
        ),
        
        'pessoal/redesocial/formulario' => array(
            'label' => 'Criar redesocial', 'publico' => 'n', 'default_yes' => 's','default_no' => 'n',
            'permission' => 'pessoal_admin',
            'menu' => array('Voltar' => 'pessoal/redesocial/index')
        ),
        
        'pessoal/redesocial/show' => array(
            'label' => 'Visualizar redesocial', 'publico' => 'n', 'default_yes' => 's','default_no' => 'n',
            'permission' => 'pessoal_admin', 'needcod' => true,
            'menu' => array('pessoal/redesocial/index', 'Ações' => array('Editar' => 'pessoal/redesocial/edit', 'Excluir' => 'pessoal/redesocial/apagar'))
        ),
        
        'pessoal/redesocial/edit' => array(
            'label' => 'Editar redesocial', 'publico' => 'n', 'default_no' => 's','default_no' => 'n', 
            'permission' => 'pessoal_admin', 'needcod' => true,
            'menu' => array('pessoal/redesocial/index', 'Voltar para redesocial' => 'pessoal/redesocial/show')
        ),

        'pessoal/redesocial/apagar' => array(
            'label' => 'Excluir redesocial', 'publico' => 'n', 'default_no' => 's','default_no' => 'n',
            'permission' => 'pessoal_admin', 'needcod' => true,
            'menu' => array()
        ),

    
        
        'pessoal/perfilrede/index' => array(
            'label' => 'perfilrede', 'publico' => 'n', 'default_yes' => 's','default_no' => 'n',
            'permission' => 'pessoal_admin',
            'menu' => array('Página Principal' => 'pessoal/index/index', 'pessoal/perfilrede/formulario')
        ),
        
        'pessoal/perfilrede/formulario' => array(
            'label' => 'Criar perfilrede', 'publico' => 'n', 'default_yes' => 's','default_no' => 'n',
            'permission' => 'pessoal_admin',
            'menu' => array('Voltar' => 'pessoal/perfilrede/index')
        ),
        
        'pessoal/perfilrede/show' => array(
            'label' => 'Visualizar perfilrede', 'publico' => 'n', 'default_yes' => 's','default_no' => 'n',
            'permission' => 'pessoal_admin', 'needcod' => true,
            'menu' => array('pessoal/perfilrede/index', 'Ações' => array('Editar' => 'pessoal/perfilrede/edit', 'Excluir' => 'pessoal/perfilrede/apagar'))
        ),
        
        'pessoal/perfilrede/edit' => array(
            'label' => 'Editar perfilrede', 'publico' => 'n', 'default_no' => 's','default_no' => 'n', 
            'permission' => 'pessoal_admin', 'needcod' => true,
            'menu' => array('pessoal/perfilrede/index', 'Voltar para perfilrede' => 'pessoal/perfilrede/show')
        ),

        'pessoal/perfilrede/apagar' => array(
            'label' => 'Excluir perfilrede', 'publico' => 'n', 'default_no' => 's','default_no' => 'n',
            'permission' => 'pessoal_admin', 'needcod' => true,
            'menu' => array()
        ),

    
        
        'pessoal/dadosextras/index' => array(
            'label' => 'dadosextras', 'publico' => 'n', 'default_yes' => 's','default_no' => 'n',
            'permission' => 'pessoal_admin',
            'menu' => array('Página Principal' => 'pessoal/index/index', 'pessoal/dadosextras/formulario')
        ),
        
        'pessoal/dadosextras/formulario' => array(
            'label' => 'Criar dadosextras', 'publico' => 'n', 'default_yes' => 's','default_no' => 'n',
            'permission' => 'pessoal_admin',
            'menu' => array('Voltar' => 'pessoal/dadosextras/index')
        ),
        
        'pessoal/dadosextras/show' => array(
            'label' => 'Visualizar dadosextras', 'publico' => 'n', 'default_yes' => 's','default_no' => 'n',
            'permission' => 'pessoal_admin', 'needcod' => true,
            'menu' => array('pessoal/dadosextras/index', 'Ações' => array('Editar' => 'pessoal/dadosextras/edit', 'Excluir' => 'pessoal/dadosextras/apagar'))
        ),
        
        'pessoal/dadosextras/edit' => array(
            'label' => 'Editar dadosextras', 'publico' => 'n', 'default_no' => 's','default_no' => 'n', 
            'permission' => 'pessoal_admin', 'needcod' => true,
            'menu' => array('pessoal/dadosextras/index', 'Voltar para dadosextras' => 'pessoal/dadosextras/show')
        ),

        'pessoal/dadosextras/apagar' => array(
            'label' => 'Excluir dadosextras', 'publico' => 'n', 'default_no' => 's','default_no' => 'n',
            'permission' => 'pessoal_admin', 'needcod' => true,
            'menu' => array()
        ),

    
    );
    
}
