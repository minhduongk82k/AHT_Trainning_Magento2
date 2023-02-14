<?php
namespace AHT\Trainning\Controller\Trainning;

use AHT\Trainning\Controller;
use AHT\Trainning\Model\PostRepositoryModel as RepositoryModel;
use Magento\Framework\App\Action\HttpGetActionInterface;
use AHT\Trainning\Model\PostRepositoryModel as PostRepositoryModel;

class Repository extends \Magento\Framework\App\Action\Action  implements HttpGetActionInterface {

    protected $_postFactory; //thuộc tính
    protected \AHT\Trainning\Model\ResourceModel\Post $postResource;

    protected PostRepositoryModel $postRepositoryModel;

    public function __construct(  //method
        \Magento\Framework\App\Action\Context      $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \AHT\Trainning\Model\PostFactory    $postFactory,
        \AHT\Trainning\Model\ResourceModel\Post    $post,
        PostRepositoryModel $postRepositoryModel
    )
    {
        $this->_pageFactory = $pageFactory;  //$pageFactory =\Magento\Framework\View\Result\PageFactory
        $this->postResource =$post;   //$post =\AHT\Trainning\Model\ResourceModel\Post
        $this->postRepositoryModel = $postRepositoryModel;
        return parent::__construct($context);
    }

    public function execute()
    {
//        $post = $this->postRepositoryModel->get('4');
//        $post->setDescription('vai cut');
//        echo "<pre>";
//        print_r($post->getData());
//        echo "</pre>";
//        $this->postRepositoryModel->save($post);
//        exit();
        //xoa
        $post = $this->postRepositoryModel->get("7"); //trỏ biế
        $this->postRepositoryModel->delete($post);
        $this->postRepositoryModel->deleteById('2');
        $collection = $post->getCollection();
        foreach ($collection as $item) {
            echo "<pre>";
            print_r($item->getData());
            echo "</pre>";
        }
        exit();
    }

}




