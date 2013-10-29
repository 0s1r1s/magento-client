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

namespace Smalot\Magento\GiftMessage;

use Smalot\Magento\MagentoModuleAbstract;

/**
 * Class GiftMessage
 *
 * @package Smalot\Magento\GiftMessage
 */
class GiftMessage extends MagentoModuleAbstract
{
    /**
     * @param string $quoteId
     * @param array  $giftMessage
     * @param string $store
     *
     * @return array
     */
    public function setForQuote($quoteId, $giftMessage, $store)
    {
        return $this->remoteAdapter->giftMessageSetForQuote($quoteId, $giftMessage, $store);
    }

    /**
     * @param string $quoteItemId
     * @param array  $giftMessage
     * @param string $store
     *
     * @return array
     */
    public function setForQuoteItem($quoteItemId, $giftMessage, $store)
    {
        return $this->remoteAdapter->giftMessageSetForQuoteItem($quoteItemId, $giftMessage, $store);
    }

    /**
     * @param string $quoteId
     * @param array  $productsAndMessages
     * @param string $store
     *
     * @return array
     */
    public function setForQuoteProduct($quoteId, $productsAndMessages, $store)
    {
        return $this->remoteAdapter->giftMessageSetForQuoteProduct($quoteId, $productsAndMessages, $store);
    }
}
