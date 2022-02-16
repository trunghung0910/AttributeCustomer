<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace AHT\AttributeCustomer\Model\Source;

class CompanyType extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{

    /**
     * getAllOptions
     *
     * @return array
     */
    public function getAllOptions()
    {
        if ($this->_options === null) {
            $this->_options = [
                ['value' => '0', 'label' => __('Please Select')],
                ['value' => '1', 'label' => __('Manufacturer')],
                ['value' => '2', 'label' => __('Brand and Marketing company')],
                ['value' => '3', 'label' => __('Extractor')],
                ['value' => '4', 'label' => __('Orther')],
            ];
        }
        return $this->_options;
    }
}
