<?php
   namespace App\Controller;
   use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
   use Symfony\Component\HttpFoundation\Response;
   use Symfony\Component\Routing\Annotation\Route;

   class ConnexionController extends AbstractController {

        /**
         * @Route("/creating_an_account", name="signup")
         */
        public function SignUp(){
            return $this->render("connexion/signup.html.twig");
        }

        /**
         * @Route("/connection", name="login")
         */
        public function Login(){
            return $this->render("connexion/login.html.twig");
        }

      
   }