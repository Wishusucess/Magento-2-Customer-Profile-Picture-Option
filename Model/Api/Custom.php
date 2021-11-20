<?php
/**
 * Category: Wishusucess_CustomerImage
 * Developer: Hemant Singh Magento 2x Developer
 * Website: http://wwww.wishusucess.com
 */
namespace Wishusucess\CustomerImage\Model\Api;

use Psr\Log\LoggerInterface;

class Custom
{
    /** @var \Magento\Framework\View\Result\PageFactory  */
    protected $resultPageFactory;
    protected $_branddata;
               
    public function __construct(
     \Magento\Framework\View\Result\PageFactory $resultPageFactory,
     \Wishusucess\CustomerImage\Model\Cbackground $branddata
    ) {
                        $this->resultPageFactory = $resultPageFactory;
                        $this->_branddata = $branddata;
           
    }

    /**
     * @inheritdoc
     */

    public function getPost($customerid)
    {
        $response = ['success' => false];

        try {
           $result= $this->_branddata->getCollection()->getData();
         
           $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
           $storeManager = $objectManager->get('\Magento\Store\Model\StoreManagerInterface');
           $storeurll=$storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_WEB);
           
                          
                         foreach( $result as $key=>$values)
                         {
                             if($values['entity_id']==$customerid)
                             {
                    $finaldata=$storeurll."media/sk_profile_pic/".$values['sk_profile_pic'];
                             }
                            
                         }
                         $response=$finaldata;
            
        } catch (\Exception $e) {
            $response = ['success' => false, 'message' => $e->getMessage()];
        }
        $returnArray = $response;
        return $returnArray; 
    }
}