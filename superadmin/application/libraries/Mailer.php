<?php
class Mailer
{
    private $mail_header;
    private $mail_footer;
    private $CI;
    function __construct()
    {
    	$this->mail_header='<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/><meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/><title>Mailer :: Taxbook</title><link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet"><link href="https://fonts.googleapis.com/css?family=Lato:400,700,900|Roboto:400,500,700&display=swap" rel="stylesheet"><style>@media only screen and (max-width: 600px){body{img{width:100%;height:auto;}table{width: 100%!important;}}</style></head><body><table align="center" border="0" cellpadding="0" cellspacing="0" style="max-width:700px; border-collapse: collapse!important; margin:0 auto; border:1px solid #000;font-family: Lato, sans-serif; color:#000; padding:15px;"> <tr style="background: #363c44 !important" align="center"><td style="background: #c10000;color: white;height: 50px;font-size: x-large;font-weight: bold;">Crack-the-Tax by CA. Sharad Bhargava</td></tr><tr> <td><table width="100%" border="0" cellspacing="0" cellpadding="0">';
		
		
    	$this->mail_footer='<tr><td colspan="2" style="background-color:white; padding: 10px;"><p>Happy Tax Learning!</p><strong>CA. Sharad Bhargava</strong></td></tr></table></td></tr><tr><td><table width="100%" cellspacing="0" cellpadding="0" style="text-align:center; background-color:#e7eaef; border: 1px solid #ccc "><tr style="border: 1px solid #ccc"><td rowspan="2" style="border: 1px solid #ccc"><img src="'.file_upload_base_url().'/51ba570fe68fc088e0a942bdf8700cdce7eb8b1d/1631691515SW6A9825-jpeg-LI.jpg" border="0" style="width:72px; height:72px;"/></td><td colspan="4" style="background-color: #eea83b;border: 1px solid #ccc">Connect with me</td><td rowspan="2" style="border: 1px solid #ccc"><p align="center" style="margin-bottom: 0px;"><strong>Happy with Crack-the-Tax?</strong></p> Tell your friends about<br><a href="http://www.TaxWithSharad.com">www.TaxWithSharad.com</a></td></tr><tr><td style="border: 1px solid #ccc"><a href="https://www.youtube.com/channel/UCPY3NPEQGyTQCJef_pYk4bQ" target="_blank"><img src="'.base_url('assets/').'images/youtube.png" border="0" style="width:35px; height:35px;"/></a></td><td style="border: 1px solid #ccc"><a href="https://www.linkedin.com/company/taxwithsharad" target="_blank"><img src="'.base_url('assets/').'images/linkedin.png" border="0" style="width:35px; height:35px;"/></a></td><td style="border: 1px solid #ccc"><a href="https://www.facebook.com/taxwithsharad" target="_blank"><img src="'.base_url('assets/').'images/facebook.png" border="0" style="width:35px; height:35px;"/></a></td><td style="border: 1px solid #ccc"><a href="https://www.instagram.com/taxwithsharad/" target="_blank"><img src="'.base_url('assets/').'images/instagram.png" border="0" style="width:35px; height:35px;"/></a></td></tr><tr><td colspan="6" style="font-size: small"><p style="margin-bottom: -10px;">&copy; Sharad Bhargava. All rights reserved</p><p>Please do not reply to this email as it is an automated email and replies are not monitored</p></td></tr></table></td><tr></table><center> <a href="'.front_base_url('unsubscribe').'">Unsubscribe</a></center></body></html>';
				
		$this->CI =& get_instance();
		$this->CI->load->library('email');
		
		$config['protocol'] = 'sendmail';
		$config['mailpath'] = '/usr/sbin/sendmail';
		$config['charset'] = 'iso-8859-1';
		$config['mailtype'] = 'html';
		$config['wordwrap'] = TRUE;
		$this->CI->email->initialize($config);
    }
	
    public function mailerMail($FROM,$TO,$SUBJECT,$MSG,$TYPE)
    {
        
		
		$mail_body = '
		<tr>
			<td colspan="2" style="background-color:white; padding: 10px;">
				'.$MSG['msg'].'
			</td>
		</tr>';
		
		$message=$this->mail_header.$mail_body.$this->mail_footer;
		
		if($TYPE==1)
		{
			echo $message;
		}
		elseif($TYPE==2)
		{
			//Send to the User
			$this->CI->email->from($FROM['mail'],$FROM['name']);
			$this->CI->email->to($TO);
			$this->CI->email->subject($SUBJECT);
			$this->CI->email->message( $message );
			
			if($this->CI->email->send())
				return true;
			else
				return false;
		}
    }
	
	
    public function supportReplyMail($FROM,$TO,$MSG)
    {
        //Send to the User
		$this->CI->email->from($FROM['mail'],$FROM['name']);
		$this->CI->email->to(implode(",",$TO));
		$this->CI->email->subject("Re: ".$MSG['subject']);
		
		$mail_body = '
		<tr>
			<td colspan="2" align="center" style="background-color:#f79120;">
				<strong>Re: '.$MSG['subject'].'</strong>
			</td>
		</tr>
		<tr>
			<td colspan="2" style="background-color:white; padding: 10px;">
				<p>Dear '.$MSG['name'].', </p>
				<p>Thank you very much for reaching out to us on <a href="https://www.taxwithsharad.com/">www.TaxWithSharad.com</a>. A copy of your query is appended to this email.</p>
			</td>
		</tr>
		<tr>
			<td colspan="2" style="background-color:white; padding: 10px;">
				'.$MSG['msg'].'
			</td>
		</tr>
		<tr>
			<td colspan="2" style="background-color:white; padding: 10px;">
				Hope this answers your query.
			</td>
		</tr>
		<tr>
			<td colspan="2" style="background-color:white; padding: 10px;">
				If you need any further clarification or information, please feel free to write to us.
			</td>
		</tr>
		<tr>
			<td colspan="2" style="background-color:white; padding: 10px;">
				<p>Happy Tax Learning!</p><strong>CA. Sharad Bhargava</strong>
			</td>
		</tr>
		<tr>
			<td colspan="2" style="background-color:white; padding: 10px;">
				<center><strong>------------------------Your query------------------------<br></strong></center>'.$MSG['query'].'
			</td>
		</tr>
		</table>
		</td>
		</tr>
		<tr>
			<td>
				<table width="100%" cellspacing="0" cellpadding="0" style="text-align:center; background-color:#e7eaef; border: 1px solid #ccc ">
					<tr style="border: 1px solid #ccc">
						<td rowspan="2" style="border: 1px solid #ccc"><img src="'.file_upload_base_url().'/51ba570fe68fc088e0a942bdf8700cdce7eb8b1d/1631691515SW6A9825-jpeg-LI.jpg" border="0" style="width:72px; height:72px;"/>
						</td>
						<td colspan="4" style="background-color: #eea83b;border: 1px solid #ccc">Connect with me</td>
						<td rowspan="2" style="border: 1px solid #ccc">
							<p align="center" style="margin-bottom: 0px;"><strong>Happy with Crack-the-Tax?</strong>
							</p> Tell your friends about<br><a href="http://www.TaxWithSharad.com">www.TaxWithSharad.com</a>
						</td>
					</tr>
					<tr>
						<td style="border: 1px solid #ccc"><a href="https://www.youtube.com/channel/UCPY3NPEQGyTQCJef_pYk4bQ" target="_blank"><img src="'.base_url('assets/').'images/youtube.png" border="0" style="width:35px; height:35px;"/></a>
						</td>
						<td style="border: 1px solid #ccc"><a href="https://www.linkedin.com/company/taxwithsharad" target="_blank"><img src="'.base_url('assets/').'images/linkedin.png" border="0" style="width:35px; height:35px;"/></a>
						</td>
						<td style="border: 1px solid #ccc"><a href="https://www.facebook.com/taxwithsharad" target="_blank"><img src="'.base_url('assets/').'images/facebook.png" border="0" style="width:35px; height:35px;"/></a>
						</td>
						<td style="border: 1px solid #ccc"><a href="https://www.instagram.com/taxwithsharad/" target="_blank"><img src="'.base_url('assets/').'images/instagram.png" border="0" style="width:35px; height:35px;"/></a>
						</td>
					</tr>
					<tr>
						<td colspan="6" style="font-size: small">
							<p style="margin-bottom: -10px;">&copy; Sharad Bhargava. All rights reserved</p>
							<p>Please do not reply to this email as it is an automated email and replies are not monitored</p>
						</td>
					</tr>
				</table>
			</td>
			<tr>
		</table>
		<center> <a href="'.front_base_url('unsubscribe').'">Unsubscribe</a>
		</center>
		</body>
		</html>';
		
		$message=$this->mail_header.$mail_body;
		$this->CI->email->message( $message );
		
		
			if($this->CI->email->send())
				return true;
			else
				return false;
    }
	
	
    public function reviewReplyMail($FROM,$TO,$MSG)
    {
        //Send to the User
		$this->CI->email->from($FROM['mail'],$FROM['name']);
		$this->CI->email->to(implode(",",$TO));
		$this->CI->email->subject("Thank you!");
				
		$mail_body = '<tr>
			<td colspan="2" align="center" style="background-color:#f79120;">
				<strong>Thank you!</strong>
			</td>
		</tr>
		<tr>
			<td colspan="2" style="background-color:white; padding: 10px;">
				Dear '.$MSG['name'].',
			</td>
		</tr>
		<tr>
			<td colspan="2" style="background-color:white; padding: 10px;">
			I would like to personally acknowledge and thank you for your rating and review that you provided on <a href="https://www.taxwithsharad.com/" target="_blank">www.TaxWithSharad.com</a>. 
			</td>
		</tr>
		<tr>
			<td colspan="2" style="background-color:white; padding: 10px;">
				'.$MSG['msg'].'
			</td>
		</tr>';
		
		$message=$this->mail_header.$mail_body.$this->mail_footer;
		$this->CI->email->message( $message );
		
			if($this->CI->email->send())
				return true;
			else
				return false;
    }
	
	
    public function askQuestionReplyMail($FROM,$TO,$MSG)
    {
        //Send to the User
		$this->CI->email->from($FROM['mail'],$FROM['name']);
		$this->CI->email->to(implode(",",$TO));
		$this->CI->email->subject("Response to your query:".$MSG['subject']);
		
		$mail_body = '<tr>
			<td colspan="2" align="center" style="background-color:#f79120;">
				<strong>Response to your query</strong>
			</td>
		</tr>
		<tr>
			<td colspan="2" style="background-color:white; padding: 10px;">
				Dear '.$MSG['name'].',
			</td>
		</tr>
		<tr>
			<td colspan="2" style="background-color:white; padding: 10px;">
				I have responded to your query. You can view the response on the ‘Get help from Sharad Sir’ website user section. 
			</td>
		</tr>';
		
		$message=$this->mail_header.$mail_body.$this->mail_footer;
		$this->CI->email->message( $message );
		
		
			if($this->CI->email->send())
				return true;
			else
				return false;
    }
	
	
	
	
    public function registrationMailTC($FROM,$TO,$MSG) //done
    {
        //Send to the User
		$this->CI->email->from($FROM['mail'],$FROM['name']);
		$this->CI->email->to(implode(",",$TO));
		$this->CI->email->subject('Welcome to \'Crack-the-Tax\' family');
		
		
		$mail_body = '<tr>
			<td colspan="2" align="center" style="background-color:#f79120;">
				<strong>Welcome to \'Crack-the-Tax\' family</strong>
			</td>
		</tr>
		<tr>
			<td colspan="2" style="background-color:white; padding: 10px;">
				<p>Dear '.$MSG['name'].', </p>
				<p>Welcome to \'Crack-the-Tax\', the growing family of Chartered Accountants in the making, who are determined to say goodbye to repeat attempt!</p>
				
				<p>Your subscription to Tax Cruiser Pack is successful. Your <a href="'.front_base_url('login').'" target="_blank">login</a> credentials are given below:</p>
				<p>Username :'.$MSG['email'].'</p>
				<p>Password :'.$MSG['password'].'</p>
				<p>If the above password is system-generated, we recommended that you  change it from the &lsquo;My Profile&rsquo; section. <br>
				  Subscription to Tax Cruiser Pack  has entitled you to the following:</p>
				<ul>
				  <li>FREE download  of<strong> Tax Cruiser</strong>, a&nbsp;unique tool to  quickly identify interlinkage of concepts for solving practical questions |  Overcome a top barrier why most people fail to clear Income Tax exam! Watch the <a href="https://youtu.be/XICFiGDGE5g" target="_blank">video</a>. Click <a href="https://www.taxwithsharad.com/uploads/51ba570fe68fc088e0a942bdf8700cdce7eb8b1d/1635754041Tax-Cruiser---Version-1Nov2021.pdf">here</a> to download. You can also download  it from the \'<a href="https://www.taxwithsharad.com/compilerdownload">Services</a>\' section.</li>
				  <li>Important  updates &amp; exclusive tips that you will receive on email from time to time.  You can also view them on the user <a href="https://www.taxwithsharad.com/dashboard">dashboard</a>. </li>
				</ul>
				
				You  can contact us anytime through the &lsquo;Contact Us&rsquo; section of the website.
			</td>
		</tr>';
		
		$message=$this->mail_header.$mail_body.$this->mail_footer;
		$this->CI->email->message( $message );
		
		if($this->CI->email->send())
			return true;
		else
			return false;
    }
	
}

