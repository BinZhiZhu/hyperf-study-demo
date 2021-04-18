<?php

declare(strict_types=1);
/**
 * @link    https://github.com/BinZhiZhu/hyperf-study-demo
 * @contact  binzhizhu@gmail.com
 * @document https://hyperf.wiki
 */
namespace App\Controller;

use Hyperf\HttpServer\Annotation\AutoController;
use Hyperf\View\RenderInterface;

/**
 * Class ViewController.
 * @AutoController
 */
class ViewController
{
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function index(RenderInterface $render)
    {
        return $render->render('index', [
            'title' => '毒鸡汤',
        ]);
    }
}
