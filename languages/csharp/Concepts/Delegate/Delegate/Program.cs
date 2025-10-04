using System;

namespace Delegate
{
    public delegate void Print(int value); 

    class Program
    {
        static void Main(string[] args)
        {
            Print printDelegate = PrintNumber; // delegate Print points to PrintNumber
            printDelegate(100);

            printDelegate = PrintMoney; // delegate Print pionts to PrintMoney
            printDelegate(100);

            PrintHelper(PrintNumber, 10000); // delegate type parameter
            PrintHelper(PrintMoney, 10000);
        
        }

        public static void PrintNumber(int num) // same signature as Print
        {
            Console.WriteLine("Number: " + num);
        }

        public static void PrintMoney(int money)
        {
            Console.WriteLine("Money: " + money);
        }

        public static void PrintHelper(Print delegateFunc, int numToPrint)
        {
            delegateFunc(numToPrint);
        }
    }
}
