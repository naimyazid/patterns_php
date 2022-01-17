<?php

// Nous utilisons le design patterns singleton afin de limiter le nombre d’instances pouvant être créées à partir d’une classe consommatrice.

// L’anatomie du pattern singleton
/**
 * Commençons par comprendre les caractéristiques structurelles d’une classe qui suit le pattern singleton:
 * 1 Un constructeur privé est utilisé pour empêcher la création directe d’objets à partir de la classe.
 * 2 Le processus est effectué au sein du constructeur privé.
 * 3 La seule façon de créer une instance à partir de la classe est d’utiliser une méthode statique qui crée l’objet uniquement s’il n’a pas déjà été créé.
**/


// Singleton pour connecter à la bd
class ConnexionBd
{
    // Garder l'instance de la classe
    private static $instance = null;
    private $connexion;

    // La connexion à la bd est établie dans le constructeur privé.
    private function __construct()
    {
        $this->connexion = new \PDO("mysql:host=localhost;dbname=patterns", "root", "");
    }

    public static function getInstance()
    {
        if(!self::$instance)
        {
            self::$instance = new ConnexionBd();
        }

        return self::$instance;
    }

    public function getConnexion()
    {
        return $this->connexion;
    }
}