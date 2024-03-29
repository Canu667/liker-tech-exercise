<?php
declare(strict_types=1);


namespace App\Api\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use OpenApi\Annotations as OA;

/**
 * @OA\Info(title="Liker API", version="1.0.0")
 */
class ApiController
{
    public function openApiJson(): JsonResponse
    {
        $openapi = \OpenApi\scan(__DIR__. '/..');
        $json = $openapi->toJson();

        return new JsonResponse($json, JsonResponse::HTTP_OK, [], true);
    }
}
