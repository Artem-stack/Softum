<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use App\Models\Email;
use Validator;
use App\Http\Requests;
use App\Http\Requests\EmailRequest;
 
class PHPMailerController extends Controller {
 
  public function welcome() {

       
        return view("welcome"
           );
    }
    // =============== [ Email ] ===================
    public function email() {

    	$email = Email::all();
        return view("email", [
        	"email" => $email,]);


    }
 
  public function store(EmailRequest $requests)
    {
       $data = $requests->validated();
  
        Email::create($data);

        return back()->with("success", "Email has been sent.");
    }

 
    // ========== [ Compose Email ] ================
    public function composeEmail(EmailRequest $request) {

        if ($data = $request->validated()  
  
        
        ) { Email::create($data);

        $email = Email::all();
           
        require base_path("vendor/autoload.php");
        $mail = new PHPMailer(true);     // Passing `true` enables exceptions

        try {
             $email->Html = $request->Html;
        $email->Text = $request->Text;
   
 
            // Email server settings
            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';             //  smtp host
            $mail->SMTPAuth = true;
            $mail->Username = 'artemnikolko@gmail.com';   //  sender username
            $mail->Password = 'dvpijlbmfnasbezo';       // sender password
            $mail->SMTPSecure = 'tls';                  // encryption - ssl/tls
            $mail->Port = 587;                          // port - 587/465
 
            $mail->setFrom('sender@example.com', 'SenderName');
            $mail->addAddress($request->emailRecipient);
            $mail->addCC($request->emailCc);
            $mail->addBCC($request->emailBcc);
 
            $mail->addReplyTo('sender@example.com', 'SenderReplyName'); // sender email, sender name
 
            if ($request->type = 'Text') {
                $mail->isHTML(false); 
            } else
            $mail->isHTML(true);                // Set email content format to HTML
 
         

            $mail->Subject = $request->emailSubject;
            $mail->Body    = $request->emailBody;
 
            // $mail->AltBody = plain text version of email body;
 
            if( !$mail->send() ) {
                return back()->with("failed", "Email not sent.")->withErrors($mail->ErrorInfo);
            }
            
            else {
                return view('result', [
            "request" => $request,     
            "mail" => $mail,
            "email" => $email,]
            );
            }
 
        } catch (Exception $e) {
             return back()->with('error','Message could not be sent.');
        }
    }
}

public function result() {

        $email = Email::all();
        return view("email", [
            "email" => $email,]);
    }

}
