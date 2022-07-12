<?php
namespace application\controllers;

class UserController extends Controller {

    //로그인
    public function signin() {   
        $this->addAttribute(_JS, ["user/signin"]);     
        switch(getMethod()) {
            case _GET:
                return "user/signin.php";
            case _POST:
                $email = $_POST["id"];
                $pw = $_POST["pw"];
                $param = [ "email" => $email ];
                $dbUser = $this->model->selUser($param);
                if(!$dbUser || !password_verify($pw, $dbUser->pw)) {                                                        
                    return "redirect:signin?email={$email}&err";
                }
                $dbUser->pw = null;
                $dbUser->regdt = null;
                $this->flash(_LOGINUSER, $dbUser);
                return "redirect:/feed/index";
            }
    }

    public function usersignup() {
        return "user/signup.html";
    }

    //회원가입
    public function signup() {
        switch(getMethod()) {
            case _GET:
                return "user/signup.php";
            case _POST:
                $json = getJson();
                $hashedPw = password_hash($json['pw'], PASSWORD_BCRYPT);
                $json['pw'] = $hashedPw;
                return [_RESULT => $this->model->insUser($json)];
        }
    }

    public function logout() {
        $this->flash(_LOGINUSER);
        return "redirect:/user/signin";
    }

    
}