<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace AHT\Trainning\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface PostRepositoryInterface
{

    /**
     * Save Post
     * @param \AHT\Trainning\Api\Data\PostInterface $post
     * @return \AHT\Trainning\Api\Data\PostInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(\AHT\Trainning\Api\Data\PostInterface $post);

    /**
     * Retrieve Post
     * @param string $postId
     * @return \AHT\Trainning\Api\Data\PostInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function get($postId);

    /**
     * Retrieve Post matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \AHT\Trainning\Api\Data\PostSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete Post
     */
    public function delete(\AHT\Trainning\Api\Data\PostInterface $post);
    /**
     * Delete Post by ID
     * @param string $postId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($postId);
}
