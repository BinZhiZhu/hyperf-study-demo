<?php

declare(strict_types=1);
/**
 * @link    https://github.com/BinZhiZhu/hyperf-study-demo
 * @contact  binzhizhu@gmail.com
 * @document https://hyperf.wiki
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
