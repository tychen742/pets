// See https://aka.ms/new-console-template for more information
// import System;

namespace Program.cs
{
    class Program
    {
        static void Main(string[] args)
        {
            // numericals
            Console.WriteLine();
            Console.WriteLine("############### Numericals     ##############################");
            decimal PI_sys = (decimal)Math.PI; // defined constant
            decimal PI_decimal = 3.1415926535897931M;
            double PI_double = 3.1415926535897931;
            Console.WriteLine("PI:          {0}", PI_sys);
            Console.WriteLine("PI_decimal:  {0}", PI_decimal);
            Console.WriteLine("PI_douleee:  {0}", PI_double);

            Console.WriteLine("PI_dc+PI_db: {0}", PI_decimal + (decimal)PI_double);

            Console.WriteLine("Biggest float   :  {0}", float.MaxValue);
            Console.WriteLine("Smallest float  : {0}", float.MinValue);
            Console.WriteLine("Biggest double  :  {0}", double.MaxValue);
            Console.WriteLine("Smallest double : {0}", double.MinValue);
            Console.WriteLine("Biggest decimal :  {0}", decimal.MaxValue);
            Console.WriteLine("Smallest decimal: {0}", decimal.MinValue);

            // type casting
            Console.WriteLine();
            Console.WriteLine("############### Type Casting   ##############################");
            bool boolFromStr = bool.Parse("true");
            int intFromStr1 = int.Parse("100");
            int intFromStr2 = (int)100.0;
            Console.WriteLine("intFromStr1: {0}", intFromStr1);
            Console.WriteLine("intFromStr2: {0}", intFromStr2);
            Console.WriteLine("type of intFromStr1: {0}", intFromStr1.GetType());
            Console.WriteLine("type of intFromStr2: {0}", intFromStr2.GetType());
            Console.WriteLine("converted to Int32");


            // datetime
            Console.WriteLine();
            Console.WriteLine("############### DateTime       ##############################");
            DateTime importantDate = new DateTime(1977, 08, 24);
            Console.WriteLine("The most important date in human history, possibly: {0}", importantDate);
            Console.WriteLine("Day of week of that day: {0}", importantDate.DayOfWeek);

            importantDate = importantDate.AddDays(1);
            importantDate = importantDate.AddMonths(1);
            importantDate = importantDate.AddYears(1);
            Console.WriteLine("The new important day:            {0}", importantDate);
            Console.WriteLine("The new important day ToString(): {0}", importantDate.ToString());

            // short long are integers

            // strings
            Console.WriteLine();
            Console.WriteLine("############### Strings        ##############################");
            string aString = "This is a random string";
            Console.WriteLine("aString is           :   {0} characters long", aString.Length);
            Console.WriteLine("aString contains 'is':   {0}", aString.Contains("is"));
            Console.WriteLine("Index of 'This' is   :   {0}", aString.IndexOf("This"));
            Console.WriteLine("Index of 'is' is     :   {0}", aString.IndexOf("is"));

            Console.WriteLine("Uppercase : {0}", aString.ToUpper());
            Console.WriteLine("Lowercase : {0}", aString.ToLower());


            // Console.ReadLine();  // used to be a thing
        }

    }
}