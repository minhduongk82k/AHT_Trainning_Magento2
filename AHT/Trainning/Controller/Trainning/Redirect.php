<?php

namespace AHT\Trainning\Controller\Trainning;

class Redirect
{
    /**
     * @param string $resultRedirect
     * @return void
     */
    public function beforeRedirectLogin(\Magento\Customer\Controller\Account\CreatePost $subject, $resultRedirect)
    {
        $resultRedirect = $resultRedirect->setUrl('https://www.google.com/');
        return [$resultRedirect];
    }
}


