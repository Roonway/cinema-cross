<?php

return [
    '/' => 'site/index',
    'login' => 'site/login',
    'logout' => 'site/logout',

    'usuario' => 'user/index',
    'usuario/cadastrar' => 'user/create',
    'usuario/<id:\d+>/atualizar' => 'user/update',
    'usuario/<id:\d+>/excluir' => 'user/delete',

    'produto' => 'product/index',
    'produto/cadastrar' => 'product/create',
    'produto/<id:\d+>/atualizar' => 'product/update',
    'produto/<id:\d+>/excluir' => 'product/delete',
    'produto/<id:\d+>/detalhes' => 'product/view',

    'cliente' => 'client/index',
    'cliente/cadastrar' => 'client/create',
    'cliente/<id:\d+>/atualizar' => 'client/update',
    'cliente/<id:\d+>/excluir' => 'client/delete',
    'cliente/<id:\d+>/detalhes' => 'client/view',

    'empregado' => 'employee/index',
    'empregado/cadastrar' => 'employee/create',
    'empregado/<id:\d+>/atualizar' => 'employee/update',
    'empregado/<id:\d+>/excluir' => 'employee/delete',
    'empregado/<id:\d+>/detalhes' => 'employee/view',

    'sala' => 'room/index',
    'sala/cadastrar' => 'room/create',
    'sala/<id:\d+>/atualizar' => 'room/update',
    'sala/<id:\d+>/excluir' => 'room/delete',

    'assento' => 'seat/index',
    'assento/cadastrar' => 'seat/create',
    'assento/<id:\d+>/atualizar' => 'seat/update',
    'assento/<id:\d+>/excluir' => 'seat/delete',

    'filme' => 'movie/index',
    'filme/cadastrar' => 'movie/create',
    'filme/<id:\d+>/atualizar' => 'movie/update',
    'filme/<id:\d+>/excluir' => 'movie/delete',
    'filme/<id:\d+>/detalhes' => 'movie/view',

    'diretor' => 'director/index',
    'diretor/cadastrar' => 'director/create',
    'diretor/<id:\d+>/atualizar' => 'director/update',
    'diretor/<id:\d+>/excluir' => 'director/delete',

    'genero' => 'genre/index',
    'genero/cadastrar' => 'genre/create',
    'genero/<id:\d+>/atualizar' => 'genre/update',
    'genero/<id:\d+>/excluir' => 'genre/delete',

    'sessao' => 'session/index',
    'sessao/cadastrar' => 'session/create',
    'sessao/<id:\d+>/atualizar' => 'session/update',
    'sessao/<id:\d+>/excluir' => 'session/delete',
    'sessao/<id:\d+>/detalhes' => 'session/view',

    'ingresso/cadastrar' => 'ticket/create',
    'ingresso/<id:\d+>/atualizar' => 'ticket/update',
    'ingresso/<id:\d+>/excluir' => 'ticket/delete',
    'ingresso/<id:\d+>/detalhes' => 'ticket/view',

    'venda/cadastrar' => 'sale/create',
    'venda/<id:\d+>/atualizar' => 'sale/update',
    'venda/<id:\d+>/excluir' => 'sale/delete',
    'venda/<id:\d+>/detalhes' => 'sale/view',

    'phone-client/cadastrar' => 'phone-client/create',
    'phone-client/<id:\d+>/atualizar' => 'phone-client/update',
    'phone-client/<id:\d+>/excluir' => 'phone-client/delete',

    'phone-employee/cadastrar' => 'phone-employee/create',
    'phone-employee/<id:\d+>/atualizar' => 'phone-employee/update',
    'phone-employee/<id:\d+>/excluir' => 'phone-employee/delete',
];