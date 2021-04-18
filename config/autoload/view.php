<?php

declare(strict_types=1);
/**
 * @link    https://github.com/BinZhiZhu/hyperf-study-demo
 * @contact  binzhizhu@gmail.com
 * @document https://hyperf.wiki
 */
use Hyperf\View\Engine\BladeEngine;
use Hyperf\View\Mode;

return [
    'engine' => BladeEngine::class,
    'mode' => Mode::TASK,
    'config' => [
        'view_path' => BASE_PATH . '/storage/view/',
        'cache_path' => BASE_PATH . '/runtime/view/',
    ],
];
