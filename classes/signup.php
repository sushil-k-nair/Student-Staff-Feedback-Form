<?php

class Addadmin
{
    private $error = "";

    public function evaluate($data)
    {
        foreach ($data as $key => $value){
            if(empty($value))
            {
                $this->error = $this->error . $key . " is empty!<br>";
            }
            if($key == "email")
            {
                if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$value)){

                    $this->error = $this->error . " invalid email address!<br>";
                }
            }
            if($key == "first_name")
            {
                if(is_numeric($value)){
                    $this->error = $this->error . "You cant use number in first name!<br>";
                }

                if(strstr($value, " ")){
                    $this->error = $this->error . "You cant give space in between!<br>";
                }
            }

            if($key == "last_name")
            {
                if(is_numeric($value)){
                    $this->error = $this->error . "You cant use number in last name!<br>";
                }

                if(strstr($value, " ")){
                    $this->error = $this->error . "You cant give space in between!<br>";
                }
            }
        }
        
        if($this->error == "")
        {
            $this->create_admin($data);
        }else{
            return $this->error;
        }
    }

    public function create_admin($data)
    {
        $first_name = ucfirst($data['first_name']);
        $last_name = ucfirst($data['last_name']);
        $email = $data['email'];
        $password = $data['password'];

        $adminid = $this->create_adminid();

        $query = "insert into admin_reg (adminid,first_name,last_name,email,password) values ('$adminid','$first_name','$last_name','$email','$password')";
            
        $DB = new Database();
        $DB->save($query);
    }

    private function create_adminid()
    {
        $length = rand(4,19);
        $number = "";
        for ($i=0; $i < $length; $i++){
            $new_rand = rand(0,9);
            $number = $number . $new_rand;
        }
        return $number;
    }   

}

?>