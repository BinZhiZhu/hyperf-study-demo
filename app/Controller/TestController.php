<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\Controller;

use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\GetMapping;
use Hyperf\HttpServer\Contract\RequestInterface;

/**
 * Class TestController.
 * @Controller
 */
class TestController
{
    /**
     * @GetMapping(path="index/{id:\d+}/{token:\d+}")
     * @return array
     */
    public function index(RequestInterface $request, int $id, string $token)
    {
        return [
            'id' => $id,
            'token' => $token,
        ];
    }
}
