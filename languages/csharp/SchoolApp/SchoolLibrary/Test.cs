using System;

namespace SchoolLibrary
{


    public class Test
    {
        private const string V = "Freshman";

        public Test()
        {
            Student student = new Student();
            student.FirstName = "John";
            student.LastName = "Smith";
            student.Email = "jsmith@test.com";
            student.GradeLevel = Student.GradeLevels.Freshman;

            Teacher teacher = new Teacher();

            teacher.Subject = "Geography";

            var gpaTeacher = teacher.ComputeGradeAverage();
            var gpaStudent = student.ComputeGradeAverage();
            Console.WriteLine("The teacher's GPA is: " + gpaTeacher);
            Console.WriteLine("The student's GPA is: " + gpaStudent);

        }

    }
}
