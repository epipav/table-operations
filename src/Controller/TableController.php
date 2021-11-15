<?php

namespace App\Controller;


use FOS\ElasticaBundle\Finder\TransformedFinder;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\DBAL\Connection;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class TableController extends AbstractController
{
    /**
     * @Route("/table", name="table")
     */
    public function index(Connection $connection)
    {
        $words = ['sky', 'cloud', 'wood', 'rock', 'forest',
        'mountain', 'breeze'];

        $queryBuilder = $connection->createQueryBuilder();
        $table = $queryBuilder->select('*')->from('product')->execute()->fetchAll();
        return $this->render('home/index.html.twig', [
            'table' => $table
        ]);
    }

    public function getTable(Connection $connection)
    {
        /*return $this->render('table/index.html.twig', [
            'controller_name' => 'TableController',
        ]);*/

        $queryBuilder = $connection->createQueryBuilder();
        $data = $queryBuilder->select('*')->from('product')->execute()->fetchAll();

        return $this->json([
            'data' => $data
        ]);
        //return new JsonResponse(["1"=>"aaa","2"=>"bbb"]);
    }

    public function search(Request $request, SessionInterface $session, TransformedFinder $productFinder): Response
    {
        /*return $this->render('table/index.html.twig', [
            'controller_name' => 'TableController',
        ]);*/
        $parameters = json_decode($request->getContent(), true);
        $q = $parameters["q"];
        $results = !empty($q) ? $productFinder->findHybrid('*'.$q.'*',$limit=5000) : [];
        $session->set('q', $q);

        $products = [];

        foreach($results as $hit){
            array_push($products,$hit->getResult()->getSource());
        }

        return $this->json([
            'data' => $products,
            'q' => $q
        ]);
        //return new JsonResponse(["1"=>"aaa","2"=>"bbb"]);
    }
}
