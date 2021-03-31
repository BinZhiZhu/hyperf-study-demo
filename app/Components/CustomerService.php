<?php

namespace App\Components;

use App\Interfaces\CustomerServiceInterface;

/**
 * Class CustomerService
 * @package App\Components
 */
class CustomerService implements CustomerServiceInterface
{

    /**
     * 获取客户实体
     * @param int $id
     * @return mixed
     */
    public function getCustomer(int $id)
    {
        return "客户ID:{$id}";
    }
}