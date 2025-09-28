using System;

namespace Abstracts {
    class Program {
        static void Main (string[] args) {
            Console.WriteLine ("Hello World! in class Program");
            Rectangle rect = new Rectangle (3, 5);
            Console.WriteLine (rect.area ());

            Shape rect2 = new Rectangle (3, 5);
            Shape tri = new Triangle (3, 5);
            Console.WriteLine (rect2.area() + "  " + tri.area());

            Abstract2 abstract2 = new Abstract2();
            Console.WriteLine(Abstract2.Abc());
        }
    }
// test

    abstract class Shape {
        public abstract double area ();

        public void sayHi () { // Abstract class can contain real methods
            // Interface can contain only abstract properties and methods that do things
            Console.WriteLine ("Hello"); // subclass don't have to implement
        }
    }

    public interface ShapeItem {
        double area (); // everyone inherits ShapeItem must implement area
    }

    class Rectangle : Shape {
        private double _length;
        private double _width;
        public Rectangle (double length, double width) {
            _length = length;
            _width = width;
        }

        public override double area () {
            return _length * _width;
        }
    }

    class Triangle : Shape {

        private double _theBase;
        private double _height;
        public double TheBase { get => _theBase; set => _theBase = value; }
        public double Height { get => _height; set => _height = value; }

        public Triangle (double theBase, double height) {
            _theBase = theBase;
            _height = height;
        }

        // private override double GetGetarea () {
        //     return (TheBase * Height / 2);
        // }

        public override double area () => (TheBase * Height / 2);
    }

}