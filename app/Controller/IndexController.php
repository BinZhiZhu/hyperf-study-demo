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

use App\Interfaces\CustomerServiceInterface;
use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Annotation\AutoController;
use Swoole\Coroutine\Channel;

/**
 * Class IndexController.
 * @AutoController 默认分配路由/控制器/方法名 、可指定分配到具体的server:server="innerHttp"
 */
class IndexController extends AbstractController
{
    /**
     * @Inject
     * @var CustomerServiceInterface
     */
    protected $customerService;

    /**
     * {@inheritDoc}
     */
    public function index()
    {
        $user = $this->request->input('user', 'Hyperf');
        $method = $this->request->getMethod();

        return [
            'method' => $method,
            'message' => "Hello {$user}.",
        ];
    }

    public function getUser()
    {
        $userId = $this->request->input('id');

        $userId = intval($userId);

        return [
            'userId' => $userId,
            'user' => $this->customerService->getCustomer($userId),
        ];
    }

    /**
     * 测试协程demo.
     */
    public function testCoroutine()
    {
        co(function () {
            $channel = new Channel();
            co(function () use ($channel) {
                $channel->push('data');
            });

            $data = $channel->pop();

            var_dump($data);
        });
    }
}
