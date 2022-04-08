<?php
namespace Cake\Lib\SmsAlertLib;


include("vendor/autoload.php");
use SMSAlert\Lib\Smsalert\Smsalert; 

class SmsAlertLib{

     

    const user = ''; //enter SMS Alert Username
    const pass = ''; //enter SMS Alert Password
    const  senderid = 'CVDEMO'; 

 
// Send Message.................
    public function sendmsg($MOBILENO, $TEXT){ 

        $smsalert = (new Smsalert())
		->authWithUserIdPwd(self::user,self::pass);
        $result =  $smsalert->setSender(self::senderid)
        ->send($MOBILENO, $TEXT);
        return $result;
       
    }
 



// Create Group.................
    public function create_group($grpname) {

       $smsalert = (new Smsalert())
                ->authWithUserIdPwd(self::user,self::pass);
       $result = $smsalert->creategroup($grpname);
       return $result;

    } 





//  CreateContact.........................
    public function create_contact($grpname, $datas) {

        $smsalert = (new Smsalert())
                ->authWithUserIdPwd(self::user,self::pass);
        $datas = array(array('person_name'=>$datas['person_name'],'number'=>$datas['number']));        
        $result = $smsalert->importXmlContact($datas,$grpname);
        return $result;
  
    }

 

   

// Send Group Sms..........................
    public function group_send_sms($grid, $message){
       $smsalert = (new Smsalert())
                ->authWithUserIdPwd(self::user,self::pass);
       $result = $smsalert->setSender(self::senderid)
         ->sendGroupSms($grid, $message); 
       return $result;     

    }




// Send To Phone Number OTP........................

     public function generate_Otp($mobileno,$template){
        $smsalert = (new Smsalert())
        ->authWithUserIdPwd(self::user,self::pass);
        $result = $smsalert->setSender(self::senderid)
         ->generateOtp($mobileno, $template ); 
         return $result;   
    }





 // Validate Otp done..............................
    public function validate_Otp($otp,$mobileno){
       
      $smsalert = (new Smsalert())->authWithUserIdPwd(self::user,self::pass);
       $result = $smsalert->setSender(self::senderid)
       ->validateOtp($mobileno,$otp); 
       return $result;

    }

  

   

}


?>