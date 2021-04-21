<?php

declare(strict_types=1);
/**
 * @link    https://github.com/BinZhiZhu/hyperf-study-demo
 * @contact  binzhizhu@gmail.com
 */
namespace App\Controller;

use App\Model\SoulEntity;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\RequestMapping;
use Hyperf\View\RenderInterface;

/**
 * Class SoulController.
 * @Controller
 */
class SoulController extends AbstractController
{
    /**
     * @RequestMapping(path="list", methods="get,post")
     */
    public function list()
    {
        /** @var SoulEntity $soulEntity */
        $soulEntity = SoulEntity::inRandomOrder()->first();

        if ($soulEntity) {
            ++$soulEntity->hits;
            $soulEntity->save();
        }

        // db rand 一条毒鸡汤出来
        return $this->response->json([
            'content' => $soulEntity->title ?? '毒鸡汤',
            'hits' => $soulEntity->hits ?? 0,
        ]);
    }

    /**
     * @RequestMapping(path="index", methods="get")
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function index(RenderInterface $render)
    {
        return $render->render('soul', [
            'title' => '毒鸡汤',
        ]);
    }
}
