<?php
 
namespace Achi\WeatherApp\Model\ResourceModel;
 
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
 
class Weather extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('achi_weatherapp_weather', 'id');
    }
}

