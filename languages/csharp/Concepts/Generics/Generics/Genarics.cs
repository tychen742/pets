using System;
using System.Collections.Generic;

namespace Generics
{
    public class GenericClass<T>
    {
        private T genericMemberVariable; // generic member variable
        public GenericClass(T value) // constructor
        {
            genericMemberVariable = value;
        }

        public T GenericMethod(T genericParameter)
        {
            Console.WriteLine("Parameter type: {0}, value: {1}", typeof(T).ToString(), genericParameter);
            Console.WriteLine("Return type: {0}, value: {1}", typeof(T).ToString(), genericMemberVariable);
            return genericMemberVariable;
        }

        public T genericProperty {get; set;}
    }


    public class Program
    {
        private class AnotherGenericClass { }

        static void Main(string[] args)
        {
            // Generic Class
            GenericClass<int> intGenericClass = new GenericClass<int>(100);
            int value = intGenericClass.GenericMethod(200);
            Console.WriteLine(intGenericClass.genericProperty = 77);

            // Generic List
            List<int> list1 = new List<int>();
            List<string> list2 = new List<string>;
            List<AnotherGenericClass> list3 = new List<AnotherGenericClass>();
            list1.Add(100000);
            list2.Add("Generic James");
            Console.WriteLine(list2[0]);
        }
    }
}
