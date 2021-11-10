<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ContactController extends AbstractController
{
    /**
     * @Route("/contact/{city}", name="contact")
     */
    public function index(Request $request, string $city = ""): Response
    {
        $name = $request->query->get('name');

        return $this->render('contact/index.html.twig', [
            'controller_name' => 'LucasSlr',
            'city' => $city,
            'name' => $name
        ]);
    }
}
