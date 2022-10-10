<?php

namespace App\Controllers;

use App\Models\UserNeoModel;

class Neo extends BaseController
{
    
    public function index()
    {
        return view('neoness_index');
        
    }

    public function view($page = 'signup')
    {
        if (! is_file(APPPATH . 'Views/neoness/' . $page . '.php')) {
            // Whoops, we don't have a page for that!
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);
        }
       
        return view('Views/neoness/' . $page);
    }

    

    public function create()
    {
        $neomodel = model(UserNeoModel::class);

        if ($this->request->getMethod() === 'post' && $this->validate([
            'pseudo' => 'required|min_length[3]|max_length[255]'            
        ])) {
            $neomodel->save([
                'pseudo' => $this->request->getPost('pseudo'),
                'nom'  => $this->request->getPost('nom'),
                'prenom'  => $this->request->getPost('prenom'),
                'age'  => $this->request->getPost('age'),
                'sexe'  => $this->request->getPost('sexe'),
                'poids'  => $this->request->getPost('poids'),
                'taille'  => $this->request->getPost('taille'),
                'objectif'  => $this->request->getPost('objectif'),
                'mdp'  => password_hash($this->request->getPost('mdp'),PASSWORD_DEFAULT),
            ]);

            return view('neoness/success');
        }

        return view('neoness/signup');
    }

    public function logged(){
        return view('Views/neoness/logged');
    }

    
    public function auth()
    {   
        
        
        $session = $_SESSION['session'];
        //$session = session();
        $model = new model(UserNeoModel::class);
        $pseudo = $this->request->getVar('pseudo');
        $mdp = $this->request->getVar('mdp');
        $data = $model->where('pseudo', $pseudo)->first();
        if($data){
            $pass = $data['mdp'];
            $verify_pass = password_verify($mdp, $pass);
            if($verify_pass){
                $ses_data = [
                    'pseudo'       => $data['pseudo'],
                    'mdp'     => $data['mdp'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return view('logged');
            }else{
                $session->setFlashdata('msg', 'Mauvais pass');
                return view('neoness_index');
            }
        }else{
            $session->setFlashdata('msg', 'Pseudo inconnu');
            return view('neoness_index');
        }
    }

        public function auth2(){
            $db = db_connect();
            $session = session();
            $model = model(UserNeoModel::class);
            $pseudo = $this->request->getVar('champ_pseudo');
            $mdp = $this->request->getVar('champ_mdp');
            $data = $model->where('pseudo', $pseudo)->first();
        if($pseudo==$data['pseudo'] && $mdp==$data['mdp']){
                $ses_data = [
                    'pseudo'       => $data['pseudo'],
                    'mdp'     => $data['mdp'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return view('logged');
            }else{
                $session->setFlashdata('msg', 'Mauvais pass');
                return view('neoness_index');
            }
        }
        

    
}

//if($data){
   // $pass = $data['mdp'];
//$verify_pass = password_verify($mdp, $pass);
   // if($verify_pass)