<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class ComptecltphysiqueModel extends Model
{
    protected $table = 'comptecltphysique';
 
    protected $allowedFields = ['numerocompte', 'clerib','solde', 'frais', 'date', 'login', 'password'];
}