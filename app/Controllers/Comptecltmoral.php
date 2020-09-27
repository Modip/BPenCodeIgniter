<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\ComptecltmoralModel;
 
class Comptecltmoral extends Controller
{
 
    public function index()
    {    
        $model = new ComptecltmoralModel();
 
        $data['comptecltmoral'] = $model->orderBy('id', 'DESC')->findAll();
        
        return view('comptecltmoral', $data);
    }    
 
    public function create()
    {    
        return view('comptecltmoral');
    }
 
    public function store()
    {  
 
        helper(['form', 'url']);
         
        $model = new ComptecltmoralModel();
 
        $data = [
 
            'numerocompte' => $this->request->getVar('numerocompte'),
            'solde' => $this->request->getVar('solde'),
            'clerib' => $this->request->getVar('clerib'),
            'date' => $this->request->getVar('date'),

            ];
 
        $save = $model->insert($data);
 
        return redirect()->to( base_url('public/index.php/comptecltmoral') );
    }
 
    public function edit($id = null)
    {
      
     $model = new ComptecltmoralModel();
 
     $data['clientmoral'] = $model->where('id', $id)->first();
 
     return view('public/index.php/edit-user', $data);
    }
 
    public function update()
    {  
 
        helper(['form', 'url']);
         
        $model = new ComptecltmoralModel();
 
        $id = $this->request->getVar('id');
 
        $data = [
 
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
            ];
 
        $save = $model->update($id,$data);
 
        return redirect()->to( base_url('public/index.php/comptecltmoral') );
    }
 
    public function delete($id = null)
    {
 
     $model = new ComptecltmoralModel();
 
     $data['clientmoral'] = $model->where('id', $id)->delete();
      
     return redirect()->to( base_url('public/index.php/comptecltmoral') );
    }
}