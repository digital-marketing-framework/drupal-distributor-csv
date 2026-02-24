<?php

namespace Drupal\dmf_distributor_csv\Registry\EventSubscriber;

use DigitalMarketingFramework\Distributor\Csv\DistributorCsvInitialization;
use Drupal\dmf_distributor_core\Registry\EventSubscriber\AbstractDistributorRegistryUpdateEventSubscriber;

/**
 * Event subscriber for distributor registry updates from dmf_distributor_csv.
 */
class DistributorRegistryUpdateEventSubscriber extends AbstractDistributorRegistryUpdateEventSubscriber
{
    /**
     * Constructs a DistributorRegistryUpdateEventSubscriber object.
     */
    public function __construct()
    {
        parent::__construct(new DistributorCsvInitialization('dmf_distributor_csv'));
    }
}
