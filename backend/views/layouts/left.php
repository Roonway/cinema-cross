<?php

use dmstr\widgets\Menu;

?>
<aside class="main-sidebar">
    <section class="sidebar">
        <?= Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget' => 'tree'],
                'items' => [
                    [
                        'label' => 'Dashboard',
                        'icon' => 'home',
                        'url' => ['site/index'],
                    ],
                    [
                        'label' => 'Usuário',
                        'icon' => 'users',
                        'url' => ['user/index'],
                    ],
                    [
                        'label' => 'Assentos',
                        'icon' => 'toggle-down',
                        'url' => ['seat/index'],
                    ],
                    [
                        'label' => 'Salas',
                        'icon' => 'institution',
                        'url' => ['room/index'],
                    ],
                    [
                        'label' => 'Ingressos',
                        'icon' => 'ticket',
                        'url' => ['ticket/index'],
                    ],
                    [
                        'label' => 'Sessão',
                        'icon' => 'file-movie-o',
                        'url' => ['session/index'],
                    ],
                    [
                        'label' => 'Gêneros',
                        'icon' => 'rocket',
                        'url' => ['genre/index'],
                    ],
                    [
                        'label' => 'Filmes',
                        'icon' => 'video-camera',
                        'url' => ['movie/index'],
                    ],
                    [
                        'label' => 'Conveniência',
                        'icon' => 'money',
                        'url' => ['sale/index'],
                    ],
                    [
                        'label' => 'Produtos',
                        'icon' => 'cube',
                        'url' => ['product/index'],
                    ],
                    [
                        'label' => 'Cliente',
                        'icon' => 'user',
                        'url' => ['client/index'],
                    ],

                    [
                        'label' => 'Empregado',
                        'icon' => 'wrench',
                        'url' => ['employee/index'],
                    ],
                    [
                        'label' => 'Diretor',
                        'icon' => 'street-view',
                        'url' => ['director/index'],
                    ],
                    [
                        'label' => 'Funcionário',
                        'icon' => 'user',
                        'url' => ['employee/index'],
                    ],

                    [
                        'label' => 'Menu Yii2',
                        'options' => ['class' => 'header'],
                        'visible' => YII_ENV_DEV,
                    ],
                    [
                        'label' => 'Gii',
                        'icon' => 'file-code-o',
                        'url' => ['/gii'],
                        'visible' => YII_ENV_DEV,
                    ],
                    [
                        'label' => 'Debug',
                        'icon' => 'dashboard',
                        'url' => ['/debug'],
                        'visible' => YII_ENV_DEV,
                    ],
                ],
            ]
        ) ?>
    </section>
</aside>
