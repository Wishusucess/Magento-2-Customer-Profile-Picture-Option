<?php 
/**
 * Category: Wishusucess_CustomerImage
 * Developer: Hemant Singh Magento 2x Developer
 * Website: http://wwww.wishusucess.com
 */
namespace Wishusucess\CustomerImage\Model\Resource;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
class Cbackground extends  AbstractDb
{
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        /* Custom Table Name */
         $this->_init('customer_entity','entity_id');
    }
}