
<?php
 class Adminmodel
{
    public $connection="";
    public function __Construct()
    {
        session_start();
        //database connection
        //Exception handling
        try
        {
            $this->connection=new mysqli("localhost","root","","studentdata");
            // echo "connection successfully";
        }
        catch(Exception $e)
        {
            die(mysqli_error($this->connection));
        }
    }
    public function insertdata($data,$table)
    {   
        $column=array_keys($data);
        $column1=implode(",",$column);

        $value=array_values($data);
        $value1=implode("','",$value);

       $insert="insert into $table($column1)values('$value1')";
        $exe=mysqli_query($this->connection,$insert);
        return $exe;
    }


    public function showalldata($table)
    {
        $select="select * from  $table";
        $exe=mysqli_query($this->connection,$select);
        while($fetch=mysqli_fetch_array($exe))
        {
            $arr[]=$fetch;
        }
        return $arr;
    }

   public function joinalldata($table,$table1,$where)
    {
        $select="select * from $table join $table1 on $where";
        $exe=mysqli_query($this->connection,$select);
        while($fetch=mysqli_fetch_array($exe))
        {
            $arr[]=$fetch;
        }
        return $arr;
    }
    public function manageprofiledata($table,$table1,$table2,$table3,$where,$where1,$where2)
    {
       $select="select * from $table join $table1 on $where join $table2 on $where1 join $table3 on $where2";
        $exe=mysqli_query($this->connection,$select);
        while($fetch=mysqli_fetch_array($exe))
        {
            $arr[]=$fetch;
        }
        return $arr;
    }
    
    public function countalldata($table,$column)
    {
        $count="select count($column) as total from  $table";
        $exe=mysqli_query($this->connection,$count);
        while($fetch=mysqli_fetch_array($exe))
        {
            $arr[]=$fetch;
        }
        return $arr;
    }

    public function adminlogin($table,$em,$pass)
    {
        $log="select * from $table where Email='$em' and Password='$pass'";
        $exe=mysqli_query($this->connection,$log);
        $fetch=mysqli_fetch_array($exe);
        $no_row=mysqli_num_rows($exe);
        if($no_row==1)
        {
            $_SESSION["admin_id"]=$fetch["admin_id"];
            $_SESSION["Email"]=$fetch["Email"];
            return true;
        }
        else
        {
            return false;
        }

    }

    //logout here
    public function logout()
    {
        unset($_SESSION["s_id"]);
        unset($_SESSION["email"]);
        session_destroy();
        return true;
    }

         
}

?>