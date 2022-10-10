public function logged(){

$neologgin = model(UserNeoModel::class);

if ($this->request->getMethod() === 'pseudo' && $this->request->getMethod() === 'mdp')
{
return view('Views/neoness/logged');
}else{
return {echo 'erreur'};
}       
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
                    'mdp'     => $data['mdp'],
                    'logged_in'     => TRUE
                ];
                $session->set($ses_data);
                return view('logged');
            }else{
                $session->setFlashdata('msg', 'Wrong Password');
                return view('neoness_index');
            }
        }else{
            $session->setFlashdata('msg', 'pseudo not Found');
            return view('neoness_index');
        }
    }
