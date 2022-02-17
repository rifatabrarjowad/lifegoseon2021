namespace list
{
    class Programe
    {
        
        public static void Main(string[] args)
        {
            int[] age = new int[5] {1,2,3,4,5};
            foreach (int i in age)
            {
                Console.WriteLine(i);
            }
            Console.WriteLine("Finish");
            var name = new List<int>() { 2,3,4,9,8};
            var indexnumber = name.IndexOf(4);
            Console.WriteLine("Index Number finder : " + indexnumber);
            name.Remove(2); //removeNumber
            name.Add(5);
           
            foreach (var i in name)
            {
                Console.WriteLine(i);
            }
            Console.WriteLine("Finish");
        }
    }
}