function OnReady() {		
    $('#topPart .top-part-content').addClass('hidden-not-important');
	$('#closeMenu').addClass('hidden-not-important');
	$('#openMenu').click(function (e) {
		e.preventDefault();
		$('#topPart .top-part-content').slideDown('slow');
		$('#openMenu').addClass('hidden-not-important');
		$('#closeMenu').removeClass('hidden-not-important');
	});
	$('#closeMenu').click(function (e) {
		e.preventDefault();
		$('#topPart .top-part-content').slideUp('slow');
		$('#closeMenu').addClass('hidden-not-important');
		$('#openMenu').removeClass('hidden-not-important');
	});
    /*
	$('#closeLanguageMenu').click(function (e) {
		e.preventDefault();
		HideLangMenuItem();
		$('#languageSelected').removeClass('hidden-not-important');
	});
	$('#selectedLanguageName').click(function (e) {
		e.preventDefault();
		ShowLangMenuItem();
		$('#languageSelected').addClass('hidden-not-important');
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
*/
};

/*
function ShowLangMenuItem(){
	$(".languageMenuItem").removeClass('hidden-not-important');
}

function HideLangMenuItem(){
	$(".languageMenuItem").addClass('hidden-not-important');
}

function ChangeLanguage(langName) {
	$('#selectedLanguageName').html($('#'+langName).html()+'&#9662;');
	$('#languageSelected').removeClass('hidden-not-important');
	$('#languageMenu').addClass('hidden-not-important');
};
*/
