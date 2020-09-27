<?php namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class ComptecltmoralModel extends Model
{
    protected $table = 'comptecltmoral';
 
    protected $allowedFields = ['numerocompte', 'clerib','solde', 'frais', 'date', 'login', 'password'];
}