<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\Variable;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class FirstController extends AbstractController
{
    #[Route("/test")]
    // public function test(){
    //  return new Response('Bonjours');
    // //  return new JsonResponse("msg"=>"test");
    // }
    public function test()
    {
        return $this->render(
            "first.html.twig",
            [
                "Variable" => "From PHP",
                "isOk" => true
            ]
        );
    }

    #[Route("/exo-twig")]

    public function exoTwig()
    {
        $names = ["Nom 1", "Nom 2", "Nom 3, Nom4"];
        return $this->render(
            "exo-twig.html.twig",
            [
                "names" => $names
            ]
            //    corecte cela mais je tien celle de prof.
            //    $names=>["Nom 1", "Nom 2", "Nom 3"]
        );
    }


    #[Route("/example/{name}")]
    public function paramExemple(string $names)
    {
        return new Response("bonjour" . $names);
    }


}