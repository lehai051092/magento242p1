<?php
declare(strict_types=1);

namespace Internships\Jobs\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Internship extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('internships', 'internship_id');
    }
}
