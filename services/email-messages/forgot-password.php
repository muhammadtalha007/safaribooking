<?php

namespace services\email_messages;

class ForgotPasswordMessage
{
    public function invitationMessageBody(string $email, $password)
    {
        $emailBody = '
   <body>
   <div style="margin: 0 auto;max-width: 800px;background: rgba(211,211,211,0.68);padding: 30px">
    <div style="margin: 0 auto;max-width: 600px;background: white">
    <div style="background-color: black;border-top: 5px solid #6b9ce8;border-bottom: 5px solid #6b9ce8;padding: 10px;color: white">
                <p style="color: white;text-align: center;font-size: 26px">
                Welcome. Here is your credentials to login
                </p>
        </div>
        <div style="padding: 50px"></div>
             <div style="margin-left: 10px;margin-right: 10px;font-size: 17px;padding-top: 2px">Email: '. $email .'</div>
             <div style="margin-left: 10px;margin-right: 10px;font-size: 17px;padding-top: 2px">Password: '. $password .'</div>
             <div style="padding-top: 30px;padding-bottom: 40px">
 <a href="'. url(''). '/login" style=" background-color: #6b9ce8;
  border: none;
  color: white;
  padding: 10px 27px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 18px;
  cursor: pointer;
  border-radius: 3px;margin-left: 5px">Login</a>
  </div>
  </div>
</div><br>
</div>
 </div>
            </body>
            ';
        return $emailBody;
    }

}
