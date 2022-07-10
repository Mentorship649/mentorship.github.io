<?php

include "include/connection.php";

if(isset($_POST['submit']))
{
   $file=$_FILES['data']['tmp_name'];


	
	$ext=pathinfo($_FILES['data']['name'],PATHINFO_EXTENSION);
	
if($ext=='xlsx')
{
		require('PHPExcel/PHPExcel.php');

		require('PHPExcel/PHPExcel/IOFactory.php');
		
		
	
	$obj=PHPExcel_IOFactory::load($file);
	
	foreach($obj->getWorksheetIterator() as $sheet)
            {
		
               	$getHighestRow=$sheet->getHighestRow();
	
		for($i=2;$i<=$getHighestRow;$i++)
                 {
                     $srno=$sheet->getCellByColumnAndRow(0,$i)->getValue();
				
                     $college=$sheet->getCellByColumnAndRow(1,$i)->getValue();

                     $college_code=$sheet->getCellByColumnAndRow(2,$i)->getValue();
					 
					 $enrollment=$sheet->getCellByColumnAndRow(3,$i)->getValue();
					 
					 $sem=$sheet->getCellByColumnAndRow(4,$i)->getValue();
					 
					 $student_name=$sheet->getCellByColumnAndRow(5,$i)->getValue();
					 
					 $biology_flag=$sheet->getCellByColumnAndRow(6,$i)->getValue();
					 
					 $gender=$sheet->getCellByColumnAndRow(7,$i)->getValue();
					 
					 $student_category=$sheet->getCellByColumnAndRow(8,$i)->getValue();
					 
					 $dob=$sheet->getCellByColumnAndRow(9,$i)->getValue();
					 
					 $mobile=$sheet->getCellByColumnAndRow(10,$i)->getValue();
					 
					 $admission_category=$sheet->getCellByColumnAndRow(11,$i)->getValue();
					 
					 $admission_status=$sheet->getCellByColumnAndRow(12,$i)->getValue();
					 
					 $quota=$sheet->getCellByColumnAndRow(13,$i)->getValue();
					 
					 $stream=$sheet->getCellByColumnAndRow(14,$i)->getValue();
					 
					 $course_code=$sheet->getCellByColumnAndRow(15,$i)->getValue();
					 
					 $course_name=$sheet->getCellByColumnAndRow(16,$i)->getValue();
					 
					 $aadhar_no=$sheet->getCellByColumnAndRow(17,$i)->getValue();
					 
					 $email=$sheet->getCellByColumnAndRow(18,$i)->getValue();
					 
					 $twfs=$sheet->getCellByColumnAndRow(19,$i)->getValue();
					 
					 $state=$sheet->getCellByColumnAndRow(20,$i)->getValue();
					 
					 $district=$sheet->getCellByColumnAndRow(21,$i)->getValue();
					 
					 $taluka=$sheet->getCellByColumnAndRow(22,$i)->getValue();
					 
					 $village=$sheet->getCellByColumnAndRow(23,$i)->getValue();
					 
					 $postal_code=$sheet->getCellByColumnAndRow(24,$i)->getValue();
					 
					 $residential=$sheet->getCellByColumnAndRow(25,$i)->getValue();
					 
					 $flag=0;
					 
					 $username = $enrollment;

					  //for random password generation
					 $bytes = openssl_random_pseudo_bytes(4);
				     $pass = bin2hex($bytes);
				     $password=$pass;
					 
					 //for encryption of password
					$original_string = $password;  
					$cipher_algo = "AES-128-CTR"; 
					$iv_length = openssl_cipher_iv_length($cipher_algo);
					$option = 0; 
					$encrypt_iv = '1234567890123456'; 
					$encrypt_key = "mentorship"; 
					
					$pwd_hashed = openssl_encrypt($original_string, $cipher_algo,
								$encrypt_key, $option, $encrypt_iv);
								
				    $pwd_hashed_new=bin2hex($pwd_hashed);
				
			         $mentor = 0;
					 
					 $batch=date("Y");
					  
                  if($srno!='' and $college!='' and $college_code!='' and $enrollment!='' and $sem!='' and $student_name!='' and $biology_flag!='' and $gender!='' and $student_category!='' and $dob!='' and $mobile!='' and $admission_category!='' and $admission_status!='' and $quota!='' and $stream!='' 
				  and $course_code!='' and $course_name!='' and $aadhar_no!='' and $email!='' and $twfs!='' and $state!='' and $district!='' and $taluka!='' and $village!='' and $postal_code!='' and $residential!='' )
                   {
	
                     $result=mysqli_query($con,"insert into enrollment_data(srno,college,college_code,enrollment,semester,
					  student_name,biology_flag,gender,student_category,dob,mobile_no,admission_category,
					  status_of_admission,quota,stream, course_code, course_name,aadhar_no,email,twfs, 
					  state,district,taluka,village,postal_code,residential_address,flag_for_login,username,password,mentor,batch)
					  values ('$srno','$college','$college_code','$enrollment','$sem','$student_name','$biology_flag','$gender','$student_category','$dob','$mobile','$admission_category','$admission_status',
                        '$quota','$stream','$course_code','$course_name','$aadhar_no','$email','$twfs','$state','$district','$taluka','$village','$postal_code','$residential','$flag','$username','$pwd_hashed_new','$mentor','$batch')");
				   
				   
					  echo "<script>alert('Student Registration Successfully');</script>";
					  echo "<script>location.href='studentdisplay.php';</script>";
					
				   }
				   else
				   {
					   echo "<script>alert('Fill all required data in Excel file.');</script>";
					   echo "<script>location.href='studentregpage.php';</script>";
				   }
			     }
				
              }
	
        } 
     
                else{
		
         
                   echo "<script>alert('Invalid file format');</script>";
	
                   }

                 }


?>