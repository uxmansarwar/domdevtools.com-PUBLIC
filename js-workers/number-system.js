

const MAX_PRIME_NUMBER = 3000000;

/**
 * 
 * @param int _number 
 * @returns boolean
 */
const isOddNumber = _number => _number % 2 !== 0;


/**
 * 
 * @param int _number 
 * @returns boolean
 */
const isEvenNumber = _number => _number % 2 === 0;


const factorialCalculator = n => {

    let factorial = 0;

    return factorial;
}

/**
 * 
 * @param int _number 
 * @returns boolean
 */
const isPrimeNumber = _number => {

    if (
        _number.toString().length > 1 &&
        (
            _number.toString().endsWith('0') ||
            _number.toString().endsWith('2') ||
            _number.toString().endsWith('4') ||
            _number.toString().endsWith('5') ||
            _number.toString().endsWith('6') ||
            _number.toString().endsWith('8')
        )
    )
        return false;



    var sqrt_num = Math.floor(Math.sqrt(_number));
    if (isEvenNumber(sqrt_num))
        sqrt_num = sqrt_num + 1;

    var prime = _number != 1;
    for (var i = 2; i < sqrt_num + 1; i = i + 1) { // sqrt_num+1
        if (_number % i == 0)
            return false;


    }
    return prime;

}

/**
 * 
 * @param {*} start_number 
 * @param {*} end_number 
 * @returns 
 */
function primeNumberGenerator(start_number = 1, end_number = 11) {


    var prime_numbers = [];

    if (isEvenNumber(start_number))
        start_number = start_number + 1;

    for (var i = start_number; i <= end_number; i = i + 2) {

        // if (not_prime_numbers.indexOf(i) > -1) {
        //     continue;
        // }

        if (isPrimeNumber(i))
            prime_numbers.push(i)


        /**
         * if i(number end with 3) then it mean next number will be ends with 5
         * which can not be a prime number, that why we add 2
         */
        i.toString().endsWith('3') && i.toString().length > 1 ? i = i + 2 : '';

    }

    return prime_numbers;

}
