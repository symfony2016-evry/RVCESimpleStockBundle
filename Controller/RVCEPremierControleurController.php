<?php
namespace SYM16SimpleStockBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class RVCEPremierControleurController extends Controller
{
    public function iLikeAction($verbe){
   return new Response("J'aime beaucoup...  ".$verbe.'!');
    }

    public function multAction($var1, $var2){
   return new Response("Le Produit de ".$var1." par " .$var2." est égale à: ".$var1*$var2);
    }
    public function hexaAction($var1, $var2){
   return new Response("Le Produit de ".$var1." par " .$var2." est égale à: ".$var1*$var2);

    
}

}

