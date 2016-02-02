<?php
namespace SYM16SimpleStockBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

class RVCEPremierControleurController extends Controller
{
    public function iLikeAction($verbe){
   return new Response("J'aime beaucoup...  ".$verbe.'!');
    }

    public function produitAction($var1, $var2){
   $produit = hexdec($var1) * hexdec($var2);

   return $this->render('SYM16SimpleStockBundle:MonPremier:produit.html.twig', 
   array('var1' => $var1,
         'var2' => $var2,
          'resultat' => $produit) 
   );
  // return new Response("Le Produit de ".$var1." par " .$var2." est égale à: ".$var1*$var2);

    }
    public function hexaAction($var1, $var2){
   return new Response("Le Produit de ".$var1." par " .$var2." est égale à: ".$var1*$var2);
   
}

    public function racineAction($valeur, $radical){
        $this->get('session')->getFlashBag()
                ->add('info','Choix indisponible, faites un autre choix');
        $this->get('session')->getFlashBag()
                ->add('info','Presser F5 pour supprimer ce message flash');

        $url = $this->get('router')->
        generate('sym16_simple_stock_homepage', array('name' =>'Jacques'));
        return new RedirectResponse($url);
    }
}

