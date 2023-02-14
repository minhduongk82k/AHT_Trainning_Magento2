<?php
namespace AHT\Trainning\Model;

use AHT\Trainning\Api\PostRepositoryInterface as PostRepositoryInterface;
use AHT\Trainning\Api\Data\PostInterface as PostInterface;
use AHT\Trainning\Model\ResourceModel\Post as Post;
use AHT\Trainning\Model\ResourceModel\Post\Collection as Collection;
use Magento\Framework\Api\SearchCriteria\CollectionProcessorInterface;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\NoSuchEntityException;

class PostRepositoryModel implements PostRepositoryInterface
{
    protected $_postFactory; //thuộc tính
    protected $postResource;
    protected $dataNew;
    protected $post;
    protected $resource;
    public function __construct( //method
        \AHT\Trainning\Model\ResourceModel\Post $resource,
        \Magento\Framework\App\Action\Context     $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \AHT\Trainning\Model\PostFactory    $postFactory,
        \AHT\Trainning\Model\ResourceModel\Post    $post
    )
    {
        $this->_pageFactory = $pageFactory;  //$pageFactory =\Magento\Framework\View\Result\PageFactory
        $this->_postFactory = $postFactory;
        $this->postResource =$post;
        $this->resource = $resource;
        //$post =\AHT\Trainning\Model\ResourceModel\Post
    }

    /**
     * @inheritDoc
     */
    public function save(PostInterface $post)
    {

        try {
            $this->postResource->save($post);
        } catch (\Exception $exception) {
            throw new CouldNotSaveException(__(
                'Could not save the aHT: %1',
                $exception->getMessage()
            ));
        }
        return $post;
    }


    /**
     * @inheritDoc
     */
    public function get($postId)
    {
        $post = $this->_postFactory->create();
        $this->resource->load($post, $postId);
        if (!$post->getId()) {
            throw new NoSuchEntityException(__('Post with id "%1" does not exist.', $postId));
        }
        return $post;
    }

    public function delete (PostInterface $postModel) //Param = (PostInterface $postModel) Khi gọi function delate thì phải có PostInterface
    {
        try {
            $post = $this->_postFactory->create();
            $this->resource->load($post, $postModel->getId());
            $this->resource->delete($post);
        } catch (\Exception $exception) {
            throw new CouldNotDeleteException(__(
                'Could not delete the dell: %1',
                $exception->getMessage()
            ));
        }
        return true;
    }

    /**
     * @inheritDoc
     */
    public function deleteById($postId)
    {
        return $this->delete($this->get($postId));
    }

    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $searchCriteria)
    {
        // TODO: Implement getList() method.
    }
}
