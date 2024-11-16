<?php

namespace view;

use helpers\Helper;
use Smarty\Smarty;

include_once "smarty-master/libs/Smarty.class.php";

class gamesView
{
    private Smarty $smarty;

    function __construct () {
        $this->smarty = new Smarty();
        $this->smarty->assign('props', Helper::getAppProps());
    }

    function showGameEditForm($game_ID){
        $this->smarty->assign( 'game_ID', $game_ID);
        $this->smarty->display('./templates/editGameForm.tpl');
    }

    function showGamesByCompany($games , $mensaje=null)
    {
        if (!$mensaje){
            $this->smarty->assign('mensaje' , $mensaje);
        }
        $this->smarty->assign('games' , $games);
        $this->smarty->display('./templates/gamesByCompany.tpl');
    }
}