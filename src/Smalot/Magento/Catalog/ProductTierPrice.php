<?php

/**
 * @file
 *          Magento API Client (SOAP v2 - standard).
 *          Allows wrappers for each call, dependencies injections
 *          and code completion.
 *
 * @author  Sébastien MALOT <sebastien@malot.fr>
 * @license GPL-2.0
 * @url     <https://github.com/smalot/magento-client>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Smalot\Magento\Catalog;

use Smalot\Magento\MagentoModuleAbstract;

/**
 * Class ProductTierPrice
 *
 * @package Smalot\Magento\Catalog
 */
class ProductTierPrice extends MagentoModuleAbstract
{
    /**
     * Allows you to retrieve information about product tier prices.
     *
     * @param string $productId
     * @param string $identifierType
     *
     * @return mixed
     */
    public function getInfo($productId, $identifierType = null)
    {
        return $this->remoteAdapter->catalogProductAttributeTierPriceInfo($productId, $identifierType);
    }

    /**
     * Allows you to update the product tier prices.
     *
     * @param string $productId
     * @param array  $tierPrices
     * @param string $identifierType
     *
     * @return mixed
     */
    public function update($productId, $tierPrices, $identifierType = null)
    {
        return $this->remoteAdapter->catalogProductAttributeTierPriceUpdate($productId, $tierPrices, $identifierType);
    }
}
