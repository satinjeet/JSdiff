<?php

//---------------------------------------------
// Language file used by mako\Validate
//---------------------------------------------

return
[
	/**
	 * Rule error messages.
	 */

	'required'                 => 'Поле %1$ обязательно для заполнения.',
	'min_length'               => 'Поле %1$s должно содержать не более %2$s <pluralize:%2$s>символа</pluralize>.',
	'max_length'               => 'Поле %1$s должно содержать не менее %2$s <pluralize:%2$s>символа</pluralize>.',
	'exact_length'             => 'Поле %1$s должно содержать %2$s <pluralize:%2$s>символ</pluralize>.',
	'less_than'                => 'Значение поля %1$s должно быть меньше %2$s.',
	'less_than_or_equal_to'    => 'Значение поля %1$s должно быть меньше или равно %2$s.',
	'greater_than'             => 'Значение поля %1$s должно быть больше %2$s.',
	'greater_than_or_equal_to' => 'Значение поля %1$s должно быть больше или равно %2$s.',
	'between'                  => 'Значение поля %1$s должно находиться в пределах %2$s и %3$s.',
	'match'                    => 'Значения полей %1$s и %2$s должны совпадать.',
	'different'                => 'Значения полей %1$s и %2$s должны отличаться.',
	'regex'                    => 'Значение поля %1$s не соответствует формату.',
	'integer'                  => 'Поле %1$s должно содержать число.',
	'float'                    => 'Поле %1$s должно содержать дробное число.',
	'natural'                  => 'Поле %1$s должно содержать натуральное число.',
	'natural_non_zero'         => 'Поле %1$s должно содержать натуральное число, не равное нулю.',
	'hex'                      => 'Поле %1$s должно содержать шестнадцатеричное значение.',
	'alpha'                    => 'Значение поля %1$s должно состоять из букв.',
	'alpha_unicode'            => 'Значение поля %1$s должно состоять из букв.',
	'alphanumeric'             => 'Значение поля %1$s должно состоять из букв и чисел.',
	'alphanumeric_unicode'     => 'Значение поля %1$s должно состоять из букв и чисел.',
	'alpha_dash'               => 'Значение поля %1$s должно состоять из букв, чисел, дефиса и подчеркивания.',
	'alpha_dash_unicode'       => 'Значение поля %1$s должно состоять из букв, чисел, дефиса и подчеркивания.',
	'email'                    => 'Поле %1$s должно содержать правильный адрес электронной почты.',
	'email_domain'             => 'Поле %1$s должно содержать правильный адрес электронной почты',
	'url'                      => 'Поле %1$s должно содержать правильный адрес веб-страницы.',
	'ip'                       => 'Поле %1$s должно содержать правильный IP-адрес.',
	'in'                       => 'Поле %1$s должно содержать одно из допустимых значений.',
	'not_in'                   => 'Поле %1$s содержит недопустимое значение.',
	'date'                     => 'Поле %1$s должно содержать правильную дату.',
	'before'                   => 'Поле %1$s должно содержать дату до %3$s.',
	'after'                    => 'Поле %1$s должно содержать дату после %3$s.',
	'token'                    => 'Недопустимое значение ключа безопасности.',
	'uuid'                     => 'Недопустимое значение уникального идентификатора.',
	'unique'                   => '%1$s уже существует.',
	'exists'                   => '%1$s не существует.',

	/**
	 * Custom overrides.
	 */

	'overrides' =>
	[
		'fieldnames' =>
		[

		],
		'messages' =>
		[

		],
	],
];

