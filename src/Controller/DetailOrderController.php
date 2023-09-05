<?php

namespace App\Controller;

use App\Entity\Order;
use App\Repository\OrderRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DetailOrderController extends AbstractController
{
    #[Route('/detail/order/{id}', name: 'order_details')]
    public function index(int $id, OrderRepository $detail_order): Response
    {
        $order = $detail_order -> find($id);

        // dd($order);

        return $this->render('detail_order/index.html.twig', [
            'controller_name' => 'DetailOrderController',
            'order_detail' => $order,
            'id' => $id
        ]);
    }
}
