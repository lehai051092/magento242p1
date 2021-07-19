<?php
declare(strict_types=1);

namespace Internships\Jobs\Block\Jobs;

use Magento\Framework\View\Element\Template;

class Index extends Template
{
    /**
     * Index constructor.
     * @param Template\Context $context
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    /**
     * @return string
     */
    public function getText(): string
    {
        return 'Hello';
    }
}
