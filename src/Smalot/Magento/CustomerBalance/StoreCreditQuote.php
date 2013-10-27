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

namespace Smalot\Magento\CustomerBalance;

use Smalot\Magento\MagentoModuleAbstract;

class StoreCreditQuote extends MagentoModuleAbstract
{
    /**
     * @param string $quoteId
     * @param string $store
     *
     * @return bool
     */
    public function removeAmount($quoteId, $store = null)
    {
        return $this->remoteAdapter->shoppingCartCustomerbalanceRemoveAmount($quoteId, $store);
    }

    /**
     * @param string $quoteId
     * @param string $store
     *
     * @return float
     */
    public function setAmount($quoteId, $store = null)
    {
        return $this->remoteAdapter->shoppingCartCustomerbalanceSetAmount($quoteId, $store);
    }
}
