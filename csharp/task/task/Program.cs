namespace task
{
    class A
    {
        public int aa = 3;
        public int bb = 2;
        public virtual void Doing()
        {

            Console.WriteLine(aa + bb);
        }
    }

    // derived class of Animal 
    class B : A
    {
        public override void Doing()
        {

            Console.WriteLine(aa * bb);
        }

    }
    class C : B
    {
        public override void Doing()
        {
            Console.WriteLine(aa - bb);
        }
    }
    public class Programe
    {


        static void Main(string[] args)
        {


            A a = new A();
            a.Doing();
            B b = new B();
            b.Doing();
            C c = new C();
            c.Doing();
        }

    }
}



