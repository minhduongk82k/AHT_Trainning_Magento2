<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace AHT\Trainning\Api\Data;

interface PostSearchResultInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get AHT list.
     * @return \AHT\Trainning\Api\Data\PostInterface[]
     */
    public function getItems();

    /**
     * Set Trainning list.
     * @param \AHT\Trainning\Api\Data\PostInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
