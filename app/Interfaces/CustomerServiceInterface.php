<?php

namespace App\Interfaces;

/**
 * Interface CustomerServiceInterface
 * @package App\Interfaces
 */
interface CustomerServiceInterface
{
    /**
     * 获取客户实体
     * @param int $id
     * @return mixed
     */
    public function getCustomer(int $id);

}