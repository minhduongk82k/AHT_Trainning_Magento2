<?php

namespace AHT\Trainning\Observer;

use AHT\Trainning\Api\PostRepositoryInterface;

class SignupSuccess implements \Magento\Framework\Event\ObserverInterface
{
    protected \AHT\Trainning\Model\PostFactory $postFactory;
    private PostRepositoryInterface $postRepository;
    private \Magento\Framework\View\Result\PageFactory $pageFactory;

    /**
     * @var \AHT\Trainning\Model\ResourceModel\Post\CollectionFactory
     */
    private $postCollectionFactory;

    public function __construct(
        \AHT\Trainning\Api\PostRepositoryInterface $postRepository,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \AHT\Trainning\Model\PostFactory $postFactory,
        \AHT\Trainning\Model\ResourceModel\Post\CollectionFactory $postCollectionFactory

    ) {
        $this->pageFactory = $pageFactory;
        $this->postFactory = $postFactory;
        $this->postCollectionFactory = $postCollectionFactory;
        $this->postRepository = $postRepository;
    }
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $customer = $observer->getData('customer');
        $fistName = $customer->getFirstname();
        $lastName = $customer->getLastname();
        $fullName = $fistName . ' ' . $lastName;
        $post = $this->postFactory->create();
        $post->setPostContent($fullName);
        $post->setPostTitle('121');
        $post->setPostStatus('1');
        $post->setPostDescription('dDescription(');
        $this->postRepository->save($post);
        $collection = $post->getCollection();
        foreach ($collection as $item) {
            echo "<pre>";
            print_r($item->getData());
            echo "</pre>";

        }
        return $this->pageFactory->create();
    }
}
