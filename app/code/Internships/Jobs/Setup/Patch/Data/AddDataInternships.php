<?php
declare(strict_types=1);

namespace Internships\Jobs\Setup\Patch\Data;

use Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface;
use Magento\Eav\Setup\EavSetup;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;

class AddDataInternships implements DataPatchInterface
{
    /**
     * ModuleDataSetupInterface
     *
     * @var ModuleDataSetupInterface
     */
    private ModuleDataSetupInterface $moduleDataSetup;

    /**
     * EavSetupFactory
     *
     * @var EavSetupFactory
     */
    private EavSetupFactory $eavSetupFactory;

    /**
     * AddProductAttribute constructor.
     *
     * @param ModuleDataSetupInterface  $moduleDataSetup
     * @param EavSetupFactory           $eavSetupFactory
     */
    public function __construct(
        ModuleDataSetupInterface $moduleDataSetup,
        EavSetupFactory $eavSetupFactory
    ) {
        $this->moduleDataSetup = $moduleDataSetup;
        $this->eavSetupFactory = $eavSetupFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function apply()
    {
        $this->moduleDataSetup->startSetup();
        $data[] = ['first_name' => 'Lee', 'last_name' => 'Vu', 'age' => 29, 'job_id' => 1];
        $data[] = ['first_name' => 'Bi', 'last_name' => 'Boo', 'age' => 4, 'job_id' => 2];
        $data[] = ['first_name' => 'Vu', 'last_name' => 'Anh', 'age' => 29, 'job_id' => 3];

        $this->moduleDataSetup->getConnection()->insertArray(
            $this->moduleDataSetup->getTable('internships'),
            ['first_name', 'last_name', 'age', 'job_id'],
            $data
        );

        $this->moduleDataSetup->endSetup();
    }

    /**
     * {@inheritdoc}
     */
    public static function getDependencies(): array
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getAliases(): array
    {
        return [];
    }
}
