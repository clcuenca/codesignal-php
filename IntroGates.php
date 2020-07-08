
/**
 * Returns the sum of the given number's digits
 *
 * Problem #1
 *
 * @author: Carlos L. Cuenca
 * @date 05/19/2020
 * @param n int The number to sum the digits
 * @return int the sum of the number n's digits
 */

function addTwoDigits($n) {
	
	return ($n % 10) + ($n / 10);

}

/**
 * Returns the largest base 10 number given the amount of digits, n
 *
 * Problem #2
 *
 * @author Carlos L. Cuenca
 * @date 07/08/2020
 * @param n int the amount of digits the number should have
 * @return int The largest resulting number with n digits
 */

function largestNumber($n) {
	
	return 10**$n - 1;

}