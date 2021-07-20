<?php
declare(strict_types=1);

namespace Internships\Jobs\Block\Adminhtml;

use Magento\Config\Block\System\Config\Form\Field\FieldArray\AbstractFieldArray;

class Report  extends AbstractFieldArray
{
    protected function _prepareToRender()
    {
        $this->addColumn(
            'name',
            [
                'label' => __('Name'),
                'class' => 'required-entry'
            ]
        );
        $this->addColumn(
            'age',
            [
                'label' => __('Age'),
                'class' => 'required-entry',
            ]
        );
        $this->_addAfter = false;
        $this->_addButtonLabel = __('Add Type');
    }
}
