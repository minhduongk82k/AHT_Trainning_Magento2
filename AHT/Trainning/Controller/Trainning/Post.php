<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
namespace AHT\Trainning\Controller\Trainning;

use Magento\Framework\App\Action\HttpGetActionInterface;


class Post
{
    /**
     * Index action
     *
     * @return \Magento\Framework\Controller\Result\Redirect
     */
    protected $_postFactory; //thuộc tính
    protected $postResource;
    protected $dataNew;

    public function __construct( //method
        \Magento\Framework\App\Action\Context      $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \AHT\Trainning\Model\PostFactory    $postFactory,
        \AHT\Trainning\Model\ResourceModel\Post    $post
    )
    {
        $this->_pageFactory = $pageFactory;  //$pageFactory =\Magento\Framework\View\Result\PageFactory
        $this->_postFactory = $postFactory;
        $this->postResource =$post;   //$post =\AHT\Trainning\Model\ResourceModel\Post
    }

    public function execute()
    {
        $post = $this->_postFactory->create();

    }
}
