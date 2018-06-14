<?php

    //Rotas

Route::group(['middleware'=>'auth:admin'],function(){
	Route::get('/admin', 'AdminController@index');
	Route::get('/admin/reset', 'AdminController@resetarSenhaAdmin');
	Route::get('/senha/reset', 'AdminController@AllresetarSenhaAdmin');
	Route::get('/admin/consulta/usuario', ['uses'=>'AdminController@listaUsuario','as'=>'consulta.usuario.index']);
    Route::get('/admin/adicionar/usuario', ['uses'=>'AdminController@AdicionaUsuario','as'=>'adiciona.usuario.index']);
    Route::get('/admin/adicionar/usuario/paciente',['uses'=>'AdminController@AdicionaPaciente','as'=>'adiciona.paciente.index']);
	Route::get('/admin/perfil', ['uses'=>'AdminController@Adminperfil','as'=>'Adminperfil.index']);
		Route::post('/admin/perfil', ['uses'=>'AdminController@AdminAtualizaperfil','as'=>'Adminperfil.index']);

//estava fora do auth admin, se der merda jogar fora do middware admin
Route::post('/admin/adicionar/usuario',['uses'=>'AdminController@postCriaPaciente','as'=>'postCriaPaciente.index'] );
Route::post('/admin/mediamentos/adicionar',['uses'=>'MedicamentoController@postCriaMedicamento','as'=>'postCriamedicamento.index'] );
Route::get('/admin/consulta/usuario/{id}',['uses'=>'AdminController@deletarUsuarios','as'=>'deletarUsuarios.index'] );
Route::get('/admin/consulta/paciente/{id}',['uses'=>'PacienteCOntroller@deletarPacientes','as'=>'deletarPacientes.index'] );
Route::get('/admin/logout','AdminController@logout');
Route::get('admin/cidades/{uf}', function($uf = null){
   return response()->json(\Artesaos\Cidade::where('uf', $uf)->orderBy('nome')->get());});
Route::get('admin/ufs/', function($uf = null){
    return response()->json(\Artesaos\Cidade::select('uf')->distinct('uf')->orderBy('uf')->get());});
//fim
Route::get('admin/adicionar/usuario/paciente/consulta',['uses'=>'AdminController@consulta', 'as'=>'consulta.index']);
//Route::get('admin/adicionar/usuario/paciente/consulta2',['uses'=>'AdminController@consulta2', 'as'=>'consulta2.index']);
Route::get ('/admin/adicionar/usuario/paciente/consulta/anamnese',['uses'=>'Consulta@anamnese','as'=>'anamnese.index']);
Route::get ('/admin/adicionar/usuario/paciente/consulta/anamnese/test/{id}',['uses'=>'PacienteController@anamnese','as'=>'anamnesePaciente.index']);
Route::post ('/admin/adicionar/usuario/paciente/consulta/anamnese',['uses'=>'ProntuarioController@CriaProntuario','as'=>'prontuario.index']);
Route::post ('/admin/adicionar/usuario/paciente/consulta/anamnesepaciente',['uses'=>'ProntuarioController@CriaProntuarioPaciente','as'=>'prontuarioPaciente.index']);
Route::get ('/admin/paciente',['uses'=>'PacienteController@lista','as'=>'ListaPaciente.index']);
Route::get ('/admin/paciente/detalhes/{id}',['uses'=>'PacienteController@detalhesPaciente','as'=>'detalhesPaciente.index']);
Route::get ('/admin/paciente/detalhes/admin/{id}',['uses'=>'PacienteController@detalhesAdmin','as'=>'detalhesAdmin.index']);
Route::get ('/admin/paciente/atendimento/{id}',['uses'=>'PacienteController@consultaPaciente','as'=>'consultaPaciente.index']);
Route::get ('/admin/servicos/dentistas/cadastro',['uses'=>'ServicoController@cadastroServicoDentista','as'=>'servicoDentista.index']);
Route::get ('/admin/exames/cadastro',['uses'=>'ExamesController@cadastroServicoDentista','as'=>'ExameDentista.index']);
Route::post ('/admin/exames/cadastro',['uses'=>'ExamesController@criaServicoDentista','as'=>'CriaExameDentista.index']);
Route::get ('/admin/exames/home',['uses'=>'ExamesController@homeExame','as'=>'exameHome.index']);
Route::get ('/admin/exames/home/lista',['uses'=>'ExamesController@listaExameAdmin','as'=>'listaExameAdmin.index']);
Route::get ('/admin/exames/home/lista/{id}',['uses'=>'ExamesController@DeleteExameAdmin','as'=>'DeleteExameAdmin.index']);
Route::get ('admin/adicionar/usuario/paciente/consulta/teste/{id}',['uses'=>'PacienteController@consulta','as'=>'consultaPacientet.index']);
//Route::get ('/admin/adicionar/usuario/paciente/consulta',['uses'=>'AdminController@redirecionaAtendimento','as'=>'redirecionaAtendimento.index']);
});
Route::get('/admin/login', 'AdminController@login');
Route::post('/admin/login', 'AdminController@postLogin');