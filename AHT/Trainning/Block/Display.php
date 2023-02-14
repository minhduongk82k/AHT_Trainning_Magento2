<?php
namespace AHT\Trainning\Block;

class Display extends \Magento\Framework\View\Element\Template
{

    protected $_filesystem;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \AHT\Trainning\Model\PostFactory $postFactory
    )
    {
        parent::__construct($context);
        $this->_postFactory = $postFactory;
    }

    public function getResult()
    {
        $post = $this->_postFactory->create();
        return $post;
    }
}
