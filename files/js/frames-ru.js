
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
    $('#accPlatform').html('Технологии без пикселей');
    $('#text1more').html('LUWRAIN развивает инструменты доступа к информационным технологиям'+
			 '<br/>в невизуальной форме. Сфера наших интересов включает в себя'+
			 '<br/>как проектирование новых человеко-машинных интерфейсов,'+
			 '<br/>построенных на основе речевого вывода, так и исследование автоматизированных методов'+
			 '<br/>адаптации материалов для восприятия без зрительного контроля.'+
			 '<br/>Особую роль в нашей работе играет поддержка людей с нарушениями зрения,'+
			 '<br/>для которых мы ведём активную разработку программных продуктов,'+
'<br/>охватывающих решение разнообразных задач.');
    $('#firstButton').html('<a href="/doc/authors/?mode=normal&lang=ru"><span>Кто мы</span></a>');
    $('#part1more').slideDown('slow');
    $('#secondButton').html('<span>Далее</span>');
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
	$('#accPlatform').html('Книги и DAISY в облаке');
	$('#text1more').html('Облачный сервис <a href=\"https://books.luwrain.org/?mode=normal&amp;lang=ru\">LUWRAIN Books</a> предназначен для обработки'+
			     '<br/>массивов текстов и создания на их основе аудиокниг,'+
			     '<br/>включая поддержку формата DAISY. Для этого используются результаты'+
			     '<br/>наших исследований в области компьютерной лингвистики,'+
			     '<br/>обработки исходных материалов и построения навигационной структуры изданий.'+
			     '<br/>LUWRAIN Books позволяет не только создавать аудиокниги,'+
			     '<br/>но и доставляет их читателям, управляя каталогами и закладками,'+
			     '<br/>ориентируясь на круг задач издательств, тифлопедагогов и библиотек.');
	$('#firstButton').html('<a href="/doc/faq/?mode=normal&lang=ru"><span>FAQ</span></a>');
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
	$('#accPlatform').html('Открытая вселенная Java');
	$('#text1more').html('Для построения невизуальных интерфейсов мы развиваем'+
			     '<br/><a href="http://luwrain.org/download/?mode=normal&lang=ru">платформу LUWRAIN</a>. Она создаёт новый пользовательский опыт,'+
			     '<br/>отвечающий строгим требованиям функциональной эффективности, и предлагает'+
			     '<br/>открытый API на языке Java, обеспечивающий возможность разработки'+
			     '<br/>кроссплатформенных приложений с интеграцией в сетевые сервисы.'+
			     '<br/>LUWRAIN с комплектом стандартных программ может быть запущен'+
			     '<br/>как операционная система на ядре Linux, превращая'+
			     '<br/>портативные ПК и Raspberry Pi в удобные инструменты для незрячих людей.');
	$('#firstButton').html('<a href="/doc/legal/?mode=normal&lang=ru"><span>Правовой статус</span></a>');
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
	$('#accPlatform').html('Только все вместе!');
	$('#text1more').html('Наш коллектив постоянно следит за техническими средствами,'+
			     '<br/>коммерческими моделями и новыми подходами к образованию,'+
			     '<br/>для которых применение платформы LUWRAIN способно'+
			     '<br/>сделать существенный вклад в развитие людей с нарушениями зрения.'+
			     '<br/>Разработка методики обучения незрячих программистов и системных'+
			     '<br/>администраторов, популяризация невизуального использования издательских'+
			     '<br/>систем TeX и Lilypond, снижение числа незрячих людей, которые не смогли'+
			     '<br/>начать использование ПК, — далеко не весь круг интересных нам проблем.');
	$('#firstButton').html('<img id="downImg" src="/js/down.png" alt="" height="18" width="15"></img><a href="/doc/user/start/?mode=normal&lang=ru"><span>С чего начать?</span></a>');
	$('#secondButton').html('<a href="/doc/about/?mode=normal&lang=ru"><span>Ещё о проекте</span></a>');
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
