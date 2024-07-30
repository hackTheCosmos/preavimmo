<?php

class indexController {
    public static function getIndex() {
        
        // affiche la page "Accueil"
        $title = "PréavImmo - Accueil";
        
        Renderer::render("Views/home.php", [
            "title" => $title
        ]);
    }

    public static function getCgu() {

        $title = "PréavImmo - CGU";
        
        Renderer::render("Views/footer/cgu.php", [
            "title" => $title
        ]);
    }
}