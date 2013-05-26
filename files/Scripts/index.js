function OnReadyIndex() {

	$('#rightArrow').html('<a href="#" class="font35 bold" id="rightArrowLink">&#62;</a>');	
	$('#leftArrow').html('<a href="#" class="font35 bold" id="leftArrowLink">&#60;</a>');
	
	$('#hiddenPartNumber').val(1);
	
	$('#part1more').addClass('hidden');
	$('#part1').addClass('hidden');
	
	$('#part1').slideDown('slow');
	
	ShowPart1();

	$('#nav1').click(function (e) {
		e.preventDefault();
		ShowPart1();
	});
	$('#nav2').click(function (e) {
		e.preventDefault();
		ShowPart2();
	});
	$('#nav3').click(function (e) {
		e.preventDefault();
		ShowPart3();
	});
	$('#nav4').click(function (e) {
		e.preventDefault();
		ShowPart4();
	});
	$('#rightArrowLink').click(function (e) {
		e.preventDefault();
		ChangeContentPart(2);//right
	});
	$('#leftArrowLink').click(function (e) {
		e.preventDefault();
		ChangeContentPart(1);//left
	});
};

function ShowPart1(){
	ChangeNavigationColor(1);
	
	$('#part1').slideDown('slow');
	$('#part1more').slideUp('slow');
	
	$('#leftArrow').addClass('hidden');
	$('#rightArrow').removeClass('hidden');
	
	$('#secondButton').addClass('lightButton');
	$('#secondButton').removeClass('lightSolidButton');
	
	$('#hiddenPartNumber').val('1');
	$('#imageDiv').html('<img id="accImg" src="Images/acc.png" alt="The accessible platform" height="300" width="489"></img>');
	$('#textUnderPic').html('The accessible platform');
	$('#accPlatform').html('The accessible platform');
	$('#text1more').html('With accessible environment Luwrain blind and visually-impaired persons '+
										'<br/>get one more way to be involved in the incredible world of information'+
										'<br/>technologies. Luwrain does not take a lot of time to study and aims to be'+ 
										'<br/>useful on laptops as well as on usual desktop computers. You can treat our'+
										'<br/>new idea as one more solution for everybody who needs reliable and'+ 
										'<br/>accessible companion for various types of work. The product is designed'+
										'<br/>as new platform for creating speech-enabled applications with set of'+ 
										'<br/>standard tools for easy web access, mail and news reading, etc.');
	$('#firstButton').html('<span><img id="downImg" src="Images/down.png" alt="" height="18" width="15"></img>TRY IT NOW</span>');
	$('#secondButton').html('<span>Read more</span>');
};
function ShowPart2(){
	ChangeNavigationColor(2);
	
	$('#part1').slideDown('slow');
	$('#part1more').slideUp('slow');
	
	$('#leftArrow').removeClass('hidden');
	$('#rightArrow').removeClass('hidden');
	
	$('#secondButton').addClass('lightButton');
	$('#secondButton').removeClass('lightSolidButton');
	
	$('#hiddenPartNumber').val('2');
	$('#imageDiv').html('<img id="textBasedImg" src="Images/textBased.png" alt="Text-based environment" height="162" width="532"></img>');
	$('#textUnderPic').html('Text-based environment');
	$('#accPlatform').html('Text-based environment');
	$('#text1more').html('Luwrain is a linux-based system with special type of user interface'+
										'<br/>constructed on Java technologies. In contrast with widely popular screen'+
										'<br/>reading solutions for graphical desktops which actually were designed for'+
										'<br/>control basically by mouse and other pointing devices, Luwrain follows'+
										'<br/>special conception offering representation of every working object from'+
										'<br/>scratch in text form. That means in Luwrain user will always spend'+ 
										'<br/>significantly less time than in an adapted GUI. We have created our'+ 
										'<br/>environment for people with active style of life who appreciate time'+ 
										'<br/>economy getting their job done.');
	$('#firstButton').html('<span>Read documentation</span>');
	$('#secondButton').html('<span>Read more</span>');
};
function ShowPart3(){
	ChangeNavigationColor(3);
	
	$('#part1').slideDown('slow');
	$('#part1more').slideUp('slow');
	
	$('#leftArrow').removeClass('hidden');
	$('#rightArrow').removeClass('hidden');
	
	$('#secondButton').addClass('lightButton');
	$('#secondButton').removeClass('lightSolidButton');
	
	$('#hiddenPartNumber').val('3');
	$('#imageDiv').html('<img id="javaImg" src="Images/java.png" alt="Java on Linux" height="199" width="332"></img>');
	$('#textUnderPic').html('Java on Linux');
	$('#accPlatform').html('Java on Linux');
	$('#text1more').html('In Luwrain Java user space gathers together a number of system services'+
										'<br/>taken for providing flexible core and good level of compatibility. Information'+
										'<br/>exchanging between them is performed mostly through D-Bus activity. It'+
										'<br/>brings to a user information about network structure from Network Manager'+
										'<br/>and transmits commands to speech server purposed for Text-To-Speech'+
										'<br/>engines manipulating. Personal user data can be stored in OpenLDAP or'+ 
										'<br/>in any choice of SQL server which has proper JDBC interface. For low-vision'+ 
										'<br/>users Luwrain opens full-screen window with all corresponding textual'+ 
										'<br/>data written in contrast colours. That window is drawn by X.org server'+
										'using special window manager created as a part of Luwrain project.');
	$('#firstButton').html('<span>Our community</span>');
	$('#secondButton').html('<span>Read more</span>');
};
function ShowPart4(){
	ChangeNavigationColor(4);
	
	$('#part1').slideDown('slow');
	$('#part1more').slideUp('slow');
	
	$('#leftArrow').removeClass('hidden');
	$('#rightArrow').addClass('hidden');
	
	$('#secondButton').addClass('lightButton');
	$('#secondButton').removeClass('lightSolidButton');
	
	$('#hiddenPartNumber').val('4');
	$('#imageDiv').html('<img id="fossImg" src="Images/toss.png" alt="toss" height="229" width="254"></img>');
	$('#textUnderPic').html('FOSS');
	$('#accPlatform').html('FOSS');
	$('#text1more').html('Luwrain is a completely Free Software project, no fee is implied, no restrictions'+
										'<br/>of using and distribution are present, except of cases explicitly violating'+
										'<br/>the terms of GNU Public License ver. 3 as it was published by Free'+
										'<br/>Software Foundation. However, money donations are still required to help'+
										'<br/>us present our product wider over the world and introduce it to related'+
										'<br/>social and distribution organizations. The team of developers hopes'+ 
										'<br/>Luwrain can increase the integration of disabled persons into social life.');
	$('#firstButton').html('<span>Be a partner</span>');
	$('#secondButton').html('<span>Read more</span>');
};
function ChangeNavigationColor(selected){
	$('#nav1').addClass('lightGrey');
	$('#nav1').removeClass('blueColor');
	$('#nav2').addClass('lightGrey');
	$('#nav2').removeClass('blueColor');
	$('#nav3').addClass('lightGrey');
	$('#nav3').removeClass('blueColor');
	$('#nav4').addClass('lightGrey');
	$('#nav4').removeClass('blueColor');
	$('#nav'+selected).addClass('blueColor');
	$('#nav'+selected).removeClass('lightGrey');
}
function SecondButtonOnClick() {
	$('#part1').slideUp('slow');
	$('#part1more').slideDown('slow');
	$('#secondButton').html('<span>Next</span>');
	switch ($('#hiddenPartNumber').val()) {
		case "1": 
			//$('#hiddenPartNumber').val(10);
			break;
		case "2": 
			//$('#hiddenPartNumber').val(20);
			break;
		case "3": 
			//$('#hiddenPartNumber').val(30);
			break;
		case "4": 
			//$('#hiddenPartNumber').val(40);
			$('#secondButton').html('<span>Be a sponsor</span>');
			$('#secondButton').removeClass('lightButton');
			$('#secondButton').addClass('lightSolidButton');
			break;
	 }
};
function ChangeContentPart(direction) {
	switch (direction) {
		case 1: //left
			switch ($('#hiddenPartNumber').val()) {
				case "1": 
					break;
				case "2": 
					ShowPart1();
					break;
				case "3": 
					ShowPart2();
					break;
				case "4": 
					ShowPart3();
					break;
			 }
			break;
		case 2: //right
			switch ($('#hiddenPartNumber').val()) {
				case "1": 
					ShowPart2();
					break;
				case "2": 
					ShowPart3();
					break;
				case "3": 
					ShowPart4();
					break;
				case "4": 
					break;
			 }
			break;
	}
};