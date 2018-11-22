<?php
/**
 * Created by L.
 * Author: wxuns
 * Link: https://www.wxuns.cn
 * Date: 2018/11/22
 * Time: 14:15
 */
namespace Wxuns\Migration;
class Init
{
    public function getAdapter()
    {
        if (isset($this->adapter)){
            return $this->adapter;
        }

    }
    public function getConfig()
    {
        
    }
}