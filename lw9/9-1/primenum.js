const prime = ' is prime number';
const notPrime = ' is not prime number';
const notNumber = ' is not a number';

function isPrimeNumber(n) {
    if (typeof n === 'number')
        printIsPrimeNumber(n);
    else if (Array.isArray(n))
        for (let j = 0; j < n.length; j++)
            if (typeof n[j] === 'number')
                printIsPrimeNumber(n[j]);
            else
                console.log(n[j] + notNumber);
    else
        console.log(n + notNumber);

    function printIsPrimeNumber(num) {
        let isPrime = true;

        if (!Number.isInteger(num) || num <= 1)
            isPrime = false;

        for (let i = 2; i < num && isPrime; i++)
            if (num % i === 0) {
                isPrime = false;
                break;
            }
        if (isPrime)
            console.log(num + prime);
        else
            console.log(num + notPrime);
    }
  }