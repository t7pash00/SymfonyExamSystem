<?php
// src/Controller/DefaultController.php
namespace App\Controller;

use App\Entity\Login;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class DefaultController extends AbstractController
{
    public function new(Request $request)
    {
        // creates a login and gives it some dummy data for this example
        $login = new login();
        $Username->setUsername('write username');
        $Password->setPassword('write password');

        $form = $this->createFormBuilder($task)
            ->add('Username', TextType::class)
            ->add('Password', TextType::class)
            ->add('save', SubmitType::class, array('label' => 'login'))
            ->getForm();

        return $this->render('default/new.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}