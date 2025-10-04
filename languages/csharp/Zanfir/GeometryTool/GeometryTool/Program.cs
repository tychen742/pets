﻿using System;

namespace GeometryTool
{
    class Program
    {
        static void Main(string[] args)
        {
            var square = new Square() { Width = 2 };
            var triangle = new Triangle() { Bases = 2, Height = 5 };

            //Console.WriteLine(square.GetArea());
            //Console.WriteLine(triangle.GetArea());
            square.Display();
            triangle.Display();
                
        }

        abstract class Shape
        {
            public abstract int GetArea();
            public void Display()
            {
                Console.WriteLine("The area is {0}", GetArea());
            }
        }

        class Square : Shape
        {
            public int Width;

            public override int GetArea()
            {
                return Width * Width;
            }
        }

        class Triangle : Shape
        {
            public int Bases;
            public int Height;

            public override int GetArea()
            {
                return Bases * Height / 2;
            }
        }
    }
}
