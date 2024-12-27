<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class HealthCheckController extends AbstractController
{
    #[Route(path:'/health-check', name: 'health_check')]
    public function index(): JsonResponse
    {
        return new JsonResponse(['app' => true]);
    }
}
