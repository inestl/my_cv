<?php
// src/Controller/loisirController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Competence;
use App\Form\CompetenceType;

class CompetenceController extends AbstractController 
{

    public function create()
    {
        $competence = new Competence();
        $form = $this->createForm(CompetenceType::class,$competence);
        
        return $this->render('competence/create.html.twig', [
            'entity' => $competence,
            'form' => $form->createView(),
             ]
           
        );
    }
     


public function valid(Request $request)
{
    $competence = new Competence();
    $form = $this->createForm(CompetenceType::class,$competence);
    
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
        $loisir = $form->getData();
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($loisir);
        $entityManager->flush();
        
        return $this->redirectToRoute('index');
        
    }

return $this->render('competence/create.html.twig', [
    'entity =>$experience',
    'form' => $form->createView(),
    ]
        );
    }
}