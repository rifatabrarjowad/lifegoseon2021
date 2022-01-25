namespace methodCall
{
    public class Program
    {

    
        static int addNumber()
        {
            var  a = 5;
            var b = 5;
            var  result = a + b;
            return result;
        }
        public void display()
        {
           
            Console.WriteLine(addNumber());
        }

        public static void Main(string[] args)
        {
            Program a = new Program();
            a.display();
        }

       
    }
}