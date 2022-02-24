namespace AbstractClass
{
    class Program
    {
        
       
        static void Main(string[] args)
        {
            var QueWhoAreYou = new QueWhoAreYou();
            QueWhoAreYou.WhoAreYou();
            var Details = new Details();
            Details.WhoAreYou();
            System.Console.WriteLine("Hello World!");
        }
    }
}