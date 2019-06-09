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
                        'label' => 'Usuários',
                        'icon' => 'user-circle',
                        'url' => ['user/index'],
                    ],
                    [
                        'label' => 'Assentos',
                        'icon' => 'toggle-down',
                        'url' => ['seat/index'],
                    ],
                    [
                        'label' => 'Salas',
                        'icon' => 'youtube-play',
                        'url' => ['room/index'],
                    ],
                    [
                        'label' => 'Ingressos',
                        'icon' => 'ticket',
                        'url' => ['ticket/index'],
                    ],
                    [
                        'label' => 'Sessão',
                        'icon' => 'video-camera',
                        'url' => ['session/index'],
                    ],
                    [
                        'label' => 'Gêneros',
                        'icon' => 'rocket',
                        'url' => ['genre/index'],
                    ],
                    [
                        'label' => 'Filmes',
                        'icon' => 'film',
                        'url' => ['movie/index'],
                    ],
                    [
                        'label' => 'Conveniência',
                        'icon' => 'shopping-cart',
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
                        'label' => 'Funcionário',
                        'icon' => 'black-tie',
                        'url' => ['employee/index'],
                    ],
                    [
                        'label' => 'Diretor',
                        'icon' => 'street-view',
                        'url' => ['director/index'],
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
