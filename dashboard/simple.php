<?php


 include("config.php");

 session_start();
    if(isset($_SESSION['ID']))
    {
      $email=$_SESSION['ID'];
    }
    else
    {
      $site= "<script type='text/javascript'>window.location='https://proscholarship.co.in/login.php'</script>";
        echo $site;
    }


$selected = mysqli_select_db($con, "proschol_pro")  
or die("Could not select Database");  
 
$result = mysqli_query($con,"select *from users where email like '$email';"); 
$row = mysqli_fetch_assoc($result);

 
?>
<html>

<head>
	<title>Student Application</title>
   <style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;border-color:#aabcfe;}
.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#aabcfe;color:#669;background-color:#e8edff;}
.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:#aabcfe;color:#039;background-color:#b9c9fe;}
.tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top}
.tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top}
</style>
</head>
<body onload="window.print()">
 <!-- 
<table align="center">
    <tr>
      <th colspan="3"><img align="center" src="https://proscholarship.co.in/img/core-img/logo.png" height="150px;"></img></th>
    </tr>
    <tr>
      <td>Name: </td>
      <td><?php /*echo $row['Name']?></td>
      <td><img border="1px" src="<?php echo $row['Photo']?>" height="200px"/></td>
    </tr>
    <tr>
      <td>Application ID: </td>
      <td>PRO_208<?php echo $row['ID']?></td>
      
    </tr>
    <tr>
      <td>Date of Birth: </td>
      <td><?php echo $row['DOB']?></td>
      
    </tr>

    <tr>
      <td>Gender: </td>
      <td><?php echo $row['Gender']?></td>
      </tr>
      <tr>
      <td>Email: </td>
      <td><?php echo $row['Email']?></td>
      </tr>
      <tr>
      <td>State: </td>
      <td><?php echo $row['State']?></td>
      </tr>
      <tr>
      <td>Aadhar Card Number: </td>
      <td><?php echo $row['Aadhar_No']?></td>
      </tr>
      <tr>
      <td>Phone Number: </td>
      <td><?php echo $row['Phone']?></td>
      </tr>
      <tr>
      <td>Fee Status: </td>
      <td><?php $result = mysqli_query($con,"select status,amount from payements where buyer like '$email';"); 
$ro = mysqli_fetch_assoc($result);
$stat=$ro['status'];
if($stat=="Credit")
{
  echo "PAID";
}
else
{
  echo "UNPAID";
}
 
?></td>
      </tr>
      <tr>
      <td>Amount: </td>
      <td><?php echo $ro['amount']?></td>
      </tr>
      <tr>
      <td>Bank Account: </td>
      <td><?php echo $row['Acc_Number']?></td>
      </tr>
      <tr>
      <td>IFSC Code: </td>
      <td><?php echo $row['IFSC']*/?></td>
      </tr>

  </table>
-->
<table class="tg">
  <tr>
    <th class="tg-0pky" colspan="4"><img align="center" src="https://proscholarship.co.in/img/core-img/logo.png" height="50px"></img></th>
    
  </tr>
  <tr>
    <td class="tg-0pky">Application ID</td>
    <td class="tg-0pky" colspan="2">PRO_208<?php echo $row['ID']?> </td>
    <td class="tg-0pky" rowspan="4"><img src="<?php echo $row['Photo']?>" height="200px"></td>
  </tr>
  <tr>
    <td class="tg-0pky">Name</td>
    <td class="tg-0pky" colspan="2"><?php echo $row['Name']?></td>
  </tr>
  <tr>
    <td class="tg-0pky">Date of Birth</td>
    <td class="tg-0pky" colspan="2"><?php echo $row['DOB']?></td>
  </tr>
  <tr>
    <td class="tg-0pky">Father's Name</td>
    <td class="tg-0pky" colspan="2"><?php echo $row['father']?></td>
  </tr>
  <tr>
    <td class="tg-0pky">Mother's Name</td>
    <td class="tg-0pky"><?php echo $row['mother']?></td>
    <td class="tg-0pky">State</td>
    <td class="tg-0pky"><?php echo $row['State']?></td>
  </tr>
  <tr>
    <td class="tg-0pky">Gender</td>
    <td class="tg-0pky"><?php echo $row['Gender']?></td>
    <td class="tg-0pky">Person With Disability</td>
    <td class="tg-0pky"><?php echo $row['disability']?></td>
  </tr>
  <tr>
    <td class="tg-0pky">Aadhar Number</td>
    <td class="tg-0pky"><?php echo $row['Aadhar_No']?></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
  </tr>
  <tr>
    <td class="tg-0pky">Address</td>
    <td class="tg-0pky" colspan="3"><?php echo $row['address']?></td>
  </tr>
  <tr>
    <td class="tg-0pky" colspan="4">Academic Details</td>
  </tr>
  <tr>
    <td class="tg-0pky">Year of Passing 10th</td>
    <td class="tg-0pky"><?php echo $row['tenpass']?></td>
    <td class="tg-0pky">Name of School</td>
    <td class="tg-0pky"><?php echo $row['tenschool']?></td>
  </tr>
  <tr>
    <td class="tg-0pky">Year of Passing 12th</td>
    <td class="tg-0pky"><?php echo $row['twelvepass']?></td>
    <td class="tg-0pky">Name of School/College</td>
    <td class="tg-0pky"><?php echo $row['twelveschool']?></td>
  </tr>
  <tr>
    <td class="tg-0pky">Marks Obtained in 12th (%)</td>
    <td class="tg-0pky"><?php echo $row['marks']?></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
  </tr>
  <tr>
    <td class="tg-0pky">Pin Code</td>
    <td class="tg-0pky"><?php echo $row['pin']?></td>
    <td class="tg-0pky">Contact Number</td>
    <td class="tg-0pky"><?php echo $row['Phone']?></td>
  </tr>
  <tr>
    <td class="tg-0pky">Email</td>
    <td class="tg-0pky"><?php echo $row['Email']?></td>
    <td class="tg-0pky">Bank A/C Number</td>
    <td class="tg-0pky"><?php echo $row['Acc_Number']?></td>
  </tr>
  <tr>
    <td class="tg-0pky">Fee Status</td>
    <td class="tg-0pky"><?php $result = mysqli_query($con,"select status,amount from payements where buyer like '$email';"); 
$ro = mysqli_fetch_assoc($result);
$stat=$ro['status'];
if($stat=="Credit")
{
  echo "PAID";
}
else
{
  echo "UNPAID";
}
 
?></td>
    <td class="tg-0pky">IFSC Code</td>
    <td class="tg-0pky"><?php echo $row['IFSC']?></td>
  </tr>
  <tr>
    <td class="tg-0pky">Payment Amount</td>
    <td class="tg-0pky"><?php echo $ro['amount']?></td>
    <td class="tg-0pky"></td>
    <td class="tg-0pky"></td>
  </tr>
  <tr>
    <td class="tg-c3ow" colspan="4">Scholarship Terms and Conditions</td>
  </tr>
  <tr>
    <td class="tg-0pky" colspan="4" rowspan="2">1. Only completed applications accompanied by all supporting documents will be considered. Applications are to be submitted to the ONLINE or Agent with all relevant documents.<br>2. Scholarships are awarded on Academic Merit. Please discuss the eligibility requirements with your Study Group Representative or with the Study Group Agent.<br>3. After the Declaration of result you get your refund money through cheque/bank account.<br>4. Scholarships are limited in number, and subject to availability. Even if an applicant meets scholarship criteria, a scholarship may not be awarded.<br>5. Applicants will be assessed according to the assessment criteria set out for each program and scholarship category<br>6. Applicants may be requested to submit further information or to attend an interview with a Study Group Representative.<br>7. We refund your 90% money if you are not appear the exam.<br>8. Scholarships are not transferable and the recipient must pay the fees outlined in the offer letter within six weeks of the offer being made. Non-payment of fees by this date and/or changing your course<br>start date will forfeit any scholarship awarded.<br>9. Scholarships are subject to applicants meeting the entry requirements to the program.<br>10. Continuation of the scholarship is subject to the recipient successfully meeting the study requirements of each term of the program, including passing all subjects, and adherence to program rules.<br>11. If the scholarship recipient fails any subject during the program, the scholarship is forfeited and the scholarship recipient is liable for the full tuition fees and costs of subsequent subjects.<br>12. Scholarship recipients will be liable to pay any non-tuition fee items which may be required for the program, such as toolkits or materials.<br>13. Scholarship recipients agree to become ambassadors of Study Group or the University Partner undertaking, activities agreed as reasonable and acceptable by the scholarship recipient. This includes<br>matters such as attending recruitment events; answering enquiries of prospective students; and contributing short articles and use of scholarship recipient’s images for newsletters and blogs<br>14. Scholarships are not available with any other discount offer. Study Group decisions in relation to scholarships are final, and no correspondence will be entered into.</td>
  </tr>
  <tr>
  </tr>
  <tr>
    <td class="tg-c3ow" colspan="4">Declaration</td>
  </tr>
  <tr>
    <td class="tg-0pky" colspan="4">I <b> <?php echo $row['Name']?> </b> declare that all information provided by me in my scholarship application is complete, factually correct and honestly presented have read and understood the proscholarship Merit list Policy for New Entrants and agree to abide by the rules and regulations of the Institute. If I am found giving any incorrect information, understand that proscholarship<br>reserves the right to cancel my candidature for scholarship. I read all term and conditions and I am agree with all term and<br>conditions. .</td>
  </tr>
  <tr>
    <td class="tg-0pky" colspan="2"></td>
    <td class="tg-0pky">Signature</td>
    <td class="tg-0pky"><img src="<?php echo $row['Sign']?>"></img></td>
  </tr>
</table>

     

</body>
</html>