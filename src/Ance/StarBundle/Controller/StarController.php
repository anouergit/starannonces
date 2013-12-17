<?php

namespace Ance\StarBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use Ance\StarBundle\Entity\Annonce;
class StarController extends Controller
{
    public function indexAction()
    {
      // …

      // Les articles :
      $articles = array(
        array(
          'titre'   => 'Mon weekend a Phi Phi Island !',
          'id'      => 1,
          'auteur'  => 'winzou',
          'contenu' => 'Ce weekend était trop bien. Blabla…',
          'date'    => new \Datetime()),
        array(
          'titre'   => 'Repetition du National Day de Singapour',
          'id'      => 2,
          'auteur' => 'winzou',
          'contenu' => 'Bientôt prêt pour le jour J. Blabla…',
          'date'    => new \Datetime()),
        array(
          'titre'   => 'Chiffre d\'affaire en hausse',
          'id'      => 3, 
          'auteur' => 'M@teo21',
          'contenu' => '+500% sur 1 an, fabuleux. Blabla…',
          'date'    => new \Datetime())
      );

      // Puis modifiez la ligne du render comme ceci, pour prendre en compte nos articles :
      return $this->render('AnceStarBundle:Star:index.html.twig', array(
        'articles' => $articles
      ));
    }
    
    public function menuAction($nombre) // Ici, nouvel argument $nombre, on l'a transmis via le render() depuis la vue
    {
      // On fixe en dur une liste ici, bien entendu par la suite on la récupérera depuis la BDD !
      // On pourra récupérer $nombre articles depuis la BDD,
      // avec $nombre un paramètre qu'on peut changer lorsqu'on appelle cette action
      $liste = array(
        array('id' => 2, 'titre' => 'Mon dernier weekend !'),
        array('id' => 5, 'titre' => 'Sortie de Symfony2.1'),
        array('id' => 9, 'titre' => 'Petit test')
      );

      return $this->render('AnceStarBundle:Star:menu.html.twig', array(
        'liste_articles' => $liste // C'est ici tout l'intérêt : le contrôleur passe les variables nécessaires au template !
      ));
    }
    
    /**
     * 
     */
    public function addAction(){
        $annonce = new Annonce();
        $annonce->setTitle('Clio à vendre');
        $annonce->setShortDec("test de test long desc");
        $annonce->setLongDec("test de test long desc");
        $em = $this->getDoctrine()->getManager();
        $em->persist($annonce);
        $em->flush();
        
           // Reste de la méthode qu'on avait déjà écrit
        /*if ($this->getRequest()->getMethod() == 'POST') {
          $this->get('session')->getFlashBag()->add('info', 'Annonce bien enregistré');
          return $this->redirect( $this->generateUrl('add_ance', array('id' => $annonce->getId())) );
        }*/

        return $this->render('AnceStarBundle:Star:add.html.twig');
    
        
    }
}
