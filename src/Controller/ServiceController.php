<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ServiceController extends AbstractController
{
    #[Route('/service', name: 'app_service')]
    public function index(): Response
    {
        $myServices = [
            [
                'h3_title' => 'Hair Cut',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.',
                'icon_name' => 'flaticon-bald'
            ],
            [
                'h3_title' => 'Facial & Body Care',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.',
                'icon_name' => 'flaticon-beard'
            ],
            [
                'h3_title' => 'Massages',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.',
                'icon_name' => 'flaticon-scissors'
            ],
            [
                'h3_title' => 'Hair Cut',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.',
                'icon_name' => 'flaticon-hair-spray'
            ],
            [
                'h3_title' => 'Hair Cut',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.',
                'icon_name' => 'flaticon-hair-spray'
            ],
            [
                'h3_title' => 'Facial & Body Care',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati, laboriosam.',
                'icon_name' => 'flaticon-beard'
            ]
        ];
        return $this->render('service/index.html.twig', [
            'title_page' => 'My Service Page',
            'href_link' => 'app_service',
            'my_description' => 'Et voila nos services',
            'my_services' => $myServices
        ]);
    }


}
