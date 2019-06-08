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
                        'label' => 'Produto',
                        'icon' => 'cube',
                        'url' => ['product/index'],
                    ],
                    [
                        'label' => 'Funcionário',
                        'icon' => 'user',
                        'url' => ['employee/index'],
                    ],
                    [
                        'label' => 'Filmes',
                        'icon' => 'film',
                        'url' => ['movie/index']
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
            ],
        ) ?>

    </section>

</aside>
