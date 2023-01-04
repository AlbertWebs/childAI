<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Redirect;

use DB;

use Mail;

class ReplyMessage extends Model
{
    /** Sends Messages From Contact Form */
    public static function SendMessage($body,$subject,$name,$to,$id){
      //The Generic mailler Goes here
      $data = array(
        'name'=>$name,
        'subject'=>$subject,
        'messageAppend'=>$body
    );
    $appName = config('app.name');
    $appEmail = config('mail.username');
 
 
    $FromVariable = $appEmail;
    $FromVariableName = $appName;

    $toVariable = $to;
    $toVariableName = $name;


    Mail::send('mail', $data, function($message) use ($subject,$FromVariable,$FromVariableName,$toVariable,$toVariableName){
        $message->from($FromVariable , $FromVariableName);
        $message->to($toVariable, $toVariableName)->cc('muhanjielvis@gmail.com')->subject($subject);
    
});
// Sets the status to Read
  $updateDetail = array(
      'status' => 1
  );
  
    }

    public static function mailSubscriber($email,$subject,$content,$url){
        $data = array(
            
            
            'content'=>$content,
            'url'=>$url,
            'subject'=>$subject,
           
        );
        
        $appName = config('app.name');
        $appEmail = config('mail.username');
    
    
        $FromVariable = $appEmail;
        $FromVariableName = $appName;

        $toVariable = $email;
        $toVariableName = 'Dear Client,';


        Mail::send('mailSubscriber', $data, function($message) use ($subject,$FromVariable,$FromVariableName,$toVariable,$toVariableName){
            $message->from($FromVariable , $FromVariableName);
            $message->to($toVariable, $toVariableName)->cc('muhanjielvis@gmail.com')->subject($subject);
        });
    }
    /** Sends The Subscribers Mail with attachment link, the Url is the link to the file */
    public static function mailSubscribers($email,$subject,$content,$url){
        $data = array(
            
            
            'content'=>$content,
            'url'=>$url,
            'subject'=>$subject,
           
        );
        
        $appName = config('app.name');
        $appEmail = config('mail.username');
    
    
        $FromVariable = $appEmail;
        $FromVariableName = $appName;

        $toVariable = $email;
        $toVariableName = 'Dear Client,';


        Mail::send('mailSubscriber', $data, function($message) use ($subject,$FromVariable,$FromVariableName,$toVariable,$toVariableName){
            $message->from($FromVariable , $FromVariableName);
            $message->to($toVariable, $toVariableName)->cc('info@iperformanceafrica.com')->cc('martin@iperformanceafrica.com')->subject($subject);
        });
    }

  
    public static function mailNotificaton($name,$email,$subject,$message){
        //The Generic mailler Goes here
        $data = array(
            'name'=>$name,
            'email'=>$email,
            'content'=>$message,
            'service'=>$subject,
          
        );
        $subject = "You Have a New Message";

    
    
        $FromVariable = 'mail@childambassadorsinitiative.org';
        $FromVariableName = $name;

        $toVariable = 'info@childambassadorsinitiative.org';

        $toVariableName = 'Child Ambassadors Initiative';


        Mail::send('mailContact', $data, function($message) use ($email,$subject,$FromVariable,$FromVariableName,$toVariable,$toVariableName){
            $message->from($FromVariable , $FromVariableName);
            $message->to($toVariable, $toVariableName)->cc('wdavice@gmail.com')->cc('albertmuhatia@gmail.com')->cc('info@childambassadorsinitiative.org')->cc('albertmuhatia@gmail.com')->replyTo($email)->subject($subject);
        });
    }

   

    public static function notification($email,$name,$country,$employees,$interests,$title){
        $data = array(
            
            'email'=>$email,
            'name'=>$name,
            'country'=>$country,
            'employees'=>$employees,
             'title'=>$title,
            'interests'=>$interests,
          
            
          
        );
        $subject = "New Download Request";
        $appName = config('app.name');
        $appEmail = config('mail.username');
    
    
        $FromVariable = $appEmail;
        $FromVariableName = $appName;

        $toVariable = $appEmail;

        $toVariableName = 'Iperformance Africa';


        Mail::send('mailBPP', $data, function($message) use ($subject,$FromVariable,$FromVariableName,$toVariable,$toVariableName){
            $message->from($FromVariable , $FromVariableName);
            $message->to($toVariable, $toVariableName)->cc('muhanjielvis@gmail.com')->subject($subject);
        });
    }

    public static function notifications($email){
        $data = array(
            
            'email'=>$email,
           
            
            
          
        );
        $subject = "New Member Requests To Join";
        $appName = config('app.name');
        $appEmail = config('mail.username');
    
    
        $FromVariable = $appEmail;
        $FromVariableName = $appName;

        $toVariable = $appEmail;

        $toVariableName = 'Springs of Arid and Semi Arid Lands';


        Mail::send('mailBPPP', $data, function($message) use ($subject,$FromVariable,$FromVariableName,$toVariable,$toVariableName){
            $message->from($FromVariable , $FromVariableName);
            $message->to($toVariable, $toVariableName)->cc('info@sasal.org')->cc('albertmuhatia@gmail.com')->subject($subject);
        });
    }

    public static function registration($name,$email,$phone,$message){
        $data = array(
            'name'=>$name,
            
            'email'=>$email,
            'phone'=>$phone,
            'messgae'=>$message,
            
            
        );
        $subject = "New Registration: Get Involved";
        $appName = config('app.name');
        $appEmail = config('mail.username');

        $subject = "You Have a New Registration";

    
    
        $FromVariable = 'mail@childambassadorsinitiative.org';
        $FromVariableName = $name;

        $toVariable = 'info@childambassadorsinitiative.org';

        $toVariableName = 'Child Ambassadors Initiative';


        Mail::send('mailBP', $data, function($message) use ($subject,$FromVariable,$FromVariableName,$toVariable,$toVariableName,$email){
            $message->from($FromVariable , $FromVariableName);
            $message->to($toVariable, $toVariableName)->cc('albertmuhatia@gmail.com')->cc('wdavice@gmail.com')->replyto($email)->subject($subject);
        });

        
    }

    public static function getlink($link,$email,$title){
        $data = array(
            'link'=>$link,
            'title'=>$title,
           
            
        );
        $subject = "Download Link";
        $appName = config('app.name');
        $appEmail = config('mail.username');
    
    
        $FromVariable = $appEmail;
        $FromVariableName = $appName;

        $toVariable = $email;

        $toVariableName = 'Dear Subscriber';

        Mail::send('mailBPB', $data, function($message) use ($subject,$FromVariable,$FromVariableName,$toVariable,$toVariableName){
            $message->from($FromVariable , $FromVariableName);
            $message->to($toVariable, $toVariableName)->cc('muhanjielvis@gmail.com')->subject($subject);
        });
    }
}
