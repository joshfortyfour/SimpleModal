<?php

namespace Oddyssey\SimpleModal\Ui\Component\Listing\Column\Simplemodallisting;

use Magento\Ui\Component\Listing\Columns\Column;

/**
 * Class PageActions
 *
 * @package Oddyssey\SimpleModal\Ui\Component\Listing\Column\Simplemodallisting
 */
class PageActions extends Column
{
    /**
     * Prepare Data Source
     *
     * @param array $dataSource Data source
     *
     * @return array
     */
    public function prepareDataSource(array $dataSource)
    {
        if (isset($dataSource["data"]["items"])) {
            foreach ($dataSource["data"]["items"] as & $item) {
                $name = $this->getData("name");
                $id   = "X";

                if (isset($item["modal_id"])) {
                    $id = $item["modal_id"];
                }

                $item[$name]["view"] = [
                    "href"  => $this->getContext()
                        ->getUrl(
                            "simplemodal_listing/modal/edit", ["modal_id" => $id]
                        ),
                    "label" => __("Edit")
                ];
            }
        }

        return $dataSource;
    }

}
