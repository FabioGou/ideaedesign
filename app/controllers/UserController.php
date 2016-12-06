<?php

class UserController extends Controller
{

    public function login()
    {
        if ($this->isPostRequest()) {
            $validator = $this->getLoginValidator();

            if ($validator->passes()) {
                $credentials = $this->getLoginCredentials();

                if (Auth::attempt($credentials)) {
                    $grupo = Auth::user()->grupo;

                    return $this->redireciona($grupo);
                }

                return Redirect::back()->withErrors([
                    "password" => ["Credenciais inválidas."]
                ]);
            } else {
                return Redirect::back()
                    ->withInput()
                    ->withErrors($validator);
            }
        }

        return View::make("users/login");
    }

    protected function isPostRequest()
    {
        return Input::server("REQUEST_METHOD") == "POST";
    }

    protected function getLoginValidator()
    {
        return Validator::make(Input::all(), [
            "username" => "required",
            "password" => "required"
        ]);
    }

    protected function getLoginCredentials()
    {
        return [
            "username" => Input::get("username"),
            "password" => Input::get("password")
        ];
    }

    private function redireciona($grupo)
    {
        $usuario = null;

        switch ($grupo){
            case 1:
                return Redirect::route('adm');

            case 2:
                return Redirect::route('adm/empresa');

            case 3:
                return Redirect::route('adm/consumidor');

            default:
                return 'Encontramos um problema desconhecido! Tente novamente por favor.';
        }

    }

}

