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
                $json = getJson();
                $dbUser = $this->model->selUser($json);
                if(!$dbUser) {
                    return [_RESULT => "아이디가 없습니다. 회원가입 후 이용가능합니다."];
                } elseif(!password_verify($json['userpw'], $dbUser->pw)) {
                    return [_RESULT => "비밀번호가 일치하지 않습니다. 확인 후 다시 로그인 부탁드립니다."];
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