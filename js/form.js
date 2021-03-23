$(document).ready(function() {
	//tutaj wstawiamy kod JQuery, który zostanie uruchomiony
	//jak tylko dokument będzie gotowy do manipulowania jego elementami
	/**
		Własne metody do walidacji
	**/
	$.validator.addMethod('priceformat', function (value, element) {
		return /^\d+(\.\d{1,2})?$/.test(value);
		}, 'Podany format ceny jest błędny');

    $('#myform').validate(validatorRules);
});

var validatorRules = {
//reguły dla pola formularza
		rules: {
	//atrybut name: {reguły}
	name: {
		//reguły - kolejność ma znaczenia
						required: true,
		minlength: 4,
		maxlength: 30
				},
	nazwa: {
		//reguły - kolejność ma znaczenia
						required: true,
		minlength: 4,
		maxlength: 15
				},
	surname: {
					//reguły - kolejność ma znaczenia
						required: true,
		minlength: 3,
		maxlength: 40
							},
	signature: {
						required: true,
		minlength: 7,
		maxlength: 10
	},
		price: {
		//reguły
		priceformat: true,
		maxlength: 7
	},
		condition: {
						required:false,
		minlength: 3,
		maxlength: 15
	},
		Tytul: {
						required:true,
		minlength: 3,
		maxlength: 50
	},
		Opis: {
						required:false,
		minlength: 10,
		maxlength: 150
	},
		Rok_Wydania: {
						required:true,
		minlength: 3,
		maxlength: 4,
		digits: true
		}
		},
//komunikaty dla pola formularza
messages: {
	name: {
		required: 'Pole wymagane',
		minlength: jQuery.validator.format("Pole musi zawierać minimum 4 znaki!"),
		maxlength: jQuery.validator.format("Pole musi zawierać maksimum 20 znaków!")
	},
	nazwa: {
		required: 'Pole wymagane',
		minlength: jQuery.validator.format("Pole musi zawierać minimum 4 znaki!"),
		maxlength: jQuery.validator.format("Pole musi zawierać maksimum 20 znaków!")
	},
	surname: {
		required: 'Pole wymagane',
		minlength: jQuery.validator.format("Pole musi zawierać minimum 3 znaki!"),
		maxlength: jQuery.validator.format("Pole musi zawierać maksimum 40 znaków!")
	},
	signature: {
		required: 'Pole wymagane',
		minlength: jQuery.validator.format("Pole musi zawierać minimum 7 znaków"),
		maxlength: jQuery.validator.format("Pole musi zawierać maksimum 10 znaków")
	},
	price: {
		required: 'Pole wymagane',
		maxlength: jQuery.validator.format("Maksymalna ilość znaków wynosi {0}!"),
	},
	condition: {
		minlength: jQuery.validator.format("Pole musi zawierać minimum 3 znaki"),
		maxlength: jQuery.validator.format("Pole musi zawierać maksimum 15 znaków")
	},
	Tytul:{
		required: 'Pole wymagane',
		minlength: jQuery.validator.format("Pole musi zawierac minimum 3 znaki"),
		maxlength: jQuery.validator.format("Pole musi zawierać maksimum 50 znaków")
	},
	Opis:{
		minlength: jQuery.validator.format("Pole musi zawierać minimum 10 znaków"),
		maxlength: jQuery.validator.format("Pole musi zawierać maksimum 150 znaków")
	},
	Rok_Wydania:{
		required: 'Pole wymagane',
		minlength: jQuery.validator.format("Pole musi zawierać minimum 3 cyfry"),
		maxlength: jQuery.validator.format("Pole musi zawierać maksimum 4 cyfry")
	}
},
		highlight: function(element, errorClass, validClass) {
				//znajdz najbliższy element form-group
				$(element).closest('.form-group').addClass(errorClass).removeClass(validClass);
		},
		unhighlight: function(element, errorClass, validClass) {
				$(element).closest('.form-group').removeClass(errorClass).addClass(validClass);
		},
		errorClass: 'has-error',
validClass: 'has-success',
/**niestandradowa reakcja na kliknięcie submit,
	 gdy nie ma błędów,
	 blokuje standradową akcję
**/
/*submitHandler: function(form) {
	alert('reakcja na submit');
},*/
/**
	niestadardowa rekacja na kliknięcie submit,
	gdy są błędy,
	blokuje standradową akcję
**/
invalidHandler: function(event, validator) {
	// 'this' to referencja do form
	var errors = validator.numberOfInvalids();
	if (errors) {
		var message = errors == 1
		? 'Nie wypełniono poprawnie 1 pola. Zostało podświetlone'
		: 'Nie wypełniono poprawnie ' + errors + ' pól. Zostały podświetlone';
		$("div.alert-danger").html(message);
		$("div.alert-danger").show();
	} else {
		$("div.alert-danger").hide();
	}
},
};
