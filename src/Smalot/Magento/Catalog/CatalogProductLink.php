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
 * Class CatalogProductLink
 *
 * @package Smalot\Magento\Catalog
 */
class CatalogProductLink extends MagentoModuleAbstract
{
    const TYPE_CROSS_SELL = 'cross-sell';

    const TYPE_UP_SELL = 'up-sell';

    const TYPE_GROUPED = 'grouped';

    /**
     * Allows you to assign a product link (related, cross-sell, up-sell, or grouped) to another product.
     *
     * @param string $type
     * @param string $productId
     * @param string $linkedProductId
     * @param array  $data
     * @param string $identifierType
     *
     * @return mixed
     */
    public function assign($type, $productId, $linkedProductId, $data, $identifierType = null)
    {
        return $this->remoteAdapter->catalogProductLinkAssign(
            $type,
            $productId,
            $linkedProductId,
            $data,
            $identifierType
        );
    }

    /**
     * Allows you to retrieve the product link type attributes.
     *
     * @param string $type
     *
     * @return mixed
     */
    public function getAttributes($type)
    {
        return $this->remoteAdapter->catalogProductLinkAttributes($type);
    }

    /**
     * Allows you to retrieve the list of linked products for a specific product.
     *
     * @param string $type
     * @param string $productId
     * @param string $identifierType
     *
     * @return mixed
     */
    public function getList($type, $productId, $identifierType = null)
    {
        return $this->remoteAdapter->catalogProductLinkList($type, $productId, $identifierType);
    }

    /**
     * Allows you to remove the product link from a specific product.
     *
     * @param string $type
     * @param string $productId
     * @param string $linkedProductId
     * @param string $identifierType
     *
     * @return int
     */
    public function remove($type, $productId, $linkedProductId, $identifierType = null)
    {
        return $this->remoteAdapter->catalogProductLinkRemove($type, $productId, $linkedProductId, $identifierType);
    }

    /**
     * Allows you to retrieve the list of product link types.
     *
     * @return array
     */
    public function getTypes()
    {
        return $this->remoteAdapter->catalogProductLinkTypes();
    }

    /**
     * Allows you to update the product link.
     *
     * @param string $type
     * @param string $productId
     * @param string $linkedProductId
     * @param array  $data
     * @param string $identifierType
     *
     * @return mixed
     */
    public function update($type, $productId, $linkedProductId, $data, $identifierType = null)
    {
        return $this->remoteAdapter->catalogProductLinkUpdate(
            $type,
            $productId,
            $linkedProductId,
            $data,
            $identifierType
        );
    }
}
