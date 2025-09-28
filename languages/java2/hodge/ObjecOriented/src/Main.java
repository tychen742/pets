public class Main {

    public static void main(String[] args) {

        ShapeRectangle rec = new ShapeRectangle("purple", 5, 2);
        ShapeCircle cir = new ShapeCircle("blue", 4);

//        Shape shape = new Shape("red");
        System.out.println("Rectangle Area: " + rec.getArea());
        System.out.println("Circle Area: " + cir.getArea());
        System.out.println(rec.draw());
        System.out.println(cir.draw());

        System.out.println( );

        Shape shape = new ShapeCircle("green", 4);
        System.out.println("Shape area: " + shape.getArea());
        System.out.println(shape.draw());


        InheritTeacherMath mathTeacher = new InheritTeacherMath(30, "Clear Lake High", 6);
        System.out.println(mathTeacher.numberOfStudents);
        System.out.println(mathTeacher.favoriteNumber);
        System.out.println(mathTeacher.school);
        System.out.println(mathTeacher.getRole());
        System.out.println(mathTeacher.getClass());

        InheritTeacher teacher = new InheritTeacher(400,"Santa Fe High School");
        System.out.println(teacher.numberOfStudents);
        System.out.println(teacher.school);
//        System.out.println(teacher.favoriteNubmer);


        // Polymorphism : Animal
        MethodOverridingAnimal a = new MethodOverridingAnimal();
        MethodOverridingPig p = new MethodOverridingPig();
        MethodOverridingCow c = new MethodOverridingCow();

        System.out.println(a.sound());
        System.out.println(p.sound());
        System.out.println(c.sound());


        //// Method Overloading
        MethodOverloadingOperation mol  = new MethodOverloadingOperation();
        System.out.println(mol.add(2, 3));
        System.out.println(mol.add(2, 3, 4));
        System.out.println(mol.add(2, 3, 4 ,5 ));

    }

}
