<?php
class Session{
    public function  __construct(){
        session_start();
    }
    public function userdata($key = NULL){
        if(isset($key)){
            return isset($_SESSION[$key]) ? $_SESSION[$key] : NULL;
        }elseif(empty($_SESSION)){
            return [];
        }
    }
    public function set_userdata($data){
        foreach($data as $key => $value){
            $_SESSION[$key] = $value;
        }
        return;
    }
    public function sess_destroy(){
        session_destroy();
    }
    public function unset_userdata($key)
	{
		if (is_array($key))
		{
			foreach ($key as $k)
			{
				unset($_SESSION[$k]);
			}

			return;
		}
		unset($_SESSION[$key]);
    }
}