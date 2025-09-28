using System;
using SchoolLibrary;



namespace SchoolFormApps
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Hello World!");
            var testSchool = new SchoolLibrary.School();
            testSchool.Name = "FSUS";
            testSchool.TwitterAddress = "@FSUS";
            Console.WriteLine(testSchool.Name);


            var teacher = new Teacher();
            float gpa = teacher.ComputeGradeAverage();
            Console.WriteLine ("This is the GPA: {0}", gpa);

            string msg = teacher.SendMessage("This is a test message from a teacher. ");
            Console.WriteLine(msg);
        }
    }
}
