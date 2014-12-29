<html>
<head>
  <meta charset="utf-8">
  <title>Login Form</title>
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script>
		var das = null;
		var man = false;
		function postData(){
		
		$(document).ready(function(){  
			$("form").on('click',function(event){ 
            if(event.preventDefault) event.preventDefault();  
			var username = document.getElementById('username').value;
			var password = document.getElementById('pw').value;
			$.post( "pageb.php", { username: username, password: password })
					.done(function(data){ 	
						das = data;						
						alert( "Data Loaded: " + data); 
						man = true;
						if(man){$("form").unbind('on').submit();}
					});   
	//				$('form-dialog').dialog('close');

//	if(man){$("form").unbind('on').submit();}
	}); 
//	if(man){$("form").unbind('on').submit();}
     });
			

	
		}

		function afterPost( das){
			var usernames = document.getElementById('username').value;
			alert( "Data Loaded: "+das);
		}

		function getValuesFromData(){
		
			postData();
		//	afterPost();
		//	$("form").unbind('on').submit();

	
		}

  </script>
</head>



<form>
    Username: <input type="text" name="username" id="username"></input><br>
    Password: <input type="password" name="pw" id="pw"> </input><br>

    <button id="sub" onclick="getValuesFromData();">Test</button>
</form>








</html>




