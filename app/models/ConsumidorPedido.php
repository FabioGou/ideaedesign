<?php


class ConsumidorPedido extends Eloquent
{
    public function consumidor()
    {
        return $this->belongsTo('Consumidor');
    }
}