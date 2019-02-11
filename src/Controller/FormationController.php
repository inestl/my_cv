<?php
// src/Controller/formationrController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Formation;
use App\Form\FormationType;

class FormationController extends AbstractController 
{

    public function create()
    {
        $formation = new Formation();
        $form = $this->createForm(FormationType::class,$formation);
        
        return $this->render('formation/create.html.twig', [
            'entity' => $formation,
            'form' => $form->createView(),
             ]
           
        );
    }
     


public function valid(Request $request)
{
    $formation = new Formation();
    $form = $this->createForm(FormationType::class,$formation);
    
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        $loisir = $form->getData();
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($loisir);
        $entityManager->flush();
        
        return $this->redirectToRoute('index');
        
    }

return $this->render('formation/create.html.twig', [
    'entity =>$formation',
    'form' => $form->createView(),
    ]
        );
    }
}