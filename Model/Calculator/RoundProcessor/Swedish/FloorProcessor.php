<?php
/**
 * Copyright © Karliuka Vitalii(karliuka.vitalii@gmail.com)
 * See COPYING.txt for license details.
 */
namespace Faonni\Price\Model\Calculator\RoundProcessor\Swedish;

use Faonni\Price\Model\Calculator\RoundProcessorInterface;

/**
 * Swedish floor round processor
 */
class FloorProcessor extends AbstractProcessor implements RoundProcessorInterface
{
    /**
     * Retrieve the rounded price
     *
     * @param float $price
     * @return float
     */
    public function round($price)
    {
        return floor($price/$this->getFraction()) * $this->getFraction();
    }
}
