<?php

/**
 * @package     ${NAMESPACE}
 * @subpackage
 *
 * @copyright   A copyright
 * @license     A "Slug" license name e.g. GPL2
 */
class ClienteItem extends Eloquent
{
    /**
     * @return array
     */
    public function cliente()
    {
        return $this->belongsTo('Cliente');
    }
}