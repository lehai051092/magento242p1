<?php
declare(strict_types=1);

namespace Internships\Jobs\Helper;

use Internships\Jobs\Api\Contains;
use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Config extends AbstractHelper
{
    /**
     * @param $field
     * @param null $storeId
     * @return mixed
     */
    public function getConfigValue($field, $storeId = null)
    {
        return $this->scopeConfig->getValue(
            $field, ScopeInterface::SCOPE_STORE, $storeId
        );
    }

    /**
     * @param $storeId
     * @return mixed
     */
    public function getInternshipsJobsEnable($storeId = null)
    {
        return $this->getConfigValue(Contains::INTERNSHIPS_JOBS_ENABLE, $storeId);
    }

}
