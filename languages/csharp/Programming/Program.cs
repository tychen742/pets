﻿// See https://aka.ms/new-console-template for more information
using System;
using System.Globalization;
using System.Collections.Generic;
// using System.Globalization;
using System.Runtime.InteropServices;
using System.Linq;

// using print = System.Console.WriteLine;


internal class Program
{
    private static void Main(string[] args)
    {
        // ### 0. hello world
        Console.WriteLine("Hello, World!");
        Console.WriteLine("This is C#");

        // ### 1. math
        // Console.WriteLine("1+1 = ", 1 + 1);
        Console.WriteLine("1+1 = " + 1 + 1);
        Console.WriteLine("1+1 = " + (1 + 1));

        // ### 2. string
        // ### variable: variable vs. literal
        string name = "T.Y. Chen, Ph.D.";
        Console.WriteLine("My name is " + name);
        Console.WriteLine("My name is ", name);     // use + to combine text and variable

        // ### data type: string vs char
        // string oneLetter = 'A'; ### error: cannot convert char to string
        // Console.WriteLine(oneLetter);

        // ### data type: int
        // const int numA = 99;
        // Console.WriteLine(numA);

        // ### 2. string: concatenate
        // ### variable with string type 
        string fName = "T.Y.";
        string lName = "Chen";
        string fullName = fName + lName;
        Console.WriteLine(fullName);


        // ##### C$ output: #####
        // ### 3. output: formatted string (place holder) 
        // output strings vs. output literal
        fName = "T.Y.";
        lName = "Chen";
        string full_Name = "My name is {fName} {lName}";
        Console.WriteLine(full_Name);

        // ### boolean values
        // ### 
        Console.WriteLine("Is it true or false: " + (1 == 1));


        // BMI https://www.cdc.gov/healthyweight/assessing/bmi/childrens_BMI/childrens_BMI_formula.html#:~:text=The%20formula%20for%20BMI%20is,to%20convert%20this%20to%20meters.&text=When%20using%20English%20measurements%2C%20pounds,2%20to%20kg%2Fm2.
        // Formula: weight (kg) / [height(m)]^^2
        // FOrmula: 703 * weight(lbs) / [height (in)]^^2
        // BMI over 30 is too high for surgery

        // ### input: Read, ReadLine
        // ### type conversion
        string userInput;
        int myWeight;
        double myHeight;
        // int myWeight = 70;
        // double myHeight = 1.75;

        Console.WriteLine("Enter your weight: ");
        userInput = Console.ReadLine();
        myWeight = Convert.ToInt32(userInput);
        // myWeight = Convert.ToInt32(Console.ReadLine()); 

        Console.WriteLine("Enter your height: ");
        userInput = Console.ReadLine();
        myHeight = Convert.ToDouble(userInput);
        // myHeight = Convert.ToDouble(Console.ReadLine())   

        double bmi = myWeight / (myHeight * myHeight);

        // ### if statement
        if (bmi >= 30)
        {
            Console.WriteLine("Your BMI, " + bmi + ", is too high for surgery.");
        }
        else
        {
            Console.WriteLine("Your BMI, " + bmi + ", is not too high for surgery.");
        }

        // ### ternary statement (if statement shorthand)
        string result = bmi >= 30 ? "Your BMI, " + bmi + ", is too high for surgery." : "Your BMI, " + bmi + ", is not too high for surgery.";
        Console.WriteLine(result);
        // ### Console.Clear method
        // Clears the console buffer and corresponding console window of display information.
        Console.Clear();

        int temp = 15;
        switch (temp)
        {
            case < 10:
                Console.WriteLine("Stay home.");
                break;
            case > 10:
                Console.WriteLine("Go to school!");
                break;
            default:
                Console.WriteLine("Take a day on the beash!");
                break;
        }


        // while loop
        int num = 0;
        while (num < 10)
        {
            Console.Write(num + " ");
            num = num + 1;
        }

        Console.WriteLine();
        // do/while loop

        int j = 1;
        do
        {
            Console.Write(j + " ");
            j += 1;
        }
        while (j < 10);
        Console.WriteLine();


        // for loop 
        for (int x = 0; x < 10; x++)
        {
            Console.Write(x + " ");
        }


        Console.WriteLine("");

        for (int num1 = 2; num1 < 10; num1++)
        {
            for (int num2 = 2; num2 < 10; num2++)
            {
                Console.Write(num1 * num2 + "\t");
            }
            Console.WriteLine();

        }


        // foreach 
        string[] fruits = { "Apple", "Banana", "Cherry" };
        foreach (string fruit in fruits)
        {
            Console.Write(fruit + "  ");
        }

        Console.WriteLine();

        // conitnue
        foreach (string fruit in fruits)
        {
            if (fruit == "Banana")
            {
                continue;
            }
            Console.Write(fruit + "  ");
        }
        Console.WriteLine();

        // break
        foreach (string fruit in fruits)
        {
            if (fruit == "Banana")
            {
                break;
            }
            Console.Write(fruit + "  ");
        }
        Console.WriteLine();

        // while 
        int numA = 0;
        while (numA < 10)
        {
            Console.Write(numA + " ");
            numA++;
        }
        Console.WriteLine();

        // while continue
        int numB = 0;
        while (numB < 10)
        {
            if (numB == 5)
            {
                numB++;
                continue;
            }
            Console.Write(numB + " ");
            numB++;
        }
        Console.WriteLine();

        // while break
        int numC = 0;
        while (numC < 10)
        {
            if (numC == 5)
            {
                break;
            }
            Console.Write(numC + " ");
            numC++;
        }
        Console.WriteLine();


        // Arrays
        // string[] cars;
        string[] cars = { "Audi", "BMW", "Cadillac" };
        Console.WriteLine("reference with index:\t" + cars[1]);

        Array.Resize(ref cars, cars.Length + 1);

        // string car = "Chevorlett";
        // string[] carsNew = cars.Append(car);
        cars[3] = "new car";

        Console.Write("added \"new car\":\t");
        foreach (string car in cars)
        {
            Console.Write(car + " ");
        }
        Console.WriteLine();


        int[] nums = new int[5];
        nums = new int[] { 9, 2, 7, 4, 5 };
        Console.Write("for loop:    ");
        for (int i = 0; i < nums.Length; i++)
        {
            Console.Write(nums[i] + " ");
        }
        Console.WriteLine();

        Console.Write("foreach:     ");
        foreach (int ele in nums)
        {
            Console.Write(ele + " ");
        }
        Console.WriteLine();

        Array.Sort(nums);
        Console.Write("sort:        ");
        foreach (int ele in nums)
        {
            Console.Write(ele + " ");
        }
        Console.WriteLine();

        Console.WriteLine("Linq Max:\t" + nums.Max());

        Array.Resize(ref nums, nums.Length + 1);
        nums[nums.Length - 1] = 10;
        // Console.WriteLine("Linq Max:\t" + nums.Append(10).ToList());
        Console.WriteLine("Linq Max after adding:\t" + nums.Max());

        // Arrays are obsolete 
        List<int> numbers = new List<int>();
        for (int i = 0; i < 100; i++)
        {
            // numbers.Append<int>(i);
            numbers.Add(i);

            // }
            // numbers.Append(1).ToList();

        }
        foreach (int i in numbers)
        Console.Write(numbers[i] + " ");
    }
}

// Linq
namespace MyApplication
{
    class Program
    {
        static void Main2(string[] args)
        {
            int[] nums = { 1, 2, 3, 4, 5 };
            Console.WriteLine(nums.Max());
        }
    }
}