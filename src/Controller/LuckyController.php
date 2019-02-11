<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use App\Entity\Formation;
use App\Entity\Competence;
use App\Entity\Experience;
use App\Entity\Hobbies;

class LuckyController extends Controller {

    public function number()
    {
        $number = random_int(0, 100);
        
        $forma = $this->getDoctrine()->getRepository(Formation::class)->findAll();
        $compe = $this->getDoctrine()->getRepository(Competence::class)->findAll();
        $exp = $this->getDoctrine()->getRepository(Experience::class)->findAll();
        $hobbie = $this->getDoctrine()->getRepository(Hobbies::class)->findAll();
        
        return $this->render('lucky/number.html.twig', array(
            'number' => $number,
            'formations' =>$forma,
            'competences' =>$compe,
            'experiences' =>$exp,
            'hobbies' =>$hobbie
        ));
    }
    
     
    
 
}