<?php


class AdmController extends Controller
{

    protected $cliente;
    protected $consumidor;

    private $cod;
    private $grupo;

    public function __construct(Cliente $cliente = null, Consumidor $consumidor = null)
    {
        if (is_null($cliente)) $cliente = new Cliente;
        if (is_null($consumidor)) $consumidor = new Consumidor;

        $this->cliente = $cliente;
        $this->consumidor = $consumidor;

        $this->cod = Auth::user()->cod;
        $this->grupo = Auth::user()->grupo;
    }

    public function admin()
    {
        if (! $this->verificaGrupo(1)) return $this->redireciona();

        $usuario = Auth::user()->nome;
        return View::make('adm.admin')->with('admin', $usuario);

    }

    public function cliente()
    {
        if (! $this->verificaGrupo(2)) return $this->redireciona();
        $usuario = $this->cliente->find($this->cod);
        return View::make('adm.cliente', ['cliente' => $usuario]);
    }

    public function consumidor()
    {
        if (! $this->verificaGrupo(3)) return $this->redireciona();
        $usuario = $this->consumidor->find($this->cod);
        return View::make('adm.consumidor', ['consumidor'=> $usuario]);
    }

    private function verificaGrupo($grupo)
    {
        return $grupo == $this->grupo ? true : false;
    }

    private function redireciona()
    {
        switch ($this->grupo){
            case 1:
                $this->admin();
                break;

            case 2:
                $this->cliente();
                break;

            case 3:
                $this->consumidor();
                break;
        }
    }

}