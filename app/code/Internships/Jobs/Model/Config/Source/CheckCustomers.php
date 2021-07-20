<?php
declare(strict_types=1);

namespace Internships\Jobs\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

class CheckCustomers implements ArrayInterface
{
    /**
     * @return array[]
     */
    public function toOptionArray(): array
    {
        return [
            [
                'value' => 0,
                'label' => 'NOT LOGGED IN',
            ],
            [
                'value' => 1,
                'label' => 'General',
            ],
            [
                'value' => 2,
                'label' => 'Wholesale',
            ],
            [
                'value' => 3,
                'label' => 'Retailer',
            ],
            [
                'value' => 4,
                'label' => 'Staff',
            ],
        ];
    }
}
