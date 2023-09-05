<?php

namespace App\Controller;

use App\Repository\OrderRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrderController extends AbstractController
{
    #[Route('/', name: 'app_order')]
    public function index(OrderRepository $orders): Response
    {
        $listOrders = $orders -> findAll();

        // dd($listOrders);

        return $this->render('order/index.html.twig', [
            'controller_name' => 'OrderController',
            'orders' => $listOrders
        ]);
    }
}
