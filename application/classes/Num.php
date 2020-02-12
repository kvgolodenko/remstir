<?php defined('SYSPATH') OR die('No direct script access.');

class Num extends Kohana_Num {

	/**
	 * Locale-aware number and monetary formatting.
	 *
	 *     // In English, "1,200.05"
	 *     // In Spanish, "1200,05"
	 *     // In Portuguese, "1 200,05"
	 *     echo Num::format(1200.05, 2);
	 *
	 *     // In English, "1,200.05"
	 *     // In Spanish, "1.200,05"
	 *     // In Portuguese, "1.200.05"
	 *     echo Num::format(1200.05, 2, TRUE);
	 *
	 * @param   float   $number     number to format
	 * @param   integer $places     decimal places
	 * @param   boolean $monetary   monetary formatting?
	 * @return  string
	 * @since   3.0.2
	 */
	public static function format($number, $places, $monetary = FALSE)
	{
		// XXX: hardcode norwegian, according to the http://www.open-std.org/JTC1/sc22/WG20/docs/n854-Bokmal.htm
		/*
			Clause 3: Numeric formatting

			The decimal separator is COMMA <,>
			For display of numbers in applications there is no use of a thousands separator, and thus no grouping for large numbers.

			Clause 4: Monetary formatting

			The decimal separator is COMMA <,>
			The thousands separator is FULL STOP <.>
			The grouping of large numbers is in groups of three digits.

			International currency symbol:
			NOK 543,21
			Domestic currency symbol:
			kr 543,21
			Use of negative sign:
			kr -543,21
			Thousands and decimal separators:
			kr 9.876.543,21
		*/

		$decimal = ',';
		$thousands = ($monetary ? '.' : '');
		return number_format($number, $places, $decimal, $thousands);
	}
}
