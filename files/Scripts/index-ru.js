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
	$('#textUnderPic').html('Доступная операционная система');
	$('#accPlatform').html('Доступная операционная система');
	$('#text1more').html('При помощи рабочего окружения Luwrain люди с нарушениями зрения могут расширить'+
			     '<br/>границы своего доступа к грандиозному миру информационных технологий. Luwrain'+
			     '<br/>не требует много времени для освоения и будет одинаково полезен на мобильных и'+
			     '<br/>настольных компьютерах. Мы хотим, чтобы наш проект стал новым решением'+
			     '<br/>для всех, кто нуждается в надёжном и доступном инструменте, пригодном для решения'+
			     '<br/>различных задач. Он проектируется как платформа для создания речевых приложений '+
			     '<br/>с набором стандартных утилит, предназначенных для доступа к веб, электронной почте,'+
			     '<br/>новостным ресурсам и т. д.');
	$('#firstButton').html('<img id="downImg" src="Images/down.png" alt="" height="18" width="15"></img><a href="/doc/user/manual/?mode=normal&lang=ru"><span>Руководство пользователя</span></a>');
	$('#secondButton').html('<span>Узнать больше</span>');
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
	$('#textUnderPic').html('Работа только с текстом');
	$('#accPlatform').html('Работа только с текстом');
	$('#text1more').html('Luwrain предлагает набор программных компонентов Java для построения'+
			     '<br/>особого типа невизуального интерфейса. В отличие от экранных'+
			     '<br/>чтецов, функционирующих в оконном окружении, ориентированного на работу'+
			     '<br/>при помощи мыши, Luwrain представляет информацию в виде,'+
			     '<br/>адаптированном для восприятия незрячих людей. Это означает, что на работу'+
			     '<br/>в Luwrain пользователю требуется времени существенно меньше, чем в озвученном'+
			     '<br/>оконном интерфейсе. Мы создаём нашу систему для тех, кто ведёт активный образ'+
			     '<br/>жизни и ценит экономию времени.');
	$('#firstButton').html('<a href="/doc/new-app/?mode=normal&lang=ru"><span>Создание приложение</span></a>');
	$('#secondButton').html('<span>Узнать больше</span>');
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
	$('#textUnderPic').html('Java и Linux');
	$('#accPlatform').html('Java и Linux');
	$('#text1more').html('Luwrain будет с вами всегда! Вариант поставки в виде самостоятельной'+
			     '<br/>операционной системы на ядре Linux превратит любой ноутбук в элегантный'+
			     '<br/>аксессуар для незрячего человека. Если вы, ваши коллеги или члены'+
			     '<br/>вашей семьи используют в своей работе операционную систему,'+
			     '<br/>которая уже установлена, вы можете запустить Luwrain просто как приложение.'+
			     '<br/>Luwrain не потребует от вас отказа от утилит, которые вы использовали'+
			     '<br/>ранее, и может быть платформой для создания адаптированных приложений,'+
			     '<br/>даже если у вас нет абсолютно никакого опыта в этой сфере.');
	$('#firstButton').html('<a href="/doc/faq/?mode=normal&lang=ru"><span>FAQ</span></a>');
	$('#secondButton').html('<span>Узнать больше</span>');
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
	$('#textUnderPic').html('Свободное ПО');
	$('#accPlatform').html('Свободное ПО');
	$('#text1more').html('Luwrain &#x2014; это полностью свободный проект. Использование Luwrain не подразумевает'+
			     '<br/>оплаты и может выполняться без ограничений, если это не нарушает требований'+
			     '<br/>GNU Public License версии 3. Авторы проекта были бы очень рады установлению'+
			     '<br/>новых рабочих контактов, поскольку это может помочь шире представить'+
			     '<br/>Luwrain  среди мировых общественных организаций.');
	$('#firstButton').html('<a href="/doc/about/?mode=normal&lang=ru"><span>Ещё о проекте</span></a>');
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
	    $('#secondButton').html('<a href="/doc/user/start/?mode=normal&lang=ru"><span>С чего начать?</span></a>');
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
