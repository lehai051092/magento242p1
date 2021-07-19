<?php
declare(strict_types=1);

namespace Internships\Jobs\Plugin;

use Magento\Catalog\Model\Product;
use Magento\Framework\Phrase;

class UpdateProductName
{
    /**
     * @param Product $subject
     * @param $result
     * @return Phrase
     */
    public function afterGetName(Product $subject, $result): Phrase
    {
        return __('Hello Internships Jobs');
    }
}
