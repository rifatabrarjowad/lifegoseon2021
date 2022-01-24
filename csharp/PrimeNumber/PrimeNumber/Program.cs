namespace PrimeNumber
{
    public class Program
    {

        public void disply()
        {

        }

        // driver code
        public static void Main(string[] args)
        {
           
            Console.Write(FindNthFib(7));
           
        }

        static int FindNthFib(int n)
        {
             int i, flag =0;
            for (i = 2; i <= n / 2; ++i)
            {

                // if n is divisible by i, then n is not prime
                // change flag to 1 for non-prime number
                if (n % i == 0)
                {
                    flag = 1;
                    break;
                }
            }

            // 0 and 1 are not prime numbers
            if ((n == 0) || (n == 1))
            {
                Console.WriteLine(n + " is neither prime nor composite.");
            }
            else
            {

                // flag is 0 for prime numbers
                if (flag == 0)
                    Console.WriteLine(n + " is a prime number.");
                else
                    Console.WriteLine(n + " is not a prime number.");
            }

            return 0;
        }
    }
}