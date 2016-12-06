<?php


class Consumidor extends Eloquent
{
    public function cliente()
    {
        return $this->belongsTo('Cliente');
    }

    public function endereco()
    {
        return $this->hasOne('ConsumidorEndereco');
    }

    public function pedidos()
    {
        return $this->hasMany('ConsumidorPedido');
    }
}