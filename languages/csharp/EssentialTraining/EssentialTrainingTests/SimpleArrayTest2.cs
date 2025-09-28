using System;
using Xunit;
using EssentialTraining;

namespace EssentialTrainingTests
{
    public class SimpleArrayTest2
    {

        [Fact]
        public void TestInstantiation2()
        {
            var instance = new SimpleArray2();
            Assert.Equal(4, instance.GroceryList2.Length);
            Assert.Equal("Apple", instance.GroceryList2[0]);
        }

        [Fact]
        public void TestToString2()
        {
            var instance = new SimpleArray2();
            Assert.StartsWith("There are", instance.ToString());
        }
    }
}