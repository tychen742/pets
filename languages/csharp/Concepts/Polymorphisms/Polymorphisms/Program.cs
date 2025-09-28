using System;
using System.Collections.Generic;

namespace Polymorphisms
{
    // OOP: 1. Polymorphism, 2. Inheritance, 3. Encapsulation, and 4. Abstraction
    // Polymorphism: One interface, different functions.
    public class Employee
    {
        public virtual void CalculateSalary(int hourlyRate, int numOfHours)
        {
            Console.WriteLine(hourlyRate * numOfHours);
        }
    }

    public class FullTimeEmployee : Employee
    {
        //int numOfHours = 40;
        public override void CalculateSalary(int hourlyRate, int numOfHours)
        {
            Console.WriteLine(hourlyRate * 40);
        }
    }

    public class Contractor : Employee
    {
        public override void CalculateSalary(int hourlyRate, int numOfHours)
        {
            base.CalculateSalary(hourlyRate, numOfHours);
        }
    }


    class Program
    {
        static void Main(string[] args)
        {
            var salaries = new List<Employee>
            {
                new FullTimeEmployee(),
                new Contractor()
            };
            foreach (var sal in salaries)
            {
                sal.CalculateSalary(100, 50);
            }
            //FullTimeEmployee fullTimeEmployee = new FullTimeEmployee();
            //fullTimeEmployee.CalculateSalary(100, 50);

            //Contractor contractor = new Contractor();
            //contractor.CalculateSalary(100, 50);
        }
    }
}
