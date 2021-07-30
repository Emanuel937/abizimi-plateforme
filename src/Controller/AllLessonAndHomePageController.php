<?php
   namespace App\Controller;
   use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
   use Symfony\Component\HttpFoundation\Response;
   use Symfony\Component\Routing\Annotation\Route;

   class AllLessonAndHomePageController extends AbstractController {
        /**
         * @Route("/", name="home")
         */
        public function homePage(){
            /**
             * 
             * this function only show the home page and no more than that
             */
            return $this->render('allLessonAndHomePage/home.html.twig');
        }
        /**
         * @Route("/programming_language_lesson_category", name="categories")
         */
        public function LessonCategories(){
            /**
             *  this function show all lesson avaible by category
             *  user can filter the lesson
             */
            
            $allLessonData = null; //here came all lesson data 
            return $this->render('allLessonAndHomePage/lessonCategories.html.twig',['allLessonData'=>$allLessonData]);
        }
        /**
         * @Route("/programming_language_lessons", name="lessonContent")
         */
        public function lessonContent(){
            return $this->render('allLessonAndHomePage/lessonContent.html.twig');
        }
    }
?>