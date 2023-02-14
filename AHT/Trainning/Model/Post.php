<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace AHT\Trainning\Model;

use AHT\Trainning\Api\Data\PostInterface;
use Magento\Framework\Model\AbstractModel;

class Post extends AbstractModel implements PostInterface
{

    /**
     * @inheritDoc
     */
    public function _construct()
    {
        $this->_init(\AHT\Trainning\Model\ResourceModel\Post::class);
    }
    public function setPostContent($postContent): Post
    {
        return $this->setData('content', $postContent);
    }
    public function setPostTitle($postTitle): Post
    {
        return $this->setData('title', $postTitle);
    }
    public function setPostStatus($postStatus): Post
    {
        return $this->setData('status', $postStatus);
    }
    public function setPostDescription($postDescription): Post
    {
        return $this->setData('description', $postDescription);
    }

}
