<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link href="css/global.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="css/user.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="css/fancyBox.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="css/jquery-ui.css" media="screen" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/footer.css" />
<link rel="stylesheet" type="text/css" href="css/index.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

<title>F4ce Wash</title>
<style>
#buttonSuggest
{
	background-color:#0CF;
	color:#FFF;
	font-weight:bold; 
	
}
#deletePostsButton
{
	background-color:#F00;
	color:#FFF;
	opacity:.5; 
}
#deletePostsButton:hover
{
	opacity:1;
}
#buttonSuggest:hover
{
	opacity:.4; 
}
.postRow
{
	text-align:center;
}
.postRow:hover
{
	background-color:#FF0;
	cursor:pointer;
}
#cancelIcon:hover
{
	opacity:.5;
	cursor:pointer;
}
#regFormErrorLabel
{
	 cursor:text; 
	 color:#FFF;
	 width:300px;
	 background-color:#F00;
	 font-weight:bold; 
	 border-radius:15px;
	 text-align:center; 
	 border:0px; 
	 position:absolute;
	 font-size:10.5px;
	 opacity:1;
}
</style>
</head>

<body id="about" class="static_resources" style="background-color:#FFF">
			
            
            
<div id="content" style="overflow:">

	<div class="topbar">
      <div class="topbar-inner">
        <div class="container-fluid">
          <a class="brand" href="#">F4ce Wash</a>

          <ul class="nav">
          </ul>
          <p class="pull-right">Logged in as <a id="username" href="#">username</a></p>

        </div>
      </div>
    </div>
    
	<div class="wrapper">
        <img id="image"/>
        <div id="name" style="font-weight:bold">User name should be here</div><br />
        <input class="btn" type="button" onclick="listPostsOnMyWall()" value="Wash My Wall" /><br /><br />
        <select id="friendDropDown2">
          <option id="firstOption" value="">Choose a friend!</option>
        </select>
        <input class="btn" type="button" onclick="listPostsOnMyWallbyFriends()" value="Made My Wall Dirty" />
        <br /><br />
        <select id="friendDropDown">
          <option id="firstOption" value="">Choose a friend!</option>
        </select>
        <input class="btn" type="button" onclick="listPostsFriends()" value="Has a Dirty Wall" />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <br /><br />
        <input class="btn" type="button" onclick="postToWall()" value="Post To My Wall" />
        <br /><br />
        <div class="fb-login-button" data-scope="user_about_me, publish_actions, read_mailbox, status_update, read_stream, friends_about_me, user_activities, friends_activities, email, user_checkins, user_status">
        Login with Facebook
     	</div><br />
   		<center><img id="loader" src="images/ajax-loader3.gif" style="position:absolute; visibility:hidden" /></center>
        <div style="border:1; ; width:100%" id="postTable"><img onclick="removeTable()" id="cancelIcon" src="images/cancel.png" style="position:relative; left:99%; top:10px; visibility:hidden" />
        
        <div id="fb-root"></div>   
                      <script type="text/javascript">
                        window.fbAsyncInit = function() {
                            
                          FB.init({
                            appId      : '264208386988856',
                            status     : true, 
                            cookie     : true,
                            xfbml      : true,
                            oauth      : true,
                          });
                          
                          
                          
                          
                          FB.getLoginStatus(function(response) {
                          if (response.status === 'connected') {
                    
                            FB.api('/me', function(response) {
                              var name = document.getElementById('image');
							  document.getElementById('username').innerHTML = response.name; 
                              image.src = 'https://graph.facebook.com/' + response.id + '/picture';
                              var name = document.getElementById('name');
                              name.innerHTML = "Name: " + response.name;
                            });
							
							FB.api('/me/friends', function(response) {
								for(i = 0; i < response.data.length; i++)
								{
									option = document.createElement('option');
									option.innerHTML = response.data[i].name; 
									option.id = response.data[i].id; 
									
									option2 = document.createElement('option');
									option2.innerHTML = response.data[i].name; 
									option2.id = response.data[i].id;
									 
									document.getElementById('friendDropDown').appendChild(option); 
									document.getElementById('friendDropDown2').appendChild(option2); 
								}
							});
                            // the user is logged in and has authenticated your
                            // app, and response.authResponse supplies
                            // the user's ID, a valid access token, a signed
                            // request, and the time the access token 
                            // and signed request each expire
                            var uid = response.authResponse.userID;
                            var accessToken = response.authResponse.accessToken;
                          } else if (response.status === 'not_authorized') {
                            // the user is logged in to Facebook, 
                            // but has not authenticated your app
                          } else {
                            // the user isn't logged in to Facebook.
                          }
                         });
                        };
                        
                        (function(d){
                           var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
                           js = d.createElement('script'); js.id = id; js.async = true;
                           js.src = "//connect.facebook.net/en_US/all.js";
                           d.getElementsByTagName('head')[0].appendChild(js);
                         }(document));
                      </script>
      </div>
        
        
		

		<div class="clearfix"></div>
	</div>
</div><!-- end #content -->

<center>
    <div id="footer" style=" background-color:#0CF; opacity:; border-radius:15px; height:50px">
        <ul id="footer-icons" style="list-style-type: none; display: inline; display: block;">
            <li class="icons" style="width:500px; height:36; list-style-type: none; display: inline;"">
            	<a href="/">
                </a>
            </li>
            <li class="icons" style="list-style-type: none; display: inline;">
            	<a href="/">
                </a>
            </li>	
        </ul>
        <div class="clear"></div>
        <ul id="footer-nav" class="ChaletNewYorkNineteenEighty">

            <ul id="footer-subnav" class="ChaletNewYorkNineteenEighty">
              <li style=""> </li>
              <li class="flag"><a class="german" href=""><img src="images/de.png" /></a></li>
              <li class="flag"><a class="france" href=""><img src="images/fr.png" /></a></li>
              <li class="flag"><a class="spain"  href=""><img src="images/es.png" /></a></li>
              <li class="flag"><a class="japan"  href=""><img src="images/japan_flag.jpg" /></a></li>
              <li class="flag"><a class="china"  href=""><img src="images/cn.png" /></a></li>
              <li class="flag"><a class="brazil" href=""><img src="images/br.png" /></a></li>
              <li class="flag"><a class="russia" href=""><img src="images/ru.png" /></a></li>
            </ul>
        </ul>
    </div>
</center>


</body>
<script>
	  var table;  var state; 
	  
   function listPostsOnMyWall() {
	   state = 1; 
	   document.getElementById('loader').style.visibility = "visible"; 
	   document.getElementById('loader').style.position = ""; 
	   removeTable(); 
   FB.getLoginStatus(function(response) {
	
	  if (response.status === 'connected') {
		 FB.api('/me', function(response) {
			  var name = document.getElementById('image');
              image.src = 'https://graph.facebook.com/' + response.id + '/picture';
              var name = document.getElementById('name');
              name.innerHTML = "Name: " + response.name;
			}); 
	
		var uid = response.authResponse.userID;
		var accessToken = response.authResponse.accessToken;
	  }
	  table = document.createElement('table'); 
	  table.border = "1"; 
	  table.style.border = "1px"; 
	  cell = document.createElement('td'); cell.style.fontWeight = "bold"; 
	  cell.innerHTML = "Post: ";  
	  cell2 = document.createElement('td'); cell2.style.fontWeight = "bold";  
	  cell2.innerHTML = "Delete Post? ";  
	  cell3 = document.createElement('td'); cell3.style.fontWeight = "bold";
	  button = document.createElement('input'); 
	  button.setAttribute('type', 'button'); 
	  button.setAttribute('value', 'Delete Posts'); 
	  button.id = "deletePostsButton";
	  cell3.appendChild(button); 
	  row = document.createElement('tr');
	  row.style.backgroundColor = "white";
	  row.appendChild(cell); row.appendChild(cell2);  row.appendChild(cell3);
	  table.appendChild(row);
	  
	  FB.api('/me/statuses', { limit: 1000 }, function(response) {
	  for (var i=0, l=response.data.length; i<l; i++) {
		var post = response.data[i];
		var comment = post.comments; 
		if (post.message) {
			if(containsBadWords(post.message))
			{
				console.log(containsBadWords(post.message)); 
				row.className = "postRow"; 
				row = document.createElement('tr'); 
				cell = document.createElement('td'); 		
				cell2 = document.createElement('td'); 
				cell.innerHTML = post.message; 
				button = document.createElement('input');
				button.setAttribute('type', 'button');
				button.setAttribute('value', 'X');
				button.id = "deletePostsButton"; 
				cell2.appendChild(button); 
				cell3 = document.createElement('td'); 
				checkBox = document.createElement('input'); 
				checkBox.setAttribute('type', 'checkbox'); 
				cell3.appendChild(checkBox); 
				row.appendChild(cell); row.appendChild(cell2);  row.appendChild(cell3);
				table.appendChild(row);
			}
			
			if(comment.data)
			{
				for(var ii =0, ll=comment.data.length; ii<ll;ii++)
				{
					var post2 = comment.data[ii]; 
					if(post2.message)
					{
						if(containsBadWords(post2.message))
						{
							console.log(containsBadWords(post.message)); 
							row.className = "postRow"; 
							row = document.createElement('tr'); 
							cell = document.createElement('td'); 		
							cell2 = document.createElement('td'); 
							cell.innerHTML = post2.message; 
							button = document.createElement('input');
							button.setAttribute('type', 'button');
							button.setAttribute('value', 'X'); 
							button.id = "deletePostsButton"; 
							cell2.appendChild(button); 
							cell3 = document.createElement('td'); 
							checkBox = document.createElement('input'); 
							checkBox.setAttribute('type', 'checkbox'); 
							cell3.appendChild(checkBox); 
							row.appendChild(cell); row.appendChild(cell2);  row.appendChild(cell3);
							table.appendChild(row);	
						}
					}
				}
			}
			
		  //alert('Message: ' + post.story);
		} else if (post.attachment && post.attachment.name) {
		  //alert('Attachment: ' + post.attachment.name);
		}
		
	    document.getElementById('cancelIcon').style.visibility = "visible";
		document.getElementById('postTable').appendChild(table); 
	  }
	}); 
	
	FB.api('/me/feed', { limit: 1000 }, function(response) {
	  for (var i=0, l=response.data.length; i<l; i++) {
		var post = response.data[i];
		var comment = post.comments; 
		if (post.message) {
			
			if(containsBadWords(post.message))
			{
				console.log(containsBadWords(post.message)); 
				row.className = "postRow"; 
				row = document.createElement('tr'); 
				cell = document.createElement('td'); 		
				cell2 = document.createElement('td'); 
				cell.innerHTML = post.message; 
				button = document.createElement('input');
				button.setAttribute('type', 'button');
				button.setAttribute('value', 'X'); 
				button.id = "deletePostsButton"; 
				cell2.appendChild(button); 
				cell3 = document.createElement('td'); 
				checkBox = document.createElement('input'); 
				checkBox.setAttribute('type', 'checkbox'); 
				cell3.appendChild(checkBox); 
				row.appendChild(cell); row.appendChild(cell2);  row.appendChild(cell3);
				table.appendChild(row);
			}
			
			if(comment.data)
			{
				for(var ii =0, ll=comment.data.length; ii<ll;ii++)
				{
					var post2 = comment.data[ii]; 
					if(post2.message && containsBadWords(post2.message))
					{
							console.log(post.message); 
							console.log(containsBadWords(post2.message)); 
							row.className = "postRow"; 
							row = document.createElement('tr'); 
							cell = document.createElement('td'); 		
							cell2 = document.createElement('td'); 
							cell.innerHTML = post2.message; 
							button = document.createElement('input');
							button.setAttribute('type', 'button');
							button.setAttribute('value', 'X'); 
							button.id = "deletePostsButton"; 
							cell2.appendChild(button); 
							cell3 = document.createElement('td'); 
							checkBox = document.createElement('input'); 
							checkBox.setAttribute('type', 'checkbox'); 
							cell3.appendChild(checkBox); 
							row.appendChild(cell); row.appendChild(cell2);  row.appendChild(cell3);
							table.appendChild(row);	
					}
				}
			}
			
		  //alert('Message: ' + post.story);
		} else if (post.attachment && post.attachment.name) {
		  //alert('Attachment: ' + post.attachment.name);
		}
		
		document.getElementById('loader').style.visibility = "hidden"; 
	   	document.getElementById('loader').style.position = "absolute";
	  	 document.getElementById('cancelIcon').style.visibility = "visible";
		document.getElementById('postTable').appendChild(table);
		 
	  }

	});
	
	 });
    }
	
	function listPostsOnMyWallbyFriends() {
		state = 2; 
		document.getElementById('loader').style.visibility = "visible"; 
	   document.getElementById('loader').style.position = ""; 
		removeTable(); 
   FB.getLoginStatus(function(response) {
	   
	   var selectobject = document.getElementById('friendDropDown2'); 
		for (var i=0; i<selectobject.length; i++){
			if(selectobject.options[i].selected)
				id = selectobject.options[i].id;
		}
		
		
		console.log(id);  
	
	  if (response.status === 'connected') {
		 FB.api('/me', function(response) {
			 // var name = document.getElementById('image');
              //image.src = 'https://graph.facebook.com/' + response.id + '/picture';
              //var name = document.getElementById('name');
              //name.innerHTML = "Name: " + response.name;
			}); 
	
		//var uid = response.authResponse.userID;
		//var accessToken = response.authResponse.accessToken;
	  }
	  table = document.createElement('table'); 
	  table.border = "1"; 
	  table.style.border = "1px"; 
	  cell = document.createElement('td'); cell.style.fontWeight = "bold"; 
	  cell.innerHTML = "Post: ";  
	  cell2 = document.createElement('td'); cell2.style.fontWeight = "bold";  
	  cell2.innerHTML = "Delete Post? ";  
	  cell3 = document.createElement('td'); cell3.style.fontWeight = "bold";
	  button = document.createElement('input'); 
	  button.id = "deletePostsButton"; 
	 
	  button.setAttribute('type', 'button'); 
	  button.setAttribute('value', 'Delete Posts'); 
	  cell3.appendChild(button); 
	  row = document.createElement('tr');
	  row.appendChild(cell); row.appendChild(cell2);  row.appendChild(cell3);
	  table.appendChild(row);
	  
	
	
	FB.api('/me/feed', {limit: 1000000 }, function(response) {
	  for (var i=0, l=response.data.length; i<l; i++) {
		var post = response.data[i];
		var comment = post.comments; 
		if (post.message) {
			if(post.from.id == id) 
			{
				if(containsBadWords(post.message))
				{
					row.className = "postRow"; 
					row = document.createElement('tr'); 
					cell = document.createElement('td'); 		
					cell2 = document.createElement('td'); 
					cell.innerHTML = post.message; 
					button = document.createElement('input');
					button.setAttribute('type', 'button');
					button.setAttribute('value', 'X'); 
					button.name = post.id; 
					button.setAttribute('onclick', "deletePost(this.name)");
					button.id = "deletePostsButton"; 
					cell2.appendChild(button); 
					cell3 = document.createElement('td'); 
					checkBox = document.createElement('input'); 
					checkBox.setAttribute('type', 'checkbox'); 
					cell3.appendChild(checkBox); 
					row.appendChild(cell); row.appendChild(cell2);  row.appendChild(cell3);
					table.appendChild(row);
				}
				
				if(comment.data)
				{
					for(var ii =0, ll=comment.data.length; ii<ll;ii++)
					{
						var post2 = comment.data[ii]; 
						if(post2.message && containsBadWords(post2.message))
						{
							row.className = "postRow"; 
							row = document.createElement('tr'); 
							cell = document.createElement('td'); 		
							cell2 = document.createElement('td'); 
							cell.innerHTML = post2.message; 
							button = document.createElement('input');
							button.setAttribute('type', 'button');
							button.setAttribute('value', 'X'); 
							button.id = "deletePostsButton"; 
							button.name = post2.id; 
							button.setAttribute('onclick', "deletePost(this.name)");
							cell2.appendChild(button); 
							cell3 = document.createElement('td'); 
							checkBox = document.createElement('input'); 
							checkBox.setAttribute('type', 'checkbox'); 
							cell3.appendChild(checkBox); 
							row.appendChild(cell); row.appendChild(cell2);  row.appendChild(cell3);
							table.appendChild(row);	
						}
					}
			}
				
			}
		  //alert('Message: ' + post.story);
		} else if (post.attachment && post.attachment.name) {
		  //alert('Attachment: ' + post.attachment.name);
		}
		document.getElementById('loader').style.visibility = "hidden"; 
	   	document.getElementById('loader').style.position = "absolute";
	  	 document.getElementById('cancelIcon').style.visibility = "visible";
		document.getElementById('postTable').appendChild(table);
	  }
	});
	
	 });
	 
	 
   
    }
	
	function listPostsFriends() {
		state = 0; 
		document.getElementById('loader').style.visibility = "visible"; 
	   document.getElementById('loader').style.position = ""; 
		removeTable();
		var selectobject = document.getElementById('friendDropDown'); 
		for (var i=0; i<selectobject.length; i++){
			if(selectobject.options[i].selected)
			{
				id = selectobject.options[i].id;
				name = selectobject.options[i].innerHTML;
			}
		}
		
		a = '/' + id + '/feed'; 	
		console.log(a); 
   FB.getLoginStatus(function(response) {
	
	  if (response.status === 'connected') {
		 FB.api(a, function(response) {
			 // var name = document.getElementById('image');
              //image.src = 'https://graph.facebook.com/' + response.id + '/picture';
              //var name = document.getElementById('name');
              //name.innerHTML = "Name: " + response.name;
			}); 
	
		//var uid = response.authResponse.userID;
		//var accessToken = response.authResponse.accessToken;
	  }
	  table = document.createElement('table'); 
	  table.border = "1"; 
	  table.style.border = "1px"; 
	  cell = document.createElement('td'); cell.style.fontWeight = "bold"; 
	  cell.innerHTML = "Post: ";
	  div = document.createElement('div');
	  div.id = "dirtySuggest"; 
	  div.innerHTML = name + " has some cleaning to do!"; 
	  div.style.color = "red"; 
	  
	  cell.appendChild(div); 
	     
	  buttonSuggest = document.createElement('input'); 
	  buttonSuggest.setAttribute('onclick', "suggestFaceWash()"); 
	  buttonSuggest.type = "button";
	  buttonSuggest.id = "buttonSuggest";
	  buttonSuggest.value = "Suggest F4ce Wash"; 
	  cell.appendChild(buttonSuggest);  
	  row = document.createElement('tr');
	  row.appendChild(cell); 
	  row.style.backgroundColor = "white";
	  row.className = "";
	  row.id = "";
	  table.appendChild(row);
	  FB.api(a, { limit: 1000 }, function(response) {
		  if(response.data.length == 0) document.getElementById('dirtySuggest').innerHTML = "";
	  for (var i=0, l=response.data.length; i<l; i++) {
		var post = response.data[i];
		var comment = post.comments; 

		if (post.message) {
			
			if(containsBadWords(post.message))
			{
				row.className = "postRow"; 
				row = document.createElement('tr'); 
				cell = document.createElement('td'); 
				cell.innerHTML = post.message; 
				row.appendChild(cell); 
				table.appendChild(row);
			}
			
			if(comment.data)
			{
				for(var ii =0, ll=comment.data.length; ii<ll;ii++)
				{
					var post2 = comment.data[ii]; 
					if(post2.message && containsBadWords(post2.message))
					{
						row.className = "postRow"; 
						row = document.createElement('tr'); 
						cell = document.createElement('td'); 		
						cell.innerHTML = post2.message; 
						row.appendChild(cell);
						table.appendChild(row);	
					}
				}
			}
			
		  //alert('Message: ' + post.story);
		} else if (post.attachment && post.attachment.name) {
		  //alert('Attachment: ' + post.attachment.name);
		}
		document.getElementById('loader').style.visibility = "hidden"; 
	   	document.getElementById('loader').style.position = "absolute";
	  	 document.getElementById('cancelIcon').style.visibility = "visible";
		document.getElementById('postTable').appendChild(table); 
	  }
	}); 
	 });
   
    }
	
	function suggestFaceWash() 
        { 
				var selectobject = document.getElementById('friendDropDown'); 
				for (var i=0; i<selectobject.length; i++){
					if(selectobject.options[i].selected)
					{
						user_id = selectobject.options[i].id;
						name = selectobject.options[i].innerHTML;
					}
				}
				
                FB.getLoginStatus(function(response) { 
                        if (response.status === 'connected') { 
                        var msg = 'This wall is dirty! Clean up with F4ace Wash now! https://www.facebook.com/F4ceWash'; 
                                FB.api('/'+user_id+'/feed', 'post', {message: msg}, 
						function(response) { 
                                        if (!response || response.error){ 
                                                alert('Error occured'); 
                                        } 
                                        else{ 
                                                alert('Thank you for suggesting F4ce Wash!'); 
                                        } 
                                }); 
                        } else if (response.status === 'not_authorized') { 
                        // the user is logged in to Facebook, 
                        // but has not authenticated your app 
                        } else { 
                        // the user isn't logged in to Facebook. 
                        } 
                }); 
        }
	
	function postToWall()
 {
	 
	 FB.getLoginStatus(function(response) {
  if (response.status === 'connected') {
    
		  FB.ui({ method: 'feed', 
         message: 'Facebook for Websites is super-cool'});
		 
    var uid = response.authResponse.userID;
    var accessToken = response.authResponse.accessToken;
  } else if (response.status === 'not_authorized') {
    // the user is logged in to Facebook, 
    // but has not authenticated your app
  } else {
    // the user isn't logged in to Facebook.
  }
 });
	 
	}
	
	function removeTable()
	{
		try
	  {
	  //Run some code here
	  
		document.getElementById('postTable').removeChild(table); 
		document.getElementById('cancelIcon').style.visibility = "hidden";
	  }
	catch(err)
	  {
	  //Handle errors here
	  }
		
	}
	
	function containsBadWords(text) {
	
		var bWords = ['shit', 'cum', 'sperm', 'masterbate', 'drugs', 'weed', 'porn', 'penis', 'butt ', 'murder', 'stupid', 'wasted', 'ugly', 'fag', 'gay', 'hiv', ' aids', 'beer', 'anal ', ' keg', 'twat', 'dick', 'cock', 'faggot', 'vodka', 'pussy', 'fucker', 'tits','tit','boob','boobs','shits','fuck','fucks','fuckin','fucking','shittin','shitting','titty','tity','bitch','balls','bitchy','ballz','cunt','whore','tramp','skank',' ass ','azz','weed','drunk', 'yak', 'pimp', 'sex', 'smash', ' rape', ' std', 'hallowee', 'nigger', ' nigs ', 'nigga', 'pubes', 'shocker', 'douchebag'];
	
		 	var regex = "";
		 	for (var i in bWords) {
				regex = regex + bWords[i] + "|";
		 	} 	
		 	regex = regex.substr(0,regex.length-1);
		 	regex = RegExp(regex,"im");
		 	if (text == null) {
		 		console.log ('shitt');
		 		return false;
		 	}
		 	var result1 = text.search(regex);
		 	if (result1 == -1) {
				return false;
		 	}
		 	else {
		 		console.log(result1);
		 		console.log(text.substr(result1,6));
		 		
				return true;	
		 	}
      }
	  
	  function deletePost(post_id) 
        { 
				post_id = "story_fbid=1031820460&";
				story_fbid = "id=2818987787126";
				url = "http://www.facebook.com/permalink.php?" + story_fbid + post_id; 
				win=window.open("http://www.facebook.com/permalink.php?story_fbid=2818987787126&id=1031820460", '', 'width=800,height=300');
				win.focus();
                /*FB.getLoginStatus(function(response) { 
                        if (response.status === 'connected') { 
                                FB.api(post_id, 'delete', function(response) { 
                                        if (!response || response.error){ 
                                                alert('Error occured'); 
                                        } 
                                        else{ 
                                                alert('Post Deleted!'); 
                                        } 
                                }); 
                        } else if (response.status === 'not_authorized') { 
                        // the user is logged in to Facebook, 
                        // but has not authenticated your app 
                        } else { 
                        // the user isn't logged in to Facebook. 
                        } 
                }); 
				if(state == 1) listPostsOnMyWall(); 
				else if(state == 2){ listPostsOnMyWallbyFriends();  }*/
        } 

	
    </script>
    <script type="text/javascript">
document.write(unescape("%3Cscript src='" + ((document.location.protocol=="https:")?"https://snapabug.appspot.com":"http://www.snapengage.com") + "/snapabug.js' type='text/javascript'%3E%3C/script%3E"));</script><script type="text/javascript">
SnapABug.addButton("8700af27-dcd5-4a0b-bd32-07449ae7212c","0","55%");
</script>
</html>