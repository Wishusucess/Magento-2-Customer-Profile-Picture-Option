<?php
/**
 * Category: Wishusucess_CustomerImage
 * Developer: Hemant Singh Magento 2x Developer
 * Website: http://wwww.wishusucess.com
 */
namespace Wishusucess\CustomerImage\Controller\Index;
  class Index extends \Magento\Framework\App\Action\Action {

    /** @var \Magento\Framework\View\Result\PageFactory  */
        protected $resultPageFactory;
         
    public function __construct(
    \Magento\Framework\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $resultPageFactory 
    ) {
                        $this->resultPageFactory = $resultPageFactory;
                        parent::__construct($context);
                       
            
    }
    public function execute() {
             $model = $this->_objectManager->create('Wishusucess\CustomerImage\Model\Cbackground');            
             $test =  $model->load(45);
             $array = $test->getCollection()->getData();        
              // var_dump($test->getCollection()->getData());
              // echo "<pre>";
              // print_r($test->getCollection()->getData()); 
          //    print_r(json_encode($test->getCollection()->getData()));

          $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
          $storeManager = $objectManager->get('\Magento\Store\Model\StoreManagerInterface');
          $storeurll=$storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_WEB);

                   echo "<pre>";
                  foreach( $array as $key=>$values)
                  {
                      if($values['entity_id']==45)
                      {
              echo $storeurll."media/sk_profile_pic/".$values['sk_profile_pic'];
                      }
                  }
                   die();
          }
  }