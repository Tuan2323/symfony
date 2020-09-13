<?php
    namespace App\Controller;

    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Annotation\Route;

    class HelloController
    {
        /**
        * @Route("/hello")
        */
        public function sayHello()
        {
            return new Response('Hello!');
        }
        /**
        * @Route("/bonjour/{nom}")
        */
        public function bonjour($nom)
        {
            return new Response("Bonjour $nom !");
        }
}