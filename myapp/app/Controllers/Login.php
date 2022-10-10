<?php namespace App\Controllers;
 
use CodeIgniter\Controller;
use App\Models\UserNeoModel;
 
class Login extends Controller
{
    public function index()
    {
        helper(['form']);
        echo view('neoness_index');
    } 
 
    public function auth()
    {
        $session = session();
        $model = new UserNeoModel();
        $pseudo = $this->request->getVar('pseudo');
        $mdp = $this->request->getVar('mdp');
        $data = $model->where('pseudo', $pseudo)->first();
        if($data){
            $pass = $data['mdp'];
            $verify_pass = password_verify($mdp, $pass);
            if($verify_pass){
                $ses_data = [
                    'pseudo'       => $data['pseudo'],
                    'psw'     => $data['psw'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return redirect()->to('neoness/logged');
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('signup');
            }
        }else{
            $session->setFlashdata('msg', 'Email not Found');
            return redirect()->to('signup');
        }
    }
 
    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to('/');
    }
} 