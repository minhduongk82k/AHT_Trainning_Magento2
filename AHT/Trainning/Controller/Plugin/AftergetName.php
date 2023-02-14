<?php
namespace AHT\Trainning\Controller\Plugin;

    class AftergetName
    {
        /**
         * @param ...$
         */
        public function __construct(

            \Magento\Framework\App\Request\Http $request
        )
        {
            $this->_request = $request;
        }
        public function afterGetName(\Magento\Catalog\Model\Product $subject,$result){
            if ($this->_request->getFullActionName() == 'catalog_category_view') {
                $result = 'AHT_' . $result;
            }
            return $result;
        }
}
