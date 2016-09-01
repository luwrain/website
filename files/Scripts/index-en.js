function OnReadyIndex() {

	$('#rightArrow').html('<button href="#" class="font35 bold arial" id="rightArrowLink"></button>');	
	$('#leftArrow').html('<button href="#" class="font35 bold arial" id="leftArrowLink"></button>');
	
	$('#hiddenPartNumber').val(1);
	
	$('#part1more').addClass('hidden-not-important');
	$('#part1').addClass('hidden-not-important');
	
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
	
	$('#leftArrow').addClass('hidden-not-important');
	$('#rightArrow').removeClass('hidden-not-important');
	
	$('#secondButton').addClass('lightButton');
	$('#secondButton').removeClass('lightSolidButton');
	
	$('#hiddenPartNumber').val('1');
	$('#imageDiv').html('<img id="accImg" src="Images/acc.png" alt="The accessible platform" height="303" width="523"></img>');
	$('#textUnderPic').html('The accessible platform');
	$('#accPlatform').html('The accessible platform');
	$('#text1more').html('With accessible toolkit LUWRAIN, blind and visually-impaired people have'+
			     '<br/>a  new way to be involved in the incredible world of information'+
			     '<br/>technologies. LUWRAIN doesn\'t take a lot of time to learn, and aims'+
			     '<br/>to be useable on laptops, as well as desktop computers. You can treat our'+
			     '<br/>new idea as one more solution for everyone who needs a reliable and'+
			     '<br/>accessible companion for various types of work. The product is designed'+
			     '<br/>as a new platform for creating speech-enabled applications'+
			     '<br/>with a set of standard tools for easy access to web services, mail, news reading, etc.');
	$('#firstButton').html('<img id="downImg" src="Images/down.png" alt="" height="18" width="15"></img><a href="/doc/user/manual/?mode=normal&lang=en"><span>User manual</span></a>');
	$('#secondButton').html('<span>Read more</span>');
};
function ShowPart2(){
	ChangeNavigationColor(2);
	
	$('#part1').slideDown('slow');
	$('#part1more').slideUp('slow');
	
	$('#leftArrow').removeClass('hidden-not-important');
	$('#rightArrow').removeClass('hidden-not-important');
	
	$('#secondButton').addClass('lightButton');
	$('#secondButton').removeClass('lightSolidButton');
	
	$('#hiddenPartNumber').val('2');
	$('#imageDiv').html('<img id="textBasedImg" src="Images/textBased.png" alt="Text-based environment" height="162" width="532"></img>');
	$('#textUnderPic').html('Text-based environment');
	$('#accPlatform').html('Text-based environment');
	$('#text1more').html('LUWRAIN is a set of software components on Java for accessible'+
			     '<br/>user interface construction. In contrast with widely popular'+
			     '<br/>screen reading solutions for graphical desktops, which actually are'+
			     '<br/>designed for control through a mouse and other pointing devices useful'+
			     '<br/>only for sighted users, LUWRAIN brings the information in the most suitable'+
			     '<br/>for the perception of blind people form. That means that the LUWRAIN user'+
			     '<br/>will always spend significantly less time than in an adapted GUI.'+
			     '<br/>We have created our environment for people who enjoy working effectively'+
			     '<br/>and time-efficiently.');
	$('#firstButton').html('<a href="/doc/new-app/?mode=normal&lang=en"><span>Your own application</span></a>');
	$('#secondButton').html('<span>Read more</span>');
};
function ShowPart3(){
	ChangeNavigationColor(3);
	
	$('#part1').slideDown('slow');
	$('#part1more').slideUp('slow');
	
	$('#leftArrow').removeClass('hidden-not-important');
	$('#rightArrow').removeClass('hidden-not-important');
	
	$('#secondButton').addClass('lightButton');
	$('#secondButton').removeClass('lightSolidButton');
	
	$('#hiddenPartNumber').val('3');
	$('#imageDiv').html('<img id="javaImg" src="Images/java.png" alt="Java on Linux" height="199" width="332"></img>');
	$('#textUnderPic').html('Java on Linux');
	$('#accPlatform').html('Java and Linux');
	$('#text1more').html('LUWRAIN can be with you everywhere! You may take it as a stand-alone'+
			     '<br/>operating system on Linux kernel and it will turn a laptop'+
			     '<br/>into elegant accessory for blind people. If you, your colleagues'+
			     '<br/>or members of your family need the operating system being already installed'+
			     '<br/>on your PC, you may take LUWRAIN just as an application. Luwrain will not require'+
			     '<br/>you to forbid the tools you used to work with previously and you can use it'+
			     '<br/>as a platform for creating and distributing accessible applications,'+
			     '<br/>even if you don\'t have any experience in this area.');
	$('#firstButton').html('<a href="/doc/faq/?mode=normal&lang=en"><span>FAQ</span></a>');
	$('#secondButton').html('<span>Read more</span>');
};
function ShowPart4(){
	ChangeNavigationColor(4);
	
	$('#part1').slideDown('slow');
	$('#part1more').slideUp('slow');
	
	$('#leftArrow').removeClass('hidden-not-important');
	$('#rightArrow').addClass('hidden-not-important');
	
	$('#secondButton').addClass('lightButton');
	$('#secondButton').removeClass('lightSolidButton');
	
	$('#hiddenPartNumber').val('4');
	$('#imageDiv').html('<img id="fossImg" src="Images/toss.png" alt="toss" height="229" width="254"></img>');
	$('#textUnderPic').html('FOSS');
	$('#accPlatform').html('FOSS');
	$('#text1more').html('LUWRAIN is a completely Free Software project, no fee is involved, and'+
			     '<br/>no restrictions of use and distribution exist, except in cases'+
			     '<br/>explicitly violating the terms of the GNU Public License ver. 3, as it'+
			     '<br/>was published by the Free Software Foundation. However, financial'+
			     '<br/>donations are still required to help us present our product across the'+
			     '<br/>world, and to introduce it to related social and distribution organizations.'+
			     '<br/>The team of developers hopes that LUWRAIN can increase the integration'+
			     '<br/>of disabled people into social life.');
	$('#firstButton').html('<a href="/doc/about/?mode=normal&lang=en"><span>More about the project</span></a>');
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
	    $('#secondButton').html('<a href="/doc/user/start/?mode=normal&lang=en"><span>Getting started</span></a>');
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
