<?php
   namespace App\Controller;
   use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
   use Symfony\Component\HttpFoundation\Response;
   use Symfony\Component\Routing\Annotation\Route;

   class OutilAndStoreController extends AbstractController {

        /**
         * @Route("/game_for_programmer", name="game")
         */
        public function Game(){
            return $this->render("outilAndStore/gameRoom.html.twig");
        }

         /**
         * @Route("/find_free_book_programmer", name="store")
         */
        public function BookStore(){
            return $this->render("outilAndStore/bookStore.html.twig");
        }
   }