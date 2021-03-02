$(document).ready(function(){
	
    $("#iridium").click(function() {      
		//new Audio(baseUrl + audio[0]).play();          //play corresponding audio	
		 $("#progressbar_iridium").animate({width: '490px'}, 10000);
		  setInterval(function(){ $("#iridium").hide() }, 10000);
		  setInterval(function(){ $("#iridiumok").show() }, 10000);
		 new Audio(baseUrl + audio[0]).play(); 
		setInterval(function(){ $("#electromagneticrow").show() }, 10000); 
	});
	
	$("#electromagnetic").click(function() {      
		$("#progressbar_electromagnetic").animate({width: '490px'}, 10000);
		setInterval(function(){ $("#electromagnetic").hide() }, 10000);
		 setInterval(function(){ $("#electromagneticok").show() }, 10000);
		new Audio(baseUrl + audio[0]).play();          //play corresponding audio
		setInterval(function(){ $("#Heliumrow").show() }, 10000); 
	});
	
	
	$("#Helium").click(function() {      
		$("#progressbar_Helium").animate({width: '490px'}, 10000);
		 setInterval(function(){ $("#Helium").hide() }, 10000);
		 setInterval(function(){ $("#Heliumok").show() }, 10000);
		new Audio(baseUrl + audio[0]).play();          //play corresponding audio
		setInterval(function(){ $("#Argonrow").show() }, 10000); 
	});
	
		
	$("#Argon").click(function() {      
		$("#progressbar_Argon").animate({width: '490px'}, 10000);
		 setInterval(function(){ $("#Argon").hide() }, 10000);
		 setInterval(function(){ $("#Argonok").show() }, 10000);
		new Audio(baseUrl + audio[0]).play();          //play corresponding audio
		setInterval(function(){ $("#Magneticrow").show() }, 10000); 
	});
	
	$("#Magnetic").click(function() {      
		$("#progressbar_Magnetic").animate({width: '490px'}, 10000);
		 setInterval(function(){ $("#Magnetic").hide() }, 10000);
		 setInterval(function(){ $("#Magneticok").show() }, 10000);
		new Audio(baseUrl + audio[0]).play();          //play corresponding audio
		setInterval(function(){ $("#radiumrow").show() }, 10000); 
	});
	
	$("#radium").click(function() {      
		$("#progressbar_radium").animate({width: '490px'}, 10000);
		 setInterval(function(){ $("#radium").hide() }, 10000);
		 setInterval(function(){ $("#Radiumok").show() }, 10000);
		new Audio(baseUrl + audio[0]).play();          //play corresponding audio
		setInterval(function(){ $("#uraniumrow").show() }, 10000); 
	});
	
	$("#uranium").click(function() {      
		$("#progressbar_uranium").animate({width: '490px'}, 10000);
		 setInterval(function(){ $("#uranium").hide() }, 10000);
		 setInterval(function(){ $("#uraniumrok").show() }, 10000);
		new Audio(baseUrl + audio[0]).play();          //play corresponding audio
		setInterval(function(){ $("#Platinumrow").show() }, 10000); 
	});
	
	$("#Platinum").click(function() {      
		$("#progressbar_Platinum").animate({width: '490px'}, 10000);
		 setInterval(function(){ $("#Platinum").hide() }, 10000);
		 setInterval(function(){ $("#Platinumok").show() }, 10000);
		new Audio(baseUrl + audio[0]).play();          //play corresponding audio
		setInterval(function(){ $("#Radiationrow").show() }, 10000); 
	});
	

	$("#Radiation").click(function() {      
		$("#progressbar_Radiation").animate({width: '490px'}, 10000);
		 setInterval(function(){ $("#Radiation").hide() }, 10000);
		 setInterval(function(){ $("#Radiationok").show() }, 10000);
		new Audio(baseUrl + audio[0]).play();          //play corresponding audio
		setInterval(function(){ $("#lithiumrow").show() }, 10000); 
	});
	
	
	
	$("#lithium").click(function() {  	 
		$("#progressbar_lithium").animate({width: '490px'}, 10000);
		setInterval(function(){ $("#lithium").hide() }, 10000);
		 setInterval(function(){ $("#Lithiumok").show() }, 10000);
		new Audio(baseUrl + audio[0]).play();          //play corresponding audio
		setInterval(function(){ $("#Zeonrow").show() }, 10000); 
	});
	
	
	$("#Zeon").click(function() {  	 
		$("#progressbar_Zeon").animate({width: '490px'}, 10000);
		setInterval(function(){ $("#Zeon").hide() }, 10000);
		 setInterval(function(){ $("#Zeonok").show() }, 10000);
		new Audio(baseUrl + audio[0]).play();          //play corresponding audio
		setInterval(function(){ $("#result_show").show() }, 10000);  
	});
	
	
	
});
