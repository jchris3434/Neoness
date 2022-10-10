<?php

namespace App\Models;

use CodeIgniter\Model;

class UserNeoModel extends Model
{
    protected $table = 'neoness';

    protected $allowedFields = ['pseudo', 'nom', 'prenom','age','sexe','poids','taille','objectif','mdp'];
}