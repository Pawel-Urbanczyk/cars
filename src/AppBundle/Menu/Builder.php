<?php

/**
 * Created by PhpStorm.
 * User: Paweł
 * Date: 07.01.2018
 * Time: 16:51
 */

namespace AppBundle\Menu;

use Knp\Menu\MenuFactory;

class Builder
{
    public function mainMenu(MenuFactory $factory, array $options)
    {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav navbar-nav');
        $menu->addChild('Home', ['route' => 'homepage']);
        $menu->addChild('Offer', ['route' =>'offer']);
        return $menu;
    }
}