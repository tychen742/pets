using System;
using Xunit;
using EssentialTraining;

namespace EssentialTrainingTests
{
    public class Class1Test
    {
        [Fact]
        public void Test1()
        {
            var testInstance = new Class1();
            var testResult = testInstance.AddTwo(1, 2);
            Assert.Equal(3, testResult);
        }
    }
}
