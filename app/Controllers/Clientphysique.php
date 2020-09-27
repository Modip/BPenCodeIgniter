<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\ClientphysiqueModel;
 
class Clientphysique extends Controller
{
 
    public function index()
    {    
        $model = new ClientphysiqueModel();
 
        $data['clientphysique'] = $model->orderBy('id', 'DESC')->findAll();
        
        return view('clientphysique', $data);
    }    
 
    public function create()
    {    
        return view('clientphysique');
    }
 
    public function store()
    {  
 
        helper(['form', 'url']);
         
        $model = new ClientphysiqueModel();
 
        $data = [
 
            'nom' => $this->request->getVar('nom'),
            'prenom' => $this->request->getVar('prenom'),
            'cni' => $this->request->getVar('cni'),
            'adresse' => $this->request->getVar('adresse'),
            'telephone' => $this->request->getVar('telephone'),
            'email'  => $this->request->getVar('email'),
            'login' => $this->request->getVar('login'),
            'password' => $this->request->getVar('password'),
            ];
 
        $save = $model->insert($data);
 
        return redirect()->to( base_url('public/index.php/clientphysique') );
    }
 
    public function edit($id = null)
    {
      
     $model = new ClientphysiqueModel();
 
     $data['clientphysique'] = $model->where('id', $id)->first();
 
     return view('public/index.php/edit-user', $data);
    }
 
    public function update()
    {  
 
        helper(['form', 'url']);
         
        $model = new ClientphysiqueModel();
 
        $id = $this->request->getVar('id');
 
        $data = [
 
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
            ];
 
        $save = $model->update($id,$data);
 
        return redirect()->to( base_url('public/index.php/clientphysique') );
    }
 
    public function delete($id = null)
    {
 
     $model = new ClientphysiqueModel();
 
     $data['clientphysique'] = $model->where('id', $id)->delete();
      
     return redirect()->to( base_url('public/index.php/clientphysique') );
    }
}