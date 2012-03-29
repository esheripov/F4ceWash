//// JavaScript Document for freshconnectionbrand main page
	
	var imageID = 0; 
	
	function sendOrderConfirmations()
	{
		document.getElementById("navlinks").style.visibility = "hidden";
		document.getElementById("fcbwriting").style.visibility = "hidden";
	}
	function hideToolsOnBodyClick(tag)
	{
		alert(tag.style.id); 
		if(tag.id != "loginWelcomeLabel")
		{
			document.getElementById("tools").style.visibility = "hidden"; 
		}
	}
	function showTools()
	{
		document.getElementById("loginWelcomeLabel").style.visibility = "hidden";
		if(document.getElementById("tools").style.visibility == 'visible')
		{
			hideTools(); 	
			return false; 
		}
		document.getElementById("tools").style.visibility = "visible"
		return false; 	
	}
	function hideTools()
	{
		document.getElementById("tools").style.visibility = "hidden"; 
	}
	function hideTag(tag)
	{
		tag.style.visibility = "hidden"; 	
	}
	function showTog(tag)
	{
		tag.style.visibility = "visible"; 	
	}
	function showUserAccountInfo()
	{
		document.getElementById("navlinks").style.visibility = "hidden";
		document.getElementById("userinfo").style.visibility = "visible";
	}
	function cancelUserAccountDetails()
	{
		document.getElementById("userinfo").style.visibility = "hidden";
		document.getElementById("fcbwriting").style.visibility = "visible";
		document.getElementById("navlinks").style.visibility = "visible";
	}
	function cancelUserRegistration()
	{
		document.getElementById("regform").style.visibility = "hidden";
		document.getElementById("fcbwriting").style.visibility = "visible";
		document.getElementById("navlinks").style.visibility = "visible";
		
		document.getElementById("regform").style.overflow = "";
		document.getElementById("regFormErrorLabel").style.position = "absolute";
        document.getElementById("regFormErrorLabel").style.visibility = "hidden";
	}
	function showUserRegistrationFormIndex()
	{
		document.getElementById("regform").style.visibility = "visible";
		document.getElementById("navlinks").style.visibility = "hidden";
		return false;  
	}
	function welcomeAdapt()
	{
		if(BrowserDetect.browser != "Firefox")
		{
			document.getElementById("tweet").style.top = "2px"; 
		}
	}
	var BrowserDetect = {
	init: function () {
		this.browser = this.searchString(this.dataBrowser) || "An unknown browser";
		this.version = this.searchVersion(navigator.userAgent)
			|| this.searchVersion(navigator.appVersion)
			|| "an unknown version";
		this.OS = this.searchString(this.dataOS) || "an unknown OS";
	},
	searchString: function (data) {
		for (var i=0;i<data.length;i++)	{
			var dataString = data[i].string;
			var dataProp = data[i].prop;
			this.versionSearchString = data[i].versionSearch || data[i].identity;
			if (dataString) {
				if (dataString.indexOf(data[i].subString) != -1)
					return data[i].identity;
			}
			else if (dataProp)
				return data[i].identity;
		}
	},
	searchVersion: function (dataString) {
		var index = dataString.indexOf(this.versionSearchString);
		if (index == -1) return;
		return parseFloat(dataString.substring(index+this.versionSearchString.length+1));
	},
	dataBrowser: [
		{
			string: navigator.userAgent,
			subString: "Chrome",
			identity: "Chrome"
		},
		{ 	string: navigator.userAgent,
			subString: "OmniWeb",
			versionSearch: "OmniWeb/",
			identity: "OmniWeb"
		},
		{
			string: navigator.vendor,
			subString: "Apple",
			identity: "Safari",
			versionSearch: "Version"
		},
		{
			prop: window.opera,
			identity: "Opera",
			versionSearch: "Version"
		},
		{
			string: navigator.vendor,
			subString: "iCab",
			identity: "iCab"
		},
		{
			string: navigator.vendor,
			subString: "KDE",
			identity: "Konqueror"
		},
		{
			string: navigator.userAgent,
			subString: "Firefox",
			identity: "Firefox"
		},
		{
			string: navigator.vendor,
			subString: "Camino",
			identity: "Camino"
		},
		{		// for newer Netscapes (6+)
			string: navigator.userAgent,
			subString: "Netscape",
			identity: "Netscape"
		},
		{
			string: navigator.userAgent,
			subString: "MSIE",
			identity: "Explorer",
			versionSearch: "MSIE"
		},
		{
			string: navigator.userAgent,
			subString: "Gecko",
			identity: "Mozilla",
			versionSearch: "rv"
		},
		{ 		// for older Netscapes (4-)
			string: navigator.userAgent,
			subString: "Mozilla",
			identity: "Netscape",
			versionSearch: "Mozilla"
		}
	],
	dataOS : [
		{
			string: navigator.platform,
			subString: "Win",
			identity: "Windows"
		},
		{
			string: navigator.platform,
			subString: "Mac",
			identity: "Mac"
		},
		{
			   string: navigator.userAgent,
			   subString: "iPhone",
			   identity: "iPhone/iPod"
	    },
		{
			string: navigator.platform,
			subString: "Linux",
			identity: "Linux"
		}
	]

};
BrowserDetect.init();
	
	
	function buildWelcomePage()
    {
		welcomeAdapt();  
   		adapt();
    }
	function displayContactForm(contact)
	{
		document.getElementById('wrapper').style.visibility = 'hidden'; 
		document.getElementById('reg').style.visibility = 'hidden'; 
		document.getElementById('login').style.visibility = 'hidden'; 
		contact.style.visibility = 'visible'; 	
	}
	function hideContactForm(contact, slider)
	{
		slider.style.visibility = 'visible'; 
		contact.style.visibility = 'hidden';
	}
	function displayLoginForm(slider, login)
	{
		slider.style.visibility = 'hidden'; 
		login.style.visibility = 'visible';
	}
	function hideLoginForm(slider, login)
	{
		slider.style.visibility = 'visible'; 
		login.style.visibility = 'hidden';
	}
	function showRegForm(reg)
	{
		reg.style.visibility = 'visible'; 
	}
	
	function hideRegForm(reg)
	{
		reg.style.visibility = 'hidden'; 
	}
	
	function skipAdminRegistration()
	{
		document.location = "index.php"; 	
	}
	
	function checkPassword(p1, p2)
    { 
    	if (p1.value != p2.value) {
        	p2.setCustomValidity('passwords do not match');
    	}else if (p1.value.length < 7){
        	p1.setCustomValidity('password must be 7 characters long');
    	}else
		{
			p1.setCustomValidity(''); 
			p2.setCustomValidity('');
		}
    }
	function indexNavWelcome()
	{
		document.location = "welcome.php"; 	
	}
	function checkEmail(e)
	{
		if(e.value.match(".*@*.myfreshconnection.com"))
		{
        	e.setCustomValidity('');
		}
		else e.setCustomValidity('email must have example@myfreshconnection.com format');
	}
	
	function getUrlVars()
	{
		return;
		if(!window.location.href.indexOf('?')) return; 
		var vars = [], hash;
		var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
		for(var i = 0; i < hashes.length; i++)
		{
			hash = hashes[i].split('=');
			vars.push(hash[0]);
			vars[hash[0]] = hash[1];
		}
		return vars;
	}
	
	function checkAdminRegForm()
	{
		var input = document.getElementsByTagName("input"); 
		for(i = 0; i < input.length - 1; i++)
		{
			if(!input[i].value)
			{
				input[i].focus(); 
				document.getElementById("errMsg").innerHTML = "Please fill in all fields!"; 
				document.getElementById("errMsg").style.visibility = "visible"; 
				return false; 
			}
			else if(input[i].name == "pwd" && input[i].value != input[i + 1].value)
			{
				document.getElementById("errMsg").innerHTML  = "Passwords must match!"; 
				document.getElementById("errMsg").style.visibility = "visible"; 
				return false; 
			}
			else if(input[i].name == "pwd" && input[i].value.length < 7)
			{
				document.getElementById("errMsg").innerHTML = "Password must be at least 7 characters long!";
				document.getElementById("errMsg").style.visibility = "visible"; 
				return false;  
			}
		}
		document.getElementById("errMsg").style.visibility = "hidden"; 
		return true;  
	}

	function opacityFilter2(obj) 
 	{
		obj.style.opacity = ".5";
 	}
	
	function opacityFilter(obj) 
 	{
		if(document.getElementById("userinfo").style.visibility == "visible" || document.getElementById("regform").style.visibility == "visible" || 
		document.getElementById("tools").style.visibility == "visible") return; 
		obj.style.opacity = ".2";
 	}
	
	function opacityFilterSocial(obj) 
 	{
		obj.style.opacity = "1";
		obj.style.top = "1px"; 
 	}
	
	function opacityFilterSocialOut(obj) 
 	{
		obj.style.opacity = ".5";
		obj.style.top = "3px"; 
 	}
	
  	function opacityFilterOut(obj) 
 	{
		obj.style.opacity = "1"; 
 	}
	
	(function(d, s, id) 
	{
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));

function logoutAdmin()
{
	document.location.href = "../../protected/"; 
}

  var imageID=0;
  var time=200; 

 function navSocialNetwork(source)
 {
	 if(source.getAttribute("id") == "twitter")
	 {
		 window.location = "http://twitter.com/#!/myfreshconnect";
	 }
	 else if(source.getAttribute("id") == "facebook")
	 {
		 window.location = "http://www.facebook.com/FreshConnectionBrand"; 
	 }
	 else if(source.getAttribute("id") == "linkedin")
	 {
		 window.location = "http://www.linkedin.com/company/fresh-connection-brand"; 
	 }
	 else
	 {
		 window.location = "mailto:staff@myfreshconnection.com";
	 }
	 
 }
	
  
 function mainLogoOpacityFilterHover() 
 {
	document.getElementById("mainLogoHolder").style.opacity = ".2"; 
 }
  function mainLogoOpacityFilterHoverOut() 
 {
	document.getElementById("mainLogoHolder").style.opacity = "1"; 
 }
  
  function mainLogoOpacityHover(image) 
  {
	  image.style.opacity = ".2"; 
  }
   function mainLogoOpacityHoverOut(image) 
  {
	  image.style.opacity = "1"; 
  }

   function socialNetworkHover(socialNetwork)
   {
	   (document.getElementsByName("connect"))[0].style.visibility = "visible";
	   (document.getElementsByName("connect"))[1].style.visibility = "visible"; 
	   (document.getElementsByName("connect"))[2].style.visibility = "visible"; 
	   (document.getElementsByName("connect"))[3].style.visibility = "visible"; 
	   socialNetwork.style.opacity = ".2";
	   
   }
   
   function socialNetworkHoverOut(socialNetwork)
   {
	   //(document.getElementsByName("connect"))[0].style.visibility = "hidden"; 
	   //(document.getElementsByName("connect"))[1].style.visibility = "hidden"; 
	   //(document.getElementsByName("connect"))[2].style.visibility = "hidden"; 
	   //(document.getElementsByName("connect"))[3].style.visibility = "hidden"; 
	   socialNetwork.style.opacity = "1";
   }
   
 function adapt()
  {
	  /* Adjust slide show */
	  myImageTableWidth = (document.getElementById("myImageTable")).style.width; 
	  myImageTableWidth = myImageTableWidth.replace("px", ""); 
	  pageWidth = document.width; 
	  
	  if(myImageTableWidth < pageWidth)
	  {
		  currOffset = (document.getElementById("myImageTable")).style.left; 
		  leftOffset = (pageWidth - myImageTableWidth)/2; 
	      (document.getElementById("myImageTable")).style.left = leftOffset + "px";  
	  }

	  
	  /* Adjust footer */
	  footerWidth = "960px"; 
	  footerWidth = footerWidth.replace("px", ""); 
	  pageWidth = document.width; 
	  if(footerWidth < pageWidth)
	  {
		  currOffset = (document.getElementById("footer")).style.left; 
		  leftOffset = (pageWidth - footerWidth)/2; 
	      (document.getElementById("footer")).style.left = leftOffset + "px";   
	  }
  }
 
 function adaptLogin()
 {  
	  /* Adjust footer */
	  footerWidth = "960px"; 
	  footerWidth = footerWidth.replace("px", ""); 
	  pageWidth = document.width; 
	  if(footerWidth < pageWidth)
	  {
		  currOffset = (document.getElementById("footer-nav")).style.left; 
		  leftOffset = (pageWidth - footerWidth)/2; 
	      (document.getElementById("footer-nav")).style.left = leftOffset + "px";   
	  }
	   
	  (document.getElementById("login")).style.left = leftOffset + "px";  
	 
 }
  /*
  function navHover(navButton)
  {
	navButton.childNodes[0].style.color = "red"; 
	
	var navButtonInnerText = navButton.childNodes[0].innerHTML; 
	if(navButtonInnerText == "CONNECT")
	{
		(document.getElementsByName("connect"))[0].style.visibility = "visible"; 
		(document.getElementsByName("connect"))[1].style.visibility = "visible"; 
		(document.getElementsByName("connect"))[2].style.visibility = "visible"; 
		(document.getElementsByName("connect"))[3].style.visibility = "visible";
	} 
  }
  function navHoverConnect(navButton)
  {
	  	(document.getElementsByName("connect"))[0].style.visibility = "visible"; 
		(document.getElementsByName("connect"))[1].style.visibility = "visible"; 
		(document.getElementsByName("connect"))[2].style.visibility = "visible"; 
		(document.getElementsByName("connect"))[3].style.visibility = "visible";
  }
  function navHoverConnectOut(navButton)
  {
	  	(document.getElementsByName("connect"))[0].style.visibility = "hidden"; 
		(document.getElementsByName("connect"))[1].style.visibility = "hidden"; 
		(document.getElementsByName("connect"))[2].style.visibility = "hidden"; 
		(document.getElementsByName("connect"))[3].style.visibility = "hidden";
  }
  function navOut(navButton)
  {
	navButton.childNodes[0].style.color = "black";  
	
	var navButtonInnerText = navButton.childNodes[0].innerHTML; 
	if(navButtonInnerText == "CONNECT")
	{
		(document.getElementsByName("connect"))[0].style.visibility = "hidden"; 
		(document.getElementsByName("connect"))[1].style.visibility = "hidden"; 
		(document.getElementsByName("connect"))[2].style.visibility = "hidden";  
		(document.getElementsByName("connect"))[3].style.visibility = "hidden";
	} 
  }*/
  
  var bgImages = new Array(3);	
  if (document.images) 
  {
    bgImages[0] = new Image();
    bgImages[0].src = "images/IMG_0527.JPG";
  }
  
  function changeImage(every_seconds)
  {    
    document.body.background = bgImages[0].src;        	
/*
		if(imageID == 0 && document.body)
		{ 
			document.body.background = bgImages[imageID].src;        	
			imageID++;
    	}	
		else if(imageID == 1)
		{
			document.body.background = bgImages[imageID].src;        	
        	imageID = 0;
    	}
    //call same function again for x of seconds
    setTimeout("changeImage("+every_seconds+")",((every_seconds)*time));*/
  }