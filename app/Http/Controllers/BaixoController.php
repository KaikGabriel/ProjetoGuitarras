<?php



namespace App\Http\Controllers;

use App\Models\Baixo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class BaixoController extends Controller
{
    public function CadastroBaixo()
    {

        return view('cadastrarBaixo');
    }

    public function EditarBaixo(Request $request)
    {
        $dadosBaixo = Baixo::query();
        $dadosBaixo->when($request->marca, function ($query, $vl) {
            $query->where('marca', 'like', '%' . $vl . '%');
        });


        $dadosBaixo = $dadosBaixo->get();

        //dd($dadosBaixo);
        return view('editarBaixo', [
            'registrosBaixo' => $dadosBaixo
        ]);
    }

    public function SalvarBancoBaixo(Request $request)
    {
        $dadosBaixo = $request->validate([
            'modelo' => 'string|required',
            'marca' => 'string|required',
            'ano' => 'string|required',
            'cor' => 'string|required',
            'valor' => 'string|required'
        ]);




        Baixo::create($dadosBaixo);
        return Redirect::route('home');
    }


    public function ApagarBancoBaixo(Baixo $registrosBaixos)
    {

        $registrosBaixos->delete();
        //Baixo::findOrFail($id)->delete();
        //$baixo->delete();

        return Redirect::route('editar-baixo');
    }


    public function AlterarBaixo(Baixo $registrosBaixos)
    {
        return view('alterarBaixo', ['registrosBaixos' => $registrosBaixos]);
    }

    public function AlterarBancoBaixo(Baixo $registrosBaixos, Request $request)
    {
        $banco = $request->validate([
            'modelo' => 'string|required',
            'marca' => 'string|required',
            'ano' => 'string|required',
            'cor' => 'string|required',
            'valor' => 'string|required'
        ]);

        $registrosBaixos->fill($banco);
        $registrosBaixos->save();

        return Redirect::route('editar-baixo');
    }
}
