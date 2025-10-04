using System;
using System.Linq;

namespace LINQ
{

    class Student
    {
        public int StudentID { get; set; }
        public string StudentName { get; set; }
        public int Age { get; set; }
    }


    class Program
    {
        static void Main(string[] args)
        {
            Student student = new Student(); // initiate 
            Student[] studentArray = {
                new Student(){StudentID = 1, StudentName="Apple", Age = 16},
                new Student(){StudentID = 2, StudentName="Ben", Age = 17},
                new Student(){StudentID = 3, StudentName="Candace", Age = 18},
                new Student(){StudentID = 4, StudentName="Daniel", Age = 19},
                new Student() {StudentID=5, StudentName = "Ellie", Age = 20},
                new Student() {StudentID=6, StudentName="Frank", Age = 21},
                new Student() {StudentID=7, StudentName= "Gabriel", Age = 22}
            };

            // list, conentional 
            Student[] oldStudents1 = new Student[10];
            int i = 0;
            foreach (Student std in studentArray)
            {
                if (std.Age > 20)
                {
                    oldStudents1[i] = std;
                    i++;
                    //Console.WriteLine("ID: {0}, Name: {1}, Age: {2}", std.StudentID, std.StudentName, std.Age);
                }
            }

            // LINQ
            Student[] oldStudnets2 = studentArray.Where(s => s.Age > 20).ToArray();
        }
    }
}
