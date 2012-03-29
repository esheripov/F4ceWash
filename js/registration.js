// JavaScript Document

  var imageID=0;
  var time=200; 

  
  
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
 

  
  function buildPage()
  {
	adapt(); 
	changeImage(3);   
  }
  
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
  }
  
  function changeImage(every_seconds)
  {
    //change the image
    if(!imageID)
	{
    	imageID++;
    }
    else
	{
		if(imageID==0)
		{ 
			time = 1500; 
			(document.getElementById("myImageTable")).setAttribute("border", "1");
			document.getElementById("myImage").src="http://acsweb.ucsd.edu/~ebeddows/MyFreshConnection/SOCKET%C2%AELogo_Alternating_White_On_Black.jpg";
			(document.getElementById("myImage")).parentNode.setAttribute("bgcolor", "black");
			(document.getElementById("myImageCell")).setAttribute("bgcolor", "black");
			(document.getElementById("myImageCell")).style.height = "385px";
        	imageID++;
    	}	
		else
		{
			if(imageID==1)
			{
				time = 1500; 
				(document.getElementById("myImageTable")).setAttribute("border", "1");
				document.getElementById("myImage").src="http://acsweb.ucsd.edu/~ebeddows/MyFreshConnection/SOCKET%C2%AELogo_Alternating_White_On_Black.jpg";
				(document.getElementById("myImage")).parentNode.setAttribute("bgcolor", "black");
				(document.getElementById("myImageCell")).setAttribute("bgcolor", "black");
				(document.getElementById("myImageCell")).style.height = "385px";
	        	imageID++;
    		}
			else if(imageID==2)
			{
				time = 1500; 
				(document.getElementById("myImageTable")).setAttribute("border", "1");
				document.getElementById("myImage").src="http://acsweb.ucsd.edu/~ebeddows/MyFreshConnection/SOCKET_%C2%AE_Logo_Alternating_Black_On_White.jpg";
				(document.getElementById("myImage")).parentNode.setAttribute("bgcolor", "white");
				(document.getElementById("myImageCell")).setAttribute("bgcolor", "white");
				(document.getElementById("myImageCell")).style.height = "385px";
        		imageID=0;
    		}
		}		
	}
    //call same function again for x of seconds
    setTimeout("changeImage("+every_seconds+")",((every_seconds)*time));
  }