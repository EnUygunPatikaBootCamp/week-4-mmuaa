<?php
// src/Controller/UserController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WebAppController extends AbstractController
{
    /**
     * @Route("/webapp", name="webapp")
     */
    public function week4assigment(): Response
    {
        // get the parameters
        $title = 'Patika';
        $minititle = 'EnUygun';
        $array = [
            array('name' => 'Patika'),
            array('name' => 'Bootcamp'),
            array('name' => 'Class')
        ];

        // the template path is the relative file path from `templates/`
        return $this->render('week4assigment.html.twig', [
            // this array defines the variables passed to the template,
            // where the key is the variable name and the value is the variable value
            // (Twig recommends using snake_case variable names: 'foo_bar' instead of 'fooBar')
            'title' => $title,
            'miniTitle' => $minititle,
            'array' => $array,
        ]);
    }
}