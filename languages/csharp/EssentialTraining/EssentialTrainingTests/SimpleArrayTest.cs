using System;
using Xunit;
using EssentialTraining;

namespace EssentialTrainingTests
{
    public class SimpleArrayTest
    {

        [Fact]
        public void TestInstantiation()
        {
            var testInstance = new SimpleArray();
            Assert.Equal(4, testInstance.GroceryList.Length);
            Assert.Equal("Apples", testInstance.GroceryList[0]);
        }

        [Fact]
        public void TestToString()
        {
            var testInstance = new SimpleArray();
            Assert.StartsWith("There are", testInstance.ToString());
        }
    }
}

