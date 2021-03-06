<?php
/**
 * Copyright since 2007 PrestaShop SA and Contributors
 * PrestaShop is an International Registered Trademark & Property of PrestaShop SA
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License version 3.0
 * that is bundled with this package in the file LICENSE.md.
 * It is also available through the world-wide-web at this URL:
 * https://opensource.org/licenses/AFL-3.0
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * @author    PrestaShop SA and Contributors <contact@prestashop.com>
 * @copyright Since 2007 PrestaShop SA and Contributors
 * @license   https://opensource.org/licenses/AFL-3.0 Academic Free License version 3.0
 */

namespace PrestaShop\Module\Ps_metrics\Environment;

class SegmentEnv extends Env
{
    /**
     * Firebase public api key
     *
     * @var string
     */
    private $segmentApiKey;

    /**
     * SegmentEnv constructor.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->setSegmentApiKey($_ENV['SEGMENT_API_KEY']);
    }

    /**
     * getter for segmentApiKey
     *
     * @return string
     */
    public function getSegmentApiKey()
    {
        return $this->segmentApiKey;
    }

    /**
     * setter for segmentApiKey
     *
     * @param string $apiKey
     *
     * @return void
     */
    private function setSegmentApiKey($apiKey)
    {
        $this->segmentApiKey = $apiKey;
    }
}
