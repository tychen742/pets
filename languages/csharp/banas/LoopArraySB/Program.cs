// See https://aka.ms/new-console-template for more information
// Console.WriteLine("Hello, World!");
// using System;
using System.Runtime.InteropServices;
using System.Xml;

namespace Program.cs
{
    class Program
    {
        static void Main(string[] args)
        {

            int[] myNums = new int[3];
            myNums[0] = 100000;
            string[] customer = { "Abby", "Bob", "Chloe" };
            var employee = new[] { "Xander", "Yolo", "Zander" };

            object[] randomArray = { "Car", 17, 1.2345 };

            Console.WriteLine("Youe favoriate num: {0}", myNums[0]);
            Console.WriteLine(employee[0]);

            // ########## randomArray ##########
            Console.WriteLine();
            Console.WriteLine("########## randomArray ##########");
            Console.WriteLine("The data type of randomArray[0]:     {0}", randomArray[0].GetType());
            Console.WriteLine("The data type of randomArray:        {0}", randomArray.GetType());

            Console.WriteLine("The length of array randomArray:     {0}", randomArray.Length);

            Console.Write("The elements in randomArray:         ");
            for (int i = 0; i < randomArray.Length; i++)
            {
                Console.Write("{0}, ", randomArray[i]);
            }
            Console.WriteLine();
            Console.WriteLine();

            Console.WriteLine("The index : value in randomArray:         ");
            for (int i = 0; i < randomArray.Length; i++)
            {
                Console.WriteLine("Index[{0}] : Value[{1}] ", i, randomArray[i]);
            }
            Console.WriteLine();

            Console.WriteLine("########## Multiple Array ##########");
            // ########## Multidimentional Array ##########
            int[,] multiDimArr = new int[2, 3] {
                {1, 2, 3}, {4, 5, 6}
            };
            // Console.WriteLine("1:1 of multiDimArr is:   ", multiDimArr.GetValue(1, 1));
            Console.WriteLine("1:1 of multiDimArr is:   {0}", multiDimArr[1, 1]);
            Console.WriteLine("0:0 of multiDimArr is:   {0}", multiDimArr.GetValue(0, 0));

            // loop through
            Print("########## loop through multiDim array ##########");
            for (int i = 0; i < multiDimArr.GetLength(0); i++)
            {
                for (int j = 0; j < multiDimArr.GetLength(1); j++)
                {
                    Console.Write("{0} ", multiDimArr[i, j]);
                }
            }

            Print();
            Print("########## PrintArray Function ##########");
            int[] arrNums = { 1, 3, 2, 5, 4 };
            PrintArray(arrNums, "ForEach");

            Print("########## Sort/Reverse array ");
            // ##### Sort/Reverse array #####
            PrintArray(arrNums, "write");
            Print();

            Array.Sort(arrNums);
            PrintArray(arrNums, "write");
            Print();

            Array.Reverse(arrNums);
            PrintArray(arrNums, "write");
            Print();


            // ########## IndexOf ##########
            Print("########## IndexOf ##########");
            Console.WriteLine("3 at Index of {0}", Array.IndexOf(arrNums, 3));


        }
        // ##### PrintArray function
        static void PrintArray(int[] intArr, [Optional] string msg)
        {
            if (msg is null)
            {
                foreach (int k in intArr)
                {
                    Console.WriteLine("{0} ", k);
                }
            }
            else if (msg == "write")
            {
                foreach (int k in intArr)
                {
                    Console.Write("{0} ", k);
                }
            }
            else
            {
                foreach (int k in intArr)
                {
                    Console.WriteLine("{0} : {1}", msg, k);
                }
            }
        }

        // ##### Print function #####
        static void Print([Optional] string? arg)
        {
            if (arg is null)
            {
                Console.WriteLine("\n");
            }
            else
            {
                Console.WriteLine(arg);
            }
        }

    }
}

