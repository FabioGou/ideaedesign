<?php

/**
 * @package     ${NAMESPACE}
 * @subpackage
 *
 * @copyright   A copyright
 * @license     A "Slug" license name e.g. GPL2
 */
class ConsumidorEndereco extends Eloquent
{
    public function consumidor()
    {
        return $this->belongsTo('Consumidor');
    }
}