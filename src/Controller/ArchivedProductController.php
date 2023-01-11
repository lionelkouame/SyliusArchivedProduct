<?php
namespace App\Controller;

use App\MassAction\MassActionManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;


final class ArchivedProductController  extends AbstractController
{
    private MassActionManager $massActionManager;

    /**
     * @param MassActionManager $massActionManager
     */
    public function __construct(MassActionManager $massActionManager)
    {
        $this->massActionManager = $massActionManager;
    }

    public function index(Request $request) : JsonResponse
    {
        $ids = json_decode($request->request->get('productIds'));

        $this->massActionManager->archived($ids);

        return new JsonResponse($ids);
    }
}
