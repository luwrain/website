function OnReadyIndex() {

	$('#rightArrow').html('<button href="#" class="font35 bold arial" id="rightArrowLink"></button>');	
	$('#leftArrow').html('<button href="#" class="font35 bold arial" id="leftArrowLink"></button>');
	
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
	$('#imageDiv').html('<img id="accImg" src="Images/acc.png" alt="The accessible platform" height="303" width="523"></img>');
	$('#textUnderPic').html('The accessible platform');
	$('#accPlatform').html('The accessible platform');
	$('#text1more').html('With accessible OS Luwrain the blind and visually-impaired persons '+
										'<br/>get the new way to be involved in the incredible world of information'+
										'<br/>technologies. Luwrain does not take a lot of time to study and aims to be'+ 
										'<br/>useful on laptops, as well as on usual desktop computers. You can treat our'+
										'<br/>new idea as one more solution for everybody, who needs a reliable and'+ 
										'<br/>accessible companion for various types of work. The product is designed'+
										'<br/>as the new platform for creating speech-enabled applications with set of'+ 
										'<br/>standard tools for easy web access, mail and news reading etc.');
	$('#firstButton').html('<img id="downImg" src="Images/down.png" alt="" height="18" width="15"></img><a href="/download/distr/?mode=normal&lang=en"><span>ISO-images</span></a>');
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
										'<br/>reading solutions for graphical desktops, which actually are designed for'+
										'<br/>a control basically through a mouse and other pointing devices, Luwrain follows'+
										'<br/>the special conception, offering representation of every working object'+
										'<br/>in the text form from scratch. That means, in Luwrain user will always spend'+ 
										'<br/>significantly less time than in an adapted GUI. We have created our'+ 
										'<br/>environment for people, who enjoy working effectively and appreciate'+ 
										'<br/>time economy.');
	$('#firstButton').html('<a href="/doc/about/?mode=normal&lang=en"><span>Our basic ideas</span></a>');
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
	$('#text1more').html('In Luwrain the Java user space covers a number of system services,'+
										'<br/>which are able to~provide a flexible core and good level of compatibility. The information'+
										'<br/>exchanging between them is performed mostly through a D-Bus activity. It'+
										'<br/>brings to user the information about network structure from Network Manager'+
										'<br/>and transmits commands to a speech server, purposed for control over a set'+
										'<br/>of Text-To-Speech engines. The personal user data can be stored in OpenLDAP or'+ 
										'<br/>in any choice of the SQL server which has the proper JDBC interface. For low-vision'+ 
										'<br/>users Luwrain opens the full-screen window with all corresponding textual'+ 
										'<br/>data written in contrast colours. That window is drawn by X.org server'+
										'<br/>using special window manager, created as a part of Luwrain project.');
	$('#firstButton').html('<a href="/doc/devel/?mode=normal&lang=en"><span>For developers</span></a>');
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
										'<br/>the terms of the GNU Public License ver. 3, as it was published by the Free'+
										'<br/>Software Foundation. However, money donations are still required to help'+
										'<br/>us present our product widely over the world and introduce it to related'+
										'<br/>social and distribution organizations. The team of developers hopes'+ 
										'<br/>that Luwrain can increase the integration of disabled persons into social life.');
	$('#firstButton').html('<a href="/doc/partners/?mode=normal&lang=en"><span>Be a partner</span></a>');
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
    var partNumber = $('#hiddenPartNumber').val();
    if(partNumber == 1 || partNumber == 2 || partNumber == 3 ||
       partNumber == 4) {
	$('#part1').slideUp('slow');
	$('#part1more').slideDown('slow');
	$('#secondButton').html('<span>Next</span>');
	switch (partNumber) {
	case "1": 
	    $('#hiddenPartNumber').val('12');
	    break;
	case "2":
	    $('#hiddenPartNumber').val('22');
	    break;
	case "3":
	    $('#hiddenPartNumber').val('32');
	    break;
	case "4": 
	    $('#hiddenPartNumber').val('42');
	    $('#secondButton').html('<a href="/doc/sponsors/?mode=normal&lang=en"><span>Be a sponsor</span></a>');
	    $('#secondButton').removeClass('lightButton');
	    $('#secondButton').addClass('lightSolidButton');
	    break;
	}
	return;
    }
    switch (partNumber) {
    case "12": 
	ShowPart2();
	break;
    case "22":
	ShowPart3();
	break;
    case "32":
	ShowPart4();
	break;
    case "4":
	break;
    }
};

function ChangeContentPart(direction) {
    switch (direction) {
    case 1: //left
	switch ($('#hiddenPartNumber').val()) {
	case "1": 
	case "12": 
	    break;
	case "2": 
	case "22": 
	    ShowPart1();
	    break;
	case "3": 
	case "32": 
	    ShowPart2();
	    break;
	case "4": 
	case "42": 
	    ShowPart3();
	    break;
	}
	break;
    case 2: //right
	switch ($('#hiddenPartNumber').val()) {
	case "1":
	case "12":
	    ShowPart2();
	    break;
	case "2":
	case "22":
	    ShowPart3();
	    break;
	case "3":
	case "32":
	    ShowPart4();
	    break;
	case "4":
	case "42":
	    break;
	}
	break;
    }
};
