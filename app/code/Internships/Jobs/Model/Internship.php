<?php
declare(strict_types=1);

namespace Internships\Jobs\Model;

use Magento\Framework\Model\AbstractModel;

class Internship extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('Internships\Jobs\Model\ResourceModel\Internship');
    }
}
