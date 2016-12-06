<?php


class ClienteEndereco extends Eloquent
{
    public function cliente()
    {
        return $this->belongsTo('Cliente');
    }


}

