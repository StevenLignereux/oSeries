<?php

class betaseries {

    const BASEURL = 'https://api.betaseries.com/shows/random';
    const JSONURL = '?v=3.0&nb=10&key=ba6e08b5dbbe';

    public function getRandom()
    {
        // Définition de mes url

        // Récuperation de mon json
        $json = file_get_contents(self::BASEURL . self::JSONURL);
        // $json est une variable qui contient une chaine de caractère
        // Je souhaite afficher mon json
        // header('Content-type: application/json');
        // echo $json;
        // Si je souhaite traiter les informations contenues dans ma variable.
        // Je doit décoder mon json de manière à le transformer en tableau PHP
        return json_decode($json, true);
    }
}
