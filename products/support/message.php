<?php
	if(isset($_POST["submit"])){
			//check username is empty;
			$sUserName = $_POST["username"];
			if("" == $sUserName){
					echo "<script>alert('请输入姓名!');history.go(-1);</script>";
					return;
				}
			
			//check tel is empty;
			$sTel = $_POST["tel"];
			if("" == $sTel){
					echo "<script>alert('请输入电话!');history.go(-1);</script>";
					return;
				}
			
			//check email is empty   and check the format of email;
			$sEmail = $_POST["email"];
			$reg = '/\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*/';
			if("" == $sEmail){
					echo "<script>alert('请输入邮箱！');history.go(-1);</script>";
					return;
				}else{
					if(!preg_match($reg,$sEmail)){
						echo "<script>alert('邮箱格式不正确,请重新输入!');history.go(-1);</script>";
						return;
						}					 	
					}
			$qq = $_POST["qq"];
			$sWechat = $_POST["wechat"];
					
			//check content of message is empty
			$sContent = $_POST["content"];
			if("" == $sContent){
					echo "<script>alert('您的宝贵意见不能为空,请重新输入！');history.go(-1);</script>";
					return;
				}

			
			$conn = mysql_connect("localhost","root","123");   //连接数据库  
      mysql_query("set m_name 'utf8'",$conn); //设定字符集  
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
				
			
			
			
			echo "<script>alert('您的留言已提交成功，我们会尽快回复！'); history.go(-1);</script>";  
			
	}else {
			
		}
		

?>