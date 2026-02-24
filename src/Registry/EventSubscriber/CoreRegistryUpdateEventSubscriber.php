<?php

namespace Drupal\dmf_distributor_csv\Registry\EventSubscriber;

use DigitalMarketingFramework\Distributor\Csv\DistributorCsvInitialization;
use Drupal\dmf_core\Registry\EventSubscriber\AbstractCoreRegistryUpdateEventSubscriber;

/**
 * Event subscriber for core registry updates from dmf_distributor_csv.
 */
class CoreRegistryUpdateEventSubscriber extends AbstractCoreRegistryUpdateEventSubscriber
{
    /**
     * Constructs a CoreRegistryUpdateEventSubscriber object.
     */
    public function __construct()
    {
        parent::__construct(new DistributorCsvInitialization('dmf_distributor_csv'));
    }
}
