using System;
using Xunit;
using EssentialTraining;

namespace EssentialTrainingTests
{
    public class AwesomeSauceTest
    {

        [Fact]
        public void isSauceAwesomeTest()
        {
            var testInstance = new AwesomeSauce();
            testInstance.Sauces.Add("Tabasco");
            testInstance.Sauces.Add("Cholula");
            testInstance.Sauces.Add("Trailer Trash");

            // expect true
            Assert.True(testInstance.IsSauceAwesome("Trailer Trash"));
            // expect false
            Assert.True(testInstance.IsSauceAwesome("Ketchup"));

        }

        public AwesomeSauceTest()
        {
           
           
        }
    }
}
