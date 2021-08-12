<?php

use adminlte\widgets\Menu;
use yii\helpers\Html;
use yii\helpers\Url;
?>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
<?= Html::img('@web/img/user2-160x160.jpg', ['class' => 'img-circle', 'alt' => 'User Image']) ?>
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <?=
        Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu'],
                    'items' => [
                        ['label' => 'Menu', 'options' => ['class' => 'header']],
                        ['label' => 'Dashboard', 'icon' => 'fa fa-dashboard', 
                            'url' => ['/'], 'active' => $this->context->route == 'site/index'
                        ],
                        [
                            'label' => 'Item',
                            'icon' => 'fa fa-coffee',
                            'url' => '#',
                            'items' => [
                                [
                                    'label' => 'Item Category',
                                    'icon' => 'fa fa-cutlery',
                                    'url' => '/reservation/backend/web/item-category',
				    'active' => $this->context->route == '/reservation/backend/web/item-category'
                                ],
                                [
                                    'label' => 'Item',
                                    'icon' => 'fa fa-cutlery',
                                    'url' => '/reservation/backend/web/item',
				    'active' => $this->context->route == '/reservation/backend/web/item'
                                ]
                            ]
                        ],
                        [
                            'label' => 'Order',
                            'icon' => 'fa fa-cart-arrow-down',
                            'url' => '#',
                            'items' => [
                                [
                                    'label' => 'Order',
                                    'icon' => 'fa fa-shopping-cart',
                                    'url' => '/reservation/backend/web/order',
				    'active' => $this->context->route == '/reservation/backend/web/order'
                                ],
                                [
                                    'label' => 'Order Detail',
                                    'icon' => 'fa fa-shopping-cart',
                                    'url' => '/reservation/backend/web/order-detail',
				    'active' => $this->context->route == '/reservation/backend/web/order-detail'
                                ]
                            ]
                        ],
                        [
                            'label' => 'Users',
                            'icon' => 'fa fa-users',
                            'url' => '/reservation/backend/web/user',
                            'active' => $this->context->route == '/reservation/backend/web/user',
                        ],
                        ['label' => 'Gii', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
                        ['label' => 'Debug', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
                    ],
                ]
        )
        ?>
        
    </section>
    <!-- /.sidebar -->
</aside>
