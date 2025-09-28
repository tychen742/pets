using System;
using System.Collections.Generic;

namespace SchoolTracker
{
    enum School
    {
        Hagwarts,
        Harvard,
        MIT
    }

    class Program
    {

        static List<Student> students = new List<Student>();

        static void Main(string[] args)
        {

            Logger.Log("Tracker started", priority: 0);

            PayRoll payroll = new PayRoll();
            payroll.PayAll();
            //var studentGrades = new int[10] { 10, 20, 30, 40, 50, 60, 70, 80, 90, 100};
            //foreach (var studentGrade in studentGrades)
            //{
            //    Console.WriteLine(studentGrade);
            //}

            //Console.Write("Number of students: ");
            //var studentCount = int.Parse(Console.ReadLine());

            //var nameArray = new string[studentCount];
            //var gradeArray = new int[studentCount];

            //for (int i = 0; i< studentCount; i++)
            //{
            //    Console.Write("Enter student name: ");
            //    var name = Console.ReadLine();
            //    nameArray[i] = name;

            //    Console.Write("Enter student grade: ");
            //    var grade = int.Parse(Console.ReadLine());
            //    gradeArray[i] = grade;

            //}

            //for (int i = 0; i < studentCount; i++)
            //{
            //    Console.WriteLine($"Studennt {nameArray[i]} has a grade of {gradeArray[i]}.");
            //}

            //var studentNames = new List<string>();
            //var studentGrades = new List<int>();


            //var adding = true;
            //while (adding == true)
            //{
            //    Console.Write("Student name: ");
            //    studentNames.Add(Console.ReadLine());
            //    Console.Write("Student grade: ");
            //    studentGrades.Add(int.Parse(Console.ReadLine()));

            //    Console.Write("Add more? (y/n): ");
            //    if (Console.ReadLine().ToLower() != "y")
            //    {
            //        adding = false;
            //    }
            //}

            //for (int i = 0; i < studentNames.Count; i++)
            //{
            //    Console.WriteLine($"{studentNames[0]} has a grade of {studentGrades[i]}.");
            //}

            //var student = new Student();
            //student.Name = "Aaron";
            //Console.WriteLine(student.Name);


            var adding = true;
            while (adding)
            {
                try
                {
                    Logger.Log("Adding new student...");

                    var newStudent = new Student();

                    newStudent.Name = Util.Console.Ask("Student name: ");
                    newStudent.Grade = Util.Console.AskInt("Student grade: ");
                    newStudent.School = (School)Util.Console.AskInt("School name (type the corresponding number: \n 0: Hogwarts High \n 1: Harvard \n 2: MIT): ");
                    newStudent.Birthday = Util.Console.Ask("Student birthday: ");
                    newStudent.Address = Util.Console.Ask("Student address: ");
                    newStudent.Phone = Util.Console.AskInt("Student phone number: ");

                    students.Add(newStudent);
                    Student.Count++;
                    Console.WriteLine($"Student count: {Student.Count}.");

                    Console.Write("Add more? (y/n): ");
                    if (Console.ReadLine().ToLower() != "y")
                    {
                        adding = false;
                    }
                }
                catch (FormatException msg)
                {
                    Console.WriteLine(msg.Message);
                }
                catch (Exception)
                {
                    Console.WriteLine("Error adding new student. Please try again.");
                }

            }

            //ShowGrade("Jim");

            foreach (var student in students)
            {
                Console.WriteLine($"{student.Name} has a grade of {student.Grade}.");
            }

            Import();

            Exports();

            static void ShowGrade(string name)
            {
                var found = students.Find(student => student.Name == "Jim");
                Console.WriteLine("{0}'s Grade: {1}", found.Name, found.Grade);
            }

        }

        static void Import()
        {
            var importedStudent = new Student("Jenny", 100, "12-12-2000", "123 Main St.", 123454321); ;
            //Console.WriteLine(importedStudent.Name);
        }

        static void Exports()
        {
            foreach (var student in students)
            {
                switch (student.School)
                {
                    case School.Hagwarts:
                        Console.WriteLine("Exporting to Hogwarts");
                        break;
                    case School.Harvard:
                        Console.WriteLine("Exporting to Harvard");
                        break;
                    case School.MIT:
                        Console.WriteLine("Exporting to MIT");
                        break;
                }
            }
        }
    }


    class Member
    {
        public string Name { get; set; }
        public string Address { get; set; }
        public int Phone { get; set; }
    }


    class Student : Member
    {
        public static int Count { get; set; } = 0;

        public int Grade { get; set; }
        public string Birthday { get; set; }
        public School School { get; set; }

        public Student(string name, int grade, string birthday, string address, int phone)
        {
            //Console.WriteLine("Constructor");
            Name = name;
            Grade = grade;
            Birthday = birthday;
            Address = address;
            Phone = phone;
        }

        public Student()
        {

        }
    }
}
