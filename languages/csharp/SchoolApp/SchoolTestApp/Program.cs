using System;
using SchoolLibrary;
namespace SchoolTestApp
{
    class Program
    {
        static void Main(string[] args)
        {
            Console.WriteLine("Hello World!");

            Student student = new Student();
            student.FirstName = "John";
            student.LastName = "Smith";
            student.Email = "jsmith@test.com";
            student.GradeLevel = Student.GradeLevels.Freshman;

            Teacher teacher = new Teacher();

            teacher.Subject = "Geography";

            var gpaTeacher = teacher.ComputeGradeAverage();
            var gpaStudent = student.ComputeGradeAverage();
            var msgStudent = student.SendMessage("This is a test message from a student.");
            Console.WriteLine("The teacher's GPA is: " + gpaTeacher);
            Console.WriteLine("The student's GPA is: " + gpaStudent);
            Console.WriteLine("The test messge: " + msgStudent);

        }
    }
}
