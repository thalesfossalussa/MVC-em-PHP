<?php

namespace App\Controller\Pages;

use \App\Utils\View;

class Page {

    /**
     * Método responsável por retornar o conteúdo (view) do header da página
     * @return string
     */
    private static function getHeader(){
        return View::render('pages/header');
    }

    /**
     * Método responsável por retornar o conteúdo (view) do footer da página
     * @return string
     */
    private static function getFooter(){
        return View::render('pages/footer');
    }

    /**
     * Método responsável por retornar o conteúdo (view) da nossa página
     * @return string
     */
    public static function getPage($title, $content){
        return View::render('pages/page',[
            'title' => $title,
            'header' => page::getHeader(),
            'footer' => page::getFooter(),
            'content' => $content
        ]);

    }
}