using System;
using System.Text;

namespace SchoolLibrary
{
    public class School
    {
        public string Name { get; set; }
        public string Address { get; set; }
        public string City { get; set; }
        public string State { get; set; }
        public string Zip { get; set; }
        public string PhoneNumber { get; set; }

        Elementary.Volume volume1 = new Elementary.Volume();
        HighSchool.Volume volume2 = new HighSchool.Volume();

        private string _twitterAddress; // backing variable
        public string TwitterAddress
        {
            // mae sure the twitter address starts with @
            get { return _twitterAddress; }
            set
            {
                if (value.StartsWith("@")) // value is the varialbe in get-set context
                {
                    _twitterAddress = value;
                }
                else
                {
                    throw new Exception("Twitter address must begin with @");
                }
            }
        }

        public School()
        {
            Name = "Untitiled School";
            PhoneNumber = "555-5555";
        }
        public School(string SchoolName, string SchoolPhoneNumber)
        {
            Name = SchoolName;
            PhoneNumber = SchoolPhoneNumber;
        }

        //public float AverageThreeScores (float a, float b, float c)
        //{
        //    var result = (a + b + c) / 3;
        //    return result;
        //}

        //## function bodied expression (arrow functions) 
        public static float AverageThreeScores(float a, float b, float c) => (a + b + c) / 3;

        public static int AverageThreeScores(int a, int b, int c) => (a + b + c) / 3;
        //{
        //    var result = (a + b + c);
        //    return result;
        //}

        public override string ToString()
        {
            var sb = new StringBuilder();
            sb.AppendLine(this.Name);
            sb.AppendLine(Address);
            sb.Append(this.City);
            sb.Append(", ");
            sb.Append(State);
            sb.Append(" ");
            sb.AppendLine(Zip);
            sb.AppendLine("Phone#: " + PhoneNumber);
            sb.AppendLine("Twitter: " + TwitterAddress);
            return sb.ToString();
        }
    }
}
