<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace AHT\Trainning\Api\Data;

interface PostInterface
{

    /**
     * Get aht_id
     * @return string|null
     */
    public function getId();

    /**
     * Set aht_id
     * @param string $ahtId
     * @return \AHT\Trainning\AHT\Api\Data\PostInterface
     */
    public function setId($postId);

}
