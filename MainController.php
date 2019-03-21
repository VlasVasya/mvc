<?php
class MainController extends AbstractController
{
    public function index()
    {
        $model = $this->getModel(Model::class);
       $data = [];
        $this->render('view/index.php',  $data);
    }
    public function pageNotFound()
    {
        http_response_code(404);
        $this->render('view/404.php');
    }
}