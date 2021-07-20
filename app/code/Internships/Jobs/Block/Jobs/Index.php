<?php
declare(strict_types=1);

namespace Internships\Jobs\Block\Jobs;

use Internships\Jobs\Helper\Config;
use Magento\Framework\View\Element\Template;

class Index extends Template
{
    /**
     * @var Config
     */
    protected Config $config;

    /**
     * Index constructor.
     * @param Config $config
     * @param Template\Context $context
     * @param array $data
     */
    public function __construct(
        Config $config,
        Template\Context $context,
        array $data = []
    ) {
        $this->config = $config;
        parent::__construct($context, $data);
    }

    /**
     * @return string
     */
    public function getModuleEnable(): string
    {
        return $this->config->getInternshipsJobsEnable();
    }
}
