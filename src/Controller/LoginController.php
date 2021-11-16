<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\DBAL\Connection;


class LoginController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'table' => []
        ]);
    }


    public function login(Request $request,Connection $connection)
    {
        $parameters = json_decode($request->getContent(), true);
        $passphrase = $parameters["passphrase"];
        if ($passphrase === "mypass"){
            $response = $this->forward('App\Controller\TableController::index',[
                'connection' => $connection
            ]);      
        }else{
            return new JsonResponse(["error" => "wrong passphrase"]);
        }

        return $response;
    }
}
