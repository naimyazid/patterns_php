<?php
/** 
 * Factory Method est un design pattern qui résout le problème de création d’objets sans spécifier leurs classes concrètes.
 * Factory Method définit une méthode qui doit être utilisée pour créer des objets au lieu d’un appel direct de constructeur (opérateur new). Les sous-classes peuvent remplacer cette méthode pour changer la classe d’objets qui seront créés. 
**/
require_once('./ProductA.php');
require_once('./ProductB.php');

class ProductCommand
{
    protected $prodCmd = array();
    protected $prod;

    // Fabriquer le produit
    protected function make($type=null)
    {
        if($type=='a')
        {
            return $this->prod = new ProductA('produita');
        }
        else
        {
            return $this->prod = new ProductB('produitb');
        }
    }

    // Commander le produit
    public function command($type=null)
    {
        $prod = $this->make($type);
        $this->prodCmd[] = $prod->getName();
    }

    public function getProdCmd()
    {
        return $this->prodCmd;
    }
}