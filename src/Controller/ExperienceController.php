<?php
// src/Controller/loisirController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Experience;
use App\Form\ExperienceType;

class ExperienceController extends AbstractController 
{

    public function create()
    {
        $experience = new Experience();
        $form = $this->createForm(ExperienceType::class,$experience);
        
        return $this->render('experience/create.html.twig', [
            'entity' => $experience,
            'form' => $form->createView(),
             ]
           
        );
    }
     


public function valid(Request $request)
{
    $experience = new Experience();
    $form = $this->createForm(ExperienceType::class,$experience);
    
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        $loisir = $form->getData();
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($loisir);
        $entityManager->flush();
        
        return $this->redirectToRoute('index');
        
    }

return $this->render('experience/create.html.twig', [
    'entity =>$experience',
    'form' => $form->createView(),
    ]
        );
    }
}