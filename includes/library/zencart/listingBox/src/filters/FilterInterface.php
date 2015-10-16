<?php
/**
 * Class FilterInterface
 *
 * @copyright Copyright 2003-2015 Zen Cart Development Team
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: currencies.php 15880 2010-04-11 16:24:30Z wilt $
 */
namespace ZenCart\ListingBox\filters;

/**
 * Interface FilterInterface
 * @package ZenCart\ListingBox\filters
 */
Interface FilterInterface
{
    public function filterItem(array $listingQuery);
}