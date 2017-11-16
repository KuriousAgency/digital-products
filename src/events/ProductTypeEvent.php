<?php

namespace craft\commerce\digitalProducts\events;

use craft\commerce\digitalProducts\models\ProductType;
use yii\base\Event;

/**
 * Product type event class.
 *
 * @author Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @since  2.0
 */
class ProductTypeEvent extends Event
{
    // Properties
    // =========================================================================

    /**
     * @var ProductType|null The product type model associated with the event.
     */
    public $productType;

    /**
     * @var bool Whether the category group is brand new
     */
    public $isNew = false;
}
