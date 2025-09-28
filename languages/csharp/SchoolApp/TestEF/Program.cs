using System;
using SchoolLibrary;
namespace ContosoPets
{
    public class Program
    {
        public static void Main(string[] args)
        {
            var school = new School("Highland High", "123-1234");
            school.Address = "123 Main St.";
            school.City = "Athens";
            school.State = "OH";
            school.Zip = "45701";
            school.TwitterAddress = "@HighlandHighSchool";

            Console.WriteLine(school.ToString());
        }
    }
}
