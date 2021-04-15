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

use Hyperf\HttpServer\Annotation\AutoController;
use Hyperf\View\RenderInterface;

/**
 * Class ViewController.
 * @AutoController
 */
class ViewController
{
    /**
     * @param RenderInterface $render
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function index(RenderInterface $render)
    {
        return $render->render('index', [
            'title'=>'毒鸡汤',
        ]);
    }
}
