<?php


class Cliente extends Eloquent
{

    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     *
     * @since version
     */
    public function consumidores()
    {
        return $this->hasMany('Consumidor');
    }

    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     *
     * @since version
     */
    public function endereco()
    {
        return $this->hasOne('ClienteEndereco');
    }

    /**
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     *
     * @since version
     */
    public function itens()
    {
        return $this->hasMany('ClienteItem');
    }

}

