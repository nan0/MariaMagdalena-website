<?php
 
// src/Sdz/BlogBundle/Controller/BlogController.php
 
namespace MariaMagdalena\TestBundle\Controller;
 
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
 
class TestController extends Controller
{
  public function indexAction()
  {
	return $this->render('MariaMagdalenaTestBundle:Test:index.html.twig', array('nom' => 'nan0','sexe' => 'masculin', 'taille' => '1m75'));
  }
  public function byebyeAction()
  {
	return $this->render('MariaMagdalenaTestBundle:Test:byebye.html.twig', array('nom' => 'fils de pute','sexe' => 'masculin', 'taille' => '1m75'));	  	
  }
}
