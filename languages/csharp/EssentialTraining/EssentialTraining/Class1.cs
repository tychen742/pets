using System;

namespace EssentialTraining
{

    public class Class1
    {
       public static int[] numbers = { 1, 2, 3, 4 };

       public static int[,] multi = new int[2, 3]{
            { 0, 1, 2 },
            {2, 1, 2 }
            };


        public int AddTwo(int a, int b)
        {
            return a + b;
        }


        

    }


public class Class2
    {

        public static void Main(String[] args)
        {

            //Class1 test = new Class1();

            Console.WriteLine("The Main Method");
            //Console.WriteLine(test.AddTwo(10, 30));
        }

    }


}


