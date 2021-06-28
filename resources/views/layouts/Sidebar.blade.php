<?php 
use App\Helpers\General_helper;
 
$menu = General_helper::getMenu();

// var_dump($menu);
// die;

?>

<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu
                    </li>
        @foreach ($menu as $nav)
        <?php

            if(count($nav->child) == 0)
            {
                ?>
                        <li class="nav-item ">
                            <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-{{ $nav->id }}"><i class="fa fa-fw fa-user-circle"></i></i>{{ $nav->name }}</a>
                            <div id="submenu-1" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                </ul>
                            </div>
                        </li>
        <?php 
            } 
            else
            {?>
                        <li class="nav-item ">
                            <a class="nav-link active" href="{{ $nav->url }}" data-toggle="collapse" aria-expanded="false" data-target="#submenu-{{ $nav->id }}" aria-controls="submenu-{{ $nav->id }}"><i class="fa fa-fw fa-user-circle"></i></i>{{ $nav->name }}</a>
                            <div id="submenu-{{ $nav->id }}" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <?php ?>
                                    @foreach($nav->child as $sub)
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ $sub->url }}" aria-expanded="false" aria-controls="submenu-{{ $sub->parent_id }}">{{ $sub->name }}</a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            
                        </li>
            <?php 
            }?>
        @endforeach
                </ul>     
            </div>
        </nav>
    </div>
</div>