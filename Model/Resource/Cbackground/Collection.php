<?php 
/**
 * Category: Wishusucess_CustomerImage
 * Developer: Hemant Singh Magento 2x Developer
 * Website: http://wwww.wishusucess.com
 */
namespace Wishusucess\CustomerImage\Model\Resource\Cbackground;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Wishusucess\CustomerImage\Model\Cbackground', 'Wishusucess\CustomerImage\Model\Resource\Cbackground');
    }
}