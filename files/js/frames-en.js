
function OnReadyIndex()
{
    $('#hiddenPartNumber').val(1);
    $('#part1more').addClass('hidden-not-important');
    $('#part1').addClass('hidden-not-important');
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
    $('#arrowRight').click(function (e) {
	ChangeContentPart(2);//right
    });
    $('#arrowLeft').click(function (e) {
	ChangeContentPart(1);//left
    });
};

function ShowPart1()
{
    ChangeNavigationColor(1);
    $('#leftArrow').addClass('hidden-not-important');
    $('#rightArrow').removeClass('hidden-not-important');
    $('#secondButton').addClass('lightButton');
    $('#secondButton').removeClass('lightSolidButton');
    $('#hiddenPartNumber').val('1');
    $('#accPlatform').html('Technologies without pixels!');
    $('#text1more').html('LUWRAIN develops technologies' +
			 '<br>which improve the accessibility of internet services and digital materials' +
			 '<br>to people with eyesight problems. We are designing a new' +
			 '<br>speech-enabled user interface and are researching new methods of adapting' +
			 '<br>materials for blind people with the help of machine learning.');
    $('#firstButton').html('<img id="downImg" src="/js/down.png" alt="" height="18" width="15"></img><a href="/doc/user/start/?mode=normal&lang=en"><span>Getting started</span></a>');
    $('#part1more').slideDown('slow');
    $('#secondButton').html('<span>Read more</span>');
};

function ShowPart2()
{
    ChangeNavigationColor(2);
    $('#part1more').slideUp('slow', function(){
	$('#leftArrow').removeClass('hidden-not-important');
	$('#rightArrow').removeClass('hidden-not-important');
	$('#secondButton').addClass('lightButton');
	$('#secondButton').removeClass('lightSolidButton');
	$('#hiddenPartNumber').val('2');
	$('#accPlatform').html('DAISY in a cloud');
	$('#text1more').html('The cloud service LUWRAIN Books' +
			     '<br>creates audiobooks of uploaded texts utilizing commercial' +
			     '<br>text-to-speech engines and with the support of the DAISY format.' +
			     '<br>This innovation was based on considerable research into the areas' +
			     '<br>of natural language processing, parsing of source materials, and layout' +
			     '<br>generation.' +
			     '<br>LUWRAIN Books also takes care of delivering its audiobooks to readers' +
			     '<br>in a way which helps them to manage bookmarks.');
	$('#firstButton').html('<a href="/community/publications/?mode=normal&lang=en"><span>Press about us</span></a>');
	$('#part1more').slideDown('slow');
    });
};

function ShowPart3()
{
    ChangeNavigationColor(3);
    $('#part1more').slideUp('slow', function(){
	$('#leftArrow').removeClass('hidden-not-important');
	$('#rightArrow').removeClass('hidden-not-important');
	$('#secondButton').addClass('lightButton');
	$('#secondButton').removeClass('lightSolidButton');
	$('#hiddenPartNumber').val('3');
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
	$('#part1more').slideDown('slow');
    });
};

function ShowPart4()
{
    ChangeNavigationColor(4);
    $('#part1more').slideUp('slow', function(){
	$('#leftArrow').removeClass('hidden-not-important');
	$('#rightArrow').addClass('hidden-not-important');
	$('#secondButton').addClass('lightButton');
	$('#secondButton').removeClass('lightSolidButton');
	$('#hiddenPartNumber').val('4');
	$('#accPlatform').html('FOSS');
	$('#text1more').html('LUWRAIN is a completely Free Software project, no fee is involved, and'+
			     '<br/>no restrictions of use and distribution exist, except in cases'+
			     '<br/>explicitly violating the terms of the GNU Public License ver. 3, as it'+
			     '<br/>was published by the Free Software Foundation. However, financial'+
			     '<br/>donations are still required to help us present our product across the'+
			     '<br/>world, and to introduce it to related social and distribution organizations.'+
			     '<br/>The team of developers hopes that LUWRAIN can increase the integration'+
			     '<br/>of disabled people into social life.');
	$('#firstButton').html('<a href="/doc/authors/?mode=normal&lang=en"><span>Who we are?</span></a>');
	$('#secondButton').html('<a href="/doc/about/?mode=normal&lang=en"><span>About the project</span></a>');
	$('#part1more').slideDown('slow');
    });
};

function ChangeNavigationColor(selected)
{
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

function SecondButtonOnClick()
{
    var partNumber = $('#hiddenPartNumber').val();
    switch (partNumber)
    {
	case "1": 
	ShowPart2();
	break;
	case "2":
	ShowPart3();
	break;
	case "3":
	ShowPart4();
	break;
    }
};

function ChangeContentPart(direction)
{
    switch (direction)
    {
	case 1: //left
	switch ($('#hiddenPartNumber').val())
	{
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
	switch ($('#hiddenPartNumber').val())
	{
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
