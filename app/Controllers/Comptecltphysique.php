<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\ComptecltphysiqueModel;
 
class Comptecltphysique extends Controller
{
 
    public function index()
    {    
        $model = new ComptecltphysiqueModel();
 
        $data['comptecltphysique'] = $model->orderBy('id', 'DESC')->findAll();
        
        return view('comptecltphysique', $data);
    }    
 
    public function create()
    {    
        return view('comptecltphysique');
    }
 
    public function store()
    {  
 
        helper(['form', 'url']);
         
        $model = new ComptecltphysiqueModel();
 
        $data = [
 
            'numerocompte' => $this->request->getVar('numerocompte'),
            'solde' => $this->request->getVar('solde'),
            'clerib' => $this->request->getVar('clerib'),
            'date' => $this->request->getVar('date'),

            ];
 
        $save = $model->insert($data);
 
        return redirect()->to( base_url('public/index.php/comptecltphysique') );
    }
 
    public function edit($id = null)
    {
      
     $model = new ComptecltphysiqueModel();
 
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
 
        return redirect()->to( base_url('public/index.php/comptecltphysique') );
    }
 
    public function delete($id = null)
    {
 
     $model = new ComptecltphysiqueModel();
 
     $data['clientmoral'] = $model->where('id', $id)->delete();
      
     return redirect()->to( base_url('public/index.php/comptecltphysique') );
    }
}