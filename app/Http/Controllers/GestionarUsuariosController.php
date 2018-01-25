<?php
namespace App\Http\Controllers;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Http\Request;
    use App\UserFormRequest;
    use App\User;

class GestionarUsuariosController extends Controller
{

    public function ver()
    {
        $usuarios = DB::table('users')->get();
        return view('admin.admin', ['usuarios' => $usuarios]);
    }
    public function eliminar($id)
    {
        DB::table('users')->where('id', '=', $id)->delete();
        return redirect('/adminVerUsuarios');
    }
    public function editar($id)
    {
        $data = User::find($id);
        return view('admin.editarUsuarios', compact('data'));
    }
    public function update(Request $request, $id)
    {
        $data = User::find($id);
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->update();
        return \redirect('/adminVerUsuarios');
    }

}
