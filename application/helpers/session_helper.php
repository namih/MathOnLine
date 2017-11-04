<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('test_method'))
{
    function test_method($var = '')
    {
        return $var;
    }

    function update_session($user){
        $CI = & get_instance();
        $login = $CI->session->userdata('logged_in');

        if($login != null && $login == true){
            $data_session = array(
                "user_id" => $user["id_user"],
                "type_user" => $user["type_user"],
                "score" => $user['total_score'],
                "league" => $user['league'],
                "user" => $user
            );
            return $data_session;
        }else{
            return "Usuario no logeado";
        }
    }
}