<?php

namespace Oddyssey\SimpleModal\Ui\Component\Listing\DataProviders\Simplemodal;

use Magento\Ui\DataProvider\AbstractDataProvider;
use Oddyssey\SimpleModal\Model\ResourceModel\Modal\CollectionFactory;

/**
 * Class Listing
 *
 * @package Oddyssey\SimpleModal\Ui\Component\Listing\DataProviders\Simplemodal
 */
class Listing extends AbstractDataProvider
{
    /**
     * Listing constructor.
     *
     * @param string            $name              Name
     * @param string            $primaryFieldName  Primary Field Name
     * @param string            $requestFieldName  Request Field Name
     * @param CollectionFactory $collectionFactory Collection
     * @param array             $meta              Meta
     * @param array             $data              Data
     */
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $collectionFactory,
        array $meta = [],
        array $data = []
    ) {
        parent::__construct(
            $name, $primaryFieldName, $requestFieldName, $meta, $data
        );

        $this->collection = $collectionFactory->create();
    }
}
