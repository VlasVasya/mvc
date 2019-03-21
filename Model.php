<?php
class Model{
    private $admin = array(
"login" => "Vasua",
"password" => "q12345",
);
    public function checkUser($login,$password)
    {

      if($this->admin['login']==$login && $this->admin ['password']==$password) {
          $flaus= 'yas';
    }else{
          $flaus= 'no';
      }
        return ['checkaus' => $flaus];
    }
}

