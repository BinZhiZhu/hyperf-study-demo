<?php

namespace App\Controller;

use App\Model\SoulEntity;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\RequestMapping;

/**
 * Class SoulController
 * @package App\Controller
 * @Controller
 */
class SoulController extends AbstractController
{

    /**
     * @RequestMapping(path="list",methods="get,post")
     */
    public function list()
    {
        /** @var SoulEntity $soulEntity */
        $soulEntity = SoulEntity::inRandomOrder()->first();

        if($soulEntity){
            $soulEntity->hits +=1;
            $soulEntity->save();
        }

        // db rand 一条毒鸡汤出来
        return $this->response->json([
            'content'=>$soulEntity->title ?? '毒鸡汤',
            'hits'=>$soulEntity->hits ?? 0,
        ]);
    }
}