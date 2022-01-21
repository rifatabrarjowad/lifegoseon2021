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
           
            Console.Write(FindNthFib(5));
            var mbox = 5.56;
            var d = mbox.GetType();
            Console.WriteLine(d);
        }

        static int FindNthFib(int prime)
        {
            var stNumber = prime/2;
            var ndNumber = prime/3;
            var rdNumber = prime/5;
            if (prime == 0) {

                Console.WriteLine("It's deffret");
            }else if (prime == 1) {
                
            }
                 return prime;
        }
    }
}