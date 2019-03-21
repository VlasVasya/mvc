<?php
class AuthController extends AbstractController
{
    private $admin = array(
        "login" => "Vasua",
        "password" => "q12345",
    );
    public function auth()
    {
        $model = $this->getModel(Model::class);
        $login = $_POST['login'];
        $pass = $_POST['password'];
        $data = $model->checkUser($login,$pass);
        $this->render('view/cabinet.php',  $data);
    }
    public function pageNotFound()
    {
        http_response_code(404);
        $this->render('view/404.php');
    }
}