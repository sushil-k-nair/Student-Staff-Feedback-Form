<?php

class Feedback
{
    private $error = "";

    public function evaluate($data)
    {
        foreach ($data as $key => $value){
            if(empty($value))
            {
                $this->error = $this->error . $key . " is empty!<br>";
            }
            
        }
        
        if($this->error == "")
        {
            $this->create_feedback($data);
        }else{
            return $this->error;
        }
    }

    public function create_feedback($data)
    {
        
        $name = ucfirst($data['name']);
        $class = ucfirst($data['class']);
        $year = ucfirst($data['year']);
        $academic_year = $data['academic_year'];
        $Q1 = $data['Q1'];
        $Q2 = $data['Q2'];
        $Q3 = $data['Q3'];
        $Q4 = $data['Q4'];
        $Q5 = $data['Q5'];
        $Q6 = $data['Q6'];
        $Q7 = $data['Q7'];
        $Q8 = $data['Q8'];
        $Q9 = $data['Q9'];
        $Q10 = $data['Q10'];

        $query = "insert into feedback (name,class,year,academic_year,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10) values ('$name','$class','$year','$academic_year','$Q1','$Q2','$Q3','$Q4','$Q5','$Q6','$Q7','$Q8','$Q9','$Q10')";
            
        $DB = new Database();
        $DB->save($query);
    }
    
 

}

?>