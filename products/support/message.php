<?php
	if(isset($_POST["submit"])){
			//check username is empty;
			$sUserName = $_POST["username"];
			if("" == $sUserName){
					echo "<script>alert('����������!');history.go(-1);</script>";
					return;
				}
			
			//check tel is empty;
			$sTel = $_POST["tel"];
			if("" == $sTel){
					echo "<script>alert('������绰!');history.go(-1);</script>";
					return;
				}
			
			//check email is empty   and check the format of email;
			$sEmail = $_POST["email"];
			$reg = '/\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/';
			if("" == $sEmail){
					echo "<script>alert('���������䣡');history.go(-1);</script>";
					return;
				}else{
					if(!preg_match($reg,$sEmail)){
						echo "<script>alert('�����ʽ����ȷ,����������!');history.go(-1);</script>";
						return;
						}					 	
					}
			$qq = $_POST["qq"];
			$sWechat = $_POST["wechat"];
					
			//check content of message is empty
			$sContent = $_POST["content"];
			if("" == $sContent){
					echo "<script>alert('���ı����������Ϊ��,���������룡');history.go(-1);</script>";
					return;
				}

			
			$conn = mysql_connect("localhost","root","123");   //�������ݿ�  
      mysql_query("set m_name 'utf8'",$conn); //�趨�ַ���  
      mysql_query("set m_remark 'utf8'",$conn);
      
    	if(!$conn){
    			die('Could not connect:'.mysql_error());
    		}
    	
    	mysql_select_db("shjiaxin",$conn);
    	$sql = "Insert into m_message (m_name,m_phone,m_email,m_qq,m_weichat,m_remark)
    	values ('$sUserName','$sTel','$sEmail','$qq','$sWechat','$sContent')";
    	
    	if(!mysql_query($sql,$conn)){
    			die('Error:'.mysql_error());
    		}
    	echo "1 record added";
				
			
			
			
			echo "<script>alert('�����������ύ�ɹ������ǻᾡ��ظ���'); history.go(-1);</script>";  
			
	}else {
			
		}
		

?>