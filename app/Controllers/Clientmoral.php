<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\ClientmoralModel;
 
class Clientmoral extends Controller
{
 
    public function index()
    {    
        $model = new ClientmoralModel();
 
        $data['clientmoral'] = $model->orderBy('id', 'DESC')->findAll();
        
        return view('clientmoral', $data);
    }    
 
    public function create()
    {    
        return view('clientmoral');
    }
 
    public function store()
    {  
 
        helper(['form', 'url']);
         
        $model = new ClientmoralModel();
 
        $data = [
 
            'nom' => $this->request->getVar('nom'),
            'raisonsocial' => $this->request->getVar('raisonsocial'),
            'adresse' => $this->request->getVar('adresse'),
            'telephone' => $this->request->getVar('telephone'),
            'email'  => $this->request->getVar('email'),
            'login' => $this->request->getVar('login'),
            'password' => $this->request->getVar('password'),
            ];
 
        $save = $model->insert($data);
 
        return redirect()->to( base_url('public/index.php/clientmoral') );
    }
 
    public function edit($id = null)
    {
      
     $model = new ClientmoralModel();
 
     $data['clientmoral'] = $model->where('id', $id)->first();
 
     return view('public/index.php/edit-user', $data);
    }
 
    public function update()
    {  
 
        helper(['form', 'url']);
         
        $model = new ClientmoralModel();
 
        $id = $this->request->getVar('id');
 
        $data = [
 
            'name' => $this->request->getVar('name'),
            'email'  => $this->request->getVar('email'),
            ];
 
        $save = $model->update($id,$data);
 
        return redirect()->to( base_url('public/index.php/clientmoral') );
    }
 
    public function delete($id = null)
    {
 
     $model = new ClientmoralModel();
 
     $data['clientmoral'] = $model->where('id', $id)->delete();
      
     return redirect()->to( base_url('public/index.php/clientmoral') );
    }
}