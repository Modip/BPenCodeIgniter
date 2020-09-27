<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class ClientphysiqueModel extends Model
{
    protected $table = 'client_physique';
 
    protected $allowedFields = ['nom', 'prenom','cni','adresse', 'telephone', 'email', 'login', 'password'];
}