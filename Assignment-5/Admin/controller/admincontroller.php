<?php
require_once("model/adminmodel.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Admincontroller extends Adminmodel
{
    public function __construct()
    {
        //logic
        
        parent::__construct();
        //show data for contact logic
        // $shwdata=$this->showalldata('tbl_contact');
         
        //show data for contact logic
        // $countdata=$this->countalldata('tbl_contact','Id');

        //show managecategory in table
        // $showcat=$this->showalldata('tbl_addcategory');


        //insert data into addcategory
        // if(isset($_POST["Addcat"]))
        // {
        //     $cnm=$_POST["catnm"];
        //     $adt=$_POST["adddt"];
        //     $desc=$_POST["desc"];
        //     $data=array("Category_Name"=>$cnm,"Added_Date"=>$adt,"Description"=>$desc);
        //     $addcat=$this->insertdata($data,'tbl_addcategory');
        //     if($addcat)
        //     {
        //         echo "<script>
        //         alert('thnks for inserted')
        //         window.location='Admin-addcategory';
        //         </script>";
        //     }
        // }

          //insert data into addsubcategory
        //   if(isset($_POST["AddSubcat"]))
        //   {
        //       $cnm=$_POST["catnm"];
        //       $subcatnm=$_POST["subcatnm"];
        //       $subdt=$_POST["subdt"];
        //       $subdesc=$_POST["subdesc"];
        //       $data=array("addcat_id"=>$cnm,"subcategory_Name"=>$subcatnm,"Added_Date"=>$subdt,"Description"=>$subdesc);
        //       $addsubcat=$this->insertdata($data,'tbl_addsubcategory');
        //       if($addsubcat)
        //       {
        //           echo "<script>
        //           alert('thnks for inserted')
        //           window.location='Admin-addsubcategory';
        //           </script>";
        //       }
        //   }
        //show managecategory in table
        // $showsubcat=$this->showalldata('tbl_addcategory');
          //manage and join a data
        //   $joinsubcat=$this->joinalldata('tbl_addsubcategory','tbl_addcategory','tbl_addsubcategory.addcat_id=tbl_addcategory.addcat_id');
            
        //count customer
        $totalcustomer=$this->countalldata('t_student','s_id'); 

        // manage profile data
          $prof=$this->manageprofiledata('t_student','t_course','tbl_state','tbl_city','t_student.course_id=t_course.course_id','t_student.state_id=tbl_state.state_id','t_student.city_id=tbl_city.city_id');

        // Admin login here
        if(isset($_POST["submit"]))
        {
            $em=$_POST["email"];
            $pass=$_POST["password"];
            
            $login=$this->adminlogin('tbl_admin',$em,$pass);
            if($login==1)
            {
                echo "<script>
                    alert('you are successfully logged in!')
                    window.location='dashboard';
                    </script>";
            }
            else
            {
                echo "<script>
                    alert('your email and password are incorrect try again!')
                    window.location='login';
                    </script>";
            }
        }

        // Add courselist in Admin
           if(isset($_POST["Addcourse"])) 
           {
                $coursecat=$_POST["coursecat"];
                $cnm=$_POST["cnm"];
                $tmp_name=$_FILES["cimg"]["tmp_name"];
                $path="upload/course/".$_FILES["cimg"]["name"];
                move_uploaded_file($tmp_name,$path); 
                $duration=$_POST["duration"];
                $price=$_POST["cprice"];
                $oprice=$_POST["oprice"];
                $cdesc=$_POST["cdesc"];
                $data=array("coursecategory_id"=>$coursecat,"Coursename"=>$cnm,"Photo"=>$path,"Duration"=>$duration,"CoursePrice"=>$price,"OfferPrice"=>$oprice,"Description"=>$cdesc);
                $chk=$this->insertdata($data,'tbl_courselist');
                if($chk)
                {
                        echo "<script>
                        alert('course added successfully')
                        window.loaction='Admin-addcourse';
                        </script>";
                }
           }

        //show course data
         $shwcourse=$this->showalldata('tbl_coursecategory');

         //join a course list
         $joincourse=$this->joinalldata('tbl_coursecategory','tbl_courselist','tbl_coursecategory.coursecategory_id=tbl_courselist.coursecategory_id');
        //logout here
        if(isset($_GET["logout"]))
        {
            $lg=$this->logout();
            if($lg)
            {
                echo "<script>
                    alert('logout successfully')
                    window.loaction='/login';
                </script>";
            }
        }





        // add data in contact table logic
        // if(isset($_POST["addcontact"]))
        // {
            
        //     require_once("PHPMailer\PHPMailer.php");
        //     require_once("PHPMailer\SMTP.php");
        //     require_once("PHPMailer\Exception.php");

        //     $nm=$_POST["name"];
        //     $email=$_POST["email"];
        //     $enqry=$_POST["Enquiry"];
        //     $phn=$_POST["phone"];

        //    $mail = new PHPMailer(true);
        //     try {
   

        //Server settings
        // $mail->SMTPDebug = true;                                     //Enable verbose debug output
        // $mail->isSMTP();                                            //Send using SMTP
        // $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        // $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        // $mail->Username   = 'jigna434@gmail.com';                     //SMTP username
        // $mail->Password   = 'hpzhtuezpywnanka';                               //SMTP password
        // $mail->SMTPSecure = 'TLS';                                //Enable implicit TLS encryption
        // $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        // //Recipients
        // $mail->setFrom($_POST["email"], 'Mail sending');
        // $mail->addAddress('jigna434@gmail.com', 'Contact us mail sending');     //Add a recipient
        // $mail->addAddress('ellen@example.com');               //Name is optional
        // $mail->addReplyTo('info@example.com', 'Information');
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');
    
        //Attachments
        // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    
        //Content
        // $mail->isHTML(true);                                  //Set email format to HTML
        // $mail->Subject = 'Contact with us email sending data';
        // $mail->Body    = "<img src='https://www.google.com/url?sa=i&url=https%3A%2F%2Fgifer.com%2Fen%2Fgifs%2Femail&psig=AOvVaw3WZ8dp_6oCrKu7kKNVVlLj&ust=1679648379025000&source=images&cd=vfe&ved=0CA0QjRxqFwoTCKDQ-v3X8f0CFQAAAAAdAAAAABBj' width='30%' height='150px'"."<br>".
        //                  "Customer name is :".$nm."<br>"."Email address is:".$email."<br>"."Enquiry is :".$enqry."<br>"."Phone no is :".$phn."<br>";

        // // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
        
        // $mail->send(); 
        
        // $data=array("Name"=>$nm,"Email"=>$email,"Enquiry"=>$enqry,"Phone"=>$phn);
        // $chk=$this->insertdata($data,'tbl_contact');
        // if($chk)
        // {
        //     echo "<script>
        //         alert('Thank you for contact with me.');
        //         window.location='contact-us';
        //     </script>";
        // }
     

        // echo "Thank you for contact with us";
        // header("refresh:2,emailmsg.php");
        
        
//     } 
//     catch (Exception $e) 
//     {
//         echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
//     }

//  }


        // // load template routing
        if($_SERVER["PATH_INFO"])
        {   
            switch($_SERVER["PATH_INFO"])
            {
                case '/':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("login.php");
                    require_once("footer.php");
                  break;


                case '/dashboard':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("dashboard.php");
                    require_once("footer.php");
                break;

                case '/Admin-managecustomer':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("managecustomer.php");
                    require_once("footer.php");
                break;

                case '/Admin-managecontact':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("managecontacts.php");
                    require_once("footer.php");
                break;

                case '/Admin-addcategory':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("addcategory.php");
                    require_once("footer.php");
                break;
                 
                case '/Admin-managecategory':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("managecategory.php");
                    require_once("footer.php");
                break;

                case '/Admin-addcourse':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("addcourse.php");
                    require_once("footer.php");
                break;
                 
                case '/Admin-managecourse':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("managecourse.php");
                    require_once("footer.php");
                break;

                default:
                    require_once("index.php");
                    require_once("header.php");
                    require_once("404.php");
                    require_once("footer.php");

            }
        }


    }
}
$obj=new Admincontroller;

?>