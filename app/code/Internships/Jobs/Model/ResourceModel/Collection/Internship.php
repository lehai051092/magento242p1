<?php
declare(strict_types=1);

namespace Internships\Jobs\Model\ResourceModel\Collection;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Internship extends AbstractCollection
{
    protected string $model = 'Internships\Jobs\Model\Internship';
    protected string $resourceModel = 'Internships\Jobs\Model\ResourceModel\Internship';
    protected string $internshipId = 'internship_id';

    protected function _construct()
    {
        $this->_init($this->model, $this->resourceModel);
    }
}
