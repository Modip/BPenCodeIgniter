<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class ClientmoralModel extends Model
{
    protected $table = 'client_morals';
 
    protected $allowedFields = ['nom', 'raisonsocial','adresse', 'telephone', 'email', 'login', 'password'];
}