<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
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
        /*return $this->render('table/index.html.twig', [
            'controller_name' => 'TableController',
        ]);*/
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
        //return new JsonResponse(["1"=>"aaa","2"=>"bbb"]);
    }
}
