function OnReady(langName) {
	$('#hiddenPartNumber').val(1);
	
	$('#part1more').addClass('hidden');
	$('#leftArrow').addClass('hidden');
	$('#part1').addClass('hidden');
	
	$('#part1').slideDown('slow');

	$('#topPart').addClass('hidden');
	$('#closeMenu').addClass('hidden');
	$('#openMenu').click(function (e) {
		e.preventDefault();
		$('#topPart').slideDown('slow');
		$('#openMenu').addClass('hidden');
		$('#closeMenu').removeClass('hidden');
	});
	$('#closeMenu').click(function (e) {
		e.preventDefault();
		$('#topPart').slideUp('slow');
		$('#closeMenu').addClass('hidden');
		$('#openMenu').removeClass('hidden');
	});
	$('#closeLanguageMenu').click(function (e) {
		e.preventDefault();
		$('#languageMenu').addClass('hidden');
		$('#languageSelected').removeClass('hidden');
	});
	$('#selectedLanguageName').click(function (e) {
		e.preventDefault();
		$('#languageMenu').removeClass('hidden');
		$('#languageSelected').addClass('hidden');
	});
	$('#russianLang').click(function (e) {
		ChangeLanguage('russianLang');
	});
	$('#engLang').click(function (e) {
		ChangeLanguage('engLang');
	});
	$('#deutschLang').click(function (e) {
		ChangeLanguage('deutschLang');
	});
	$('#franceLang').click(function (e) {
		ChangeLanguage('franceLang');
	});
};
function SecondButtonOnClick() {
	switch ($('#hiddenPartNumber').val()) {
		case "1": 
			$('#hiddenPartNumber').val(10);
			$('#part1').slideUp('slow');
			//$('#part1more').removeClass('hidden');
			$('#part1more').slideDown('slow');
			break;
	 }
};
function ChangeContentPart(currentPart,toPart) {
};
function ChangeLanguage(langName) {
	$('#selectedLanguageName').html($('#'+langName).html());
	$('#languageSelected').removeClass('hidden');
	$('#languageMenu').addClass('hidden');
};