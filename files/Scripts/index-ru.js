function OnReadyIndex() {

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
	$('#arrowRight').click(function (e) {
		ChangeContentPart(2);//right
	});
	$('#arrowLeft').click(function (e) {
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
	$('#textUnderPic').html('Информационное общество &#x2014; доступное общество');
	$('#accPlatform').html('Технологии без пикселей');
	$('#text1more').html('Команда LUWRAIN развивает инструменты доступа к информационным технологиям'+
			     'br/>в невизуальной форме. Наша компетенция включает в себя как решение'+
			     'br/>социальных задач, так и исследования новых человеко-машинных интерфейсов'+
			     'br/>для "Интернета вещей" и "Умного дома".'+
			     'br/>Особую роль в работе играет поддержка людей с нарушениями зрения,'+
			     'br/>для которых мы ведём активную разработку программных продуктов'+
			     'br/>и методов адаптаций материалов.');
	$('#firstButton').html('<img id="downImg" src="Images/down.png" alt="" height="18" width="15"></img><a href="/doc/user/start/?mode=normal&lang=ru"><span>С чего начать?</span></a>');
	$('#secondButton').html('<span>Узнать больше</span>');
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
	$('#textUnderPic').html('Работа только с текстом');
	$('#accPlatform').html('Работа только с текстом');
	$('#text1more').html(''На основе виртуальной машины Java мы разрабатываем платформу для построения'+
			     '<br/>эффективного невизуального интерфейса. В отличие от экранных чтецов,'+
			     '<br/>функционирующих в оконном окружении, LUWRAIN представляет информацию в виде,'+
			     '<br/>адаптированном для восприятия людей с нарушениями зрения.'+
			     '<br/>Это означает, что на работу в LUWRAIN'+
			     '<br/>пользователю требуется времени существенно меньше, чем в оконном интерфейсе.'+
			     '<br/>Мы создаём нашу систему для тех,'+
			     '<br/>кто ведёт активный образ жизни и ценит экономию времени.');
	$('#firstButton').html('<a href="/community/publications/?mode=normal&lang=ru"><span>Пресса о нас</span></a>');
	$('#secondButton').html('<span>Узнать больше</span>');
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
	$('#textUnderPic').html('Java и Linux');
	$('#accPlatform').html('Java и Linux');
	$('#text1more').html('Как из совокупности текста, различных цветов фона и графических примитивов'+
			     '<br/>рождаются новые образы, воспринимаемые человеком визуально,'+
			     '<br/>так же из речи и звуков рождаются образы, воспринимаемые на слух.'+
			     '<br/>Мы называем это невизуальным дизайном, который проектируем,'+
			     '<br/>исходя из требований функциональной эффективности.'+
			     '<br/>Наш опыт показывает, что в аккуратно спроектированном'+
			     '<br/>невизуальном интерфейсе работа может быть такой же комфортной и быстрой,'+
			     '<br/>как и с использованием обычных графических инструментов.');
	$('#firstButton').html('<a href="/doc/faq/?mode=normal&lang=ru"><span>FAQ</span></a>');
	$('#secondButton').html('<span>Узнать больше</span>');
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
	$('#textUnderPic').html('Свободное ПО');
	$('#accPlatform').html('Свободное ПО');
	$('#text1more').html('Основные компоненты LUWRAIN являются свободным ПО'+
			     '<br/>и созданы с активным использованием результатов других свободных проектов.'+
			     '<br/>Мы намерены привлекать как можно больше внимания'+
			     '<br/>к решению социальных задач при помощи свободного ПО'+
			     '<br/>и к тем преимуществам, которые оно открывает.'+
			     '<br/>Наряду с другими видами поставки LUWRAIN распространяется'+
			     '<br/>как дистрибутив GNU/Linux, предоставляющий доступ к огромному количеству пакетов'+
			     '<br/>в свободных репозиториях и позволяющий людям с нарушениями зрения'+
			     '<br/>познакомиться с новыми возможностями в простой форме.');
	$('#firstButton').html('<a href="/doc/authors/?mode=normal&lang=ru"><span>Кто мы</span></a>');
	$('#secondButton').html('<span>Узнать больше</span>');
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
	$('#secondButton').html('<span>Далее</span>');
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
	    $('#secondButton').html('<a href="/doc/about/?mode=normal&lang=ru"><span>Ещё о проекте</span></a>');
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
