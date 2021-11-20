<?php
/**
 * Category: Wishusucess_CustomerImage
 * Developer: Hemant Singh Magento 2x Developer
 * Website: http://wwww.wishusucess.com
 */
namespace Wishusucess\CustomerImage\Api;

interface CustomInterface
{
    /**
     * GET for Post api
     * @return boolean|array
     * @param string $customerId customer id.
     * 
     */

    public function getPost($customerid);
}