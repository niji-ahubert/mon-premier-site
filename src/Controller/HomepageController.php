<?php

namespace App\Controller;

use App\Entity\Newsletter;
use App\Form\NewsletterType;
use App\Repository\NewsletterRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomepageController extends AbstractController
{
    public function __construct(private readonly NewsletterRepository $newsletterRepository)
    {

    }

    #[Route('/', name: 'app_homepage')]
    public function index(Request $request): Response
    {
        $newsletter =  new Newsletter();
        $form = $this->createForm(NewsletterType::class, $newsletter);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $this->addFlash(
                'success',
                'Your email has been registered'
            );
            $this->newsletterRepository->save($newsletter,true);
        }

        return $this->render('homepage/index.html.twig', [
            'title_page' => 'My Homepage',
            'href_link' => 'app_homepage',
            'my_description' => 'En voila un site de rêve !!!',
            'form' => $form->createView()

        ]);
    }
}
