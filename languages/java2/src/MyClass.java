import java.io.File;
import java.io.FileWriter;
import java.io.IOException;
import java.time.LocalDate;
import java.time.LocalDateTime;
import java.time.LocalTime;
import java.util.*;
import java.util.function.Consumer;

public class MyClass {
    public static void main(String[] args) {

        int myNum = 666;
        float myFloatNum = 5.99f;
        char myLetter = 'D';
        String myString = "Some string";
        String myLetter2 = "F";
        boolean myBool = true;
        byte myBite = 127; // -128 - 127

        System.out.println("int myNum: " + myNum);
        System.out.println("float myFloatNum: " + myFloatNum);
        System.out.println("char myLetter: " + myLetter);
        System.out.println("String myString: " + myString);
        System.out.println("myLetter in String type: " + myLetter2);
        System.out.println("boolean myBool: " + myBool);

        int myInt = 999;
        double myDouble = myInt;
        System.out.println("int type: " + myInt);
        System.out.println("casting (widening) myInt to double (myDouble): " + myDouble);
        double myDouble2 = 999.99;
        int myDouble2ToInt = (int) myDouble2; // explicit casting
        System.out.println("casting (narrowing) myDouble2 into int: " + myDouble2ToInt);

        String[] cars = {"Toyota", "Ford", "Honda", "Tesla"};
        for (int i = 0; i < cars.length; i++) {
            System.out.println(cars[i]);
        }
        for (String car : cars) {
            System.out.println(car + " 222");
        }

        for (int i = 1; i < 10; i++) {

//            System.out.print(i + "w \t");
            System.out.println();
            for (int j = 1; j < 10; j++) {
                System.out.print(i * j + "\t");
            }
        }
    }
}

class SomeClass {
    static void myMethod(String firstName) {
        System.out.println(firstName + " Chen");
    }

    static int addTwo(int x, int y) {
        return (x + y);
    }

    static double plusMethod(double x, double y) {
        return x + y;
    }

    static int plusMethod(int x, int y) {
        return x + y;
    }

    public static void main(String[] args) {
        myMethod("TY");
        myMethod("Tsangyao");
        myMethod("T.Y.");
        int added = addTwo(100, 200);
        System.out.println("The total is: " + added);
        int addedNumberInt = plusMethod(5, 500000);
        System.out.println("addedNumberInt: " + addedNumberInt);
        double addedNumberDouble = plusMethod(5.5, 5.5);
        System.out.println("addedNumberDouble: " + addedNumberDouble);
        int sum = sum(1000);
        System.out.println("sum (print in main()): " + sum);
    }

    static int sum(int n) {
        int sum = Recursion.sum(n);
        System.out.println("sum (print in method): " + sum);
        return sum;
    }
}

class Recursion {
    public static void main(String[] args) {
        int result = sum(10);
        System.out.println("The result: " + result);
    }

    public static int sum(int k) {
        if (k > 0) {
            return k + sum(k - 1);
        } else {
            return 0;
        }
    }

}


class EnumClass {
    enum Level {
        LOW,
        MEDIUM,
        HIGH
    }

    public static void main(String[] args) {
        Scanner myObj = new Scanner(System.in);
        System.out.print("Enter level (low, medium, high): ");

        String aLevel = myObj.nextLine();

//        Level myVar = Level.+ aLevel;

//        Level myVar = Level.MEDIUM;
        System.out.println(aLevel);
    }
}

class Date {
    public static void main(String[] args) {
        LocalDate myObj = LocalDate.now();
        System.out.println(myObj);
    }
}

class Time {
    public static void main(String[] args) {
        LocalTime myObj = LocalTime.now();
        System.out.println(myObj);
        LocalDateTime now = LocalDateTime.now();
        System.out.println(now);
    }
}

class ArrayListClass {
    public static void main(String[] args) {
        ArrayList<String> cars = new ArrayList<String>();
        cars.add("Volvo");
        cars.add("Toyota");
        cars.add("Honda");

        System.out.println(cars);
        System.out.println(cars.get(0));

        cars.set(0, "Jeep");
        System.out.println(cars);
        System.out.println(cars.size());

        for (String car : cars) {
            System.out.println(car);
        }
    }
}

class ArrayListOthers {
    public static void main(String[] args) {
        ArrayList<Integer> myNumbers = new ArrayList<>();
        myNumbers.add(100);
        myNumbers.add(200);
        myNumbers.add(300);

        for (int i : myNumbers) {
            System.out.println(i);
        }
    }
}

class LinkedListClass {
    public static void main(String[] args) {
        LinkedList<String> cars = new LinkedList<>();
        cars.add("Volvo");
        cars.add("Honda");
        cars.add("Ford");
        System.out.println(cars);
    }
}

class HashMapClass {
    public static void main(String[] args) {

        HashMap<String, String> capitalCities = new HashMap<>();
        capitalCities.put("England", "London");
        capitalCities.put("Taiwan", "Taipei");
        capitalCities.put("USA", "Washington DC");
        capitalCities.put("Norway", "Oslo");
        System.out.println(capitalCities);
        System.out.println(capitalCities.get("Taiwan"));
        System.out.println(capitalCities.size());
        for (String i : capitalCities.keySet()) {
            System.out.println(i);
        }
        for (String i : capitalCities.values()) {
            System.out.println(i);
        }
        for (String i : capitalCities.keySet()) {
            System.out.println(i + " \t " + capitalCities.get(i));
        }
    }
}

// ##### HashSet
class HashSetClass {
    public static void main(String[] args) {
        HashSet<String> cars = new HashSet<>();
        cars.add("Volvo");
        cars.add("Toyota");
        cars.add("Honda");
        cars.add("Ford");
        cars.add("Ford");
        cars.add("Ford");
        cars.add("Ford");
        cars.add("Ford");
        cars.add("Ford");
        System.out.println(cars);
        System.out.println("Ford exists: " + cars.contains("Ford"));
        cars.remove("Honda");
        System.out.println(cars);
        System.out.println(cars);
        System.out.println(cars.size());
        int count = 1;
        for (String car : cars) {
            System.out.println(count + " " + car);
            count++;
        }
    }
}

// ##### Iterator
class IteratorClass {
    public static void main(String[] args) {
        // make a collection
        ArrayList<String> cars = new ArrayList<>();
        cars.add("Ford");
        cars.add("Chrysler");
        cars.add("BMW");
        cars.add("Tesla");

        Iterator<String> iterate = cars.iterator();
//        System.out.println("1st item in collection: " + iterate.next());

        while ((iterate.hasNext())) {
            System.out.println(iterate.next());
        }
    }
}

// ##### Exception Handling
class TryCatchCalss {
    public static void main(String[] args) {

        try {
            int[] numbers = {1, 2, 3};
            System.out.println(numbers[2]);
            System.out.println(numbers[10]);
        } catch (Exception e) {
            System.out.println("Something went wrong.");
        }
    }
}


class LamdaClass {
    public static void main(String[] args) {
        ArrayList<Integer> numbers = new ArrayList<>();
        numbers.add(1);
        numbers.add(3);
//        numbers.add(5);
        numbers.add(7);
        numbers.add(9);
        numbers.forEach((System.out::println));
        numbers.forEach((n) -> {
            System.out.println(n);
        });
        Consumer<Integer> method = (n) -> {
            System.out.println(n);
        };
        numbers.forEach(method);
        System.out.println(numbers);
    }
}

interface StringFunction {
    String run(String str);
}

class LamdaClass2 {
    public static void main(String[] args) {
        StringFunction exclaim = (s) -> s + "!";
        StringFunction ask = (s) -> s + "?";
        printFormatted("Hello", exclaim);
        printFormatted("Hello", ask);
    }

    public static void printFormatted(String str, StringFunction format) {
        String result = format.run(str);
        System.out.println(result);
    }
}

class FileClass {
    public static void main(String[] args) {
        try {
            File file = new File("file2.txt");
            if (file.createNewFile()) {
                System.out.println("File created: " + file.getName());
            } else {
                System.out.println("File already exists.");
            }
        } catch (IOException e) {
            System.out.println("Error with file creation!");
            e.printStackTrace();
        }

        try {
            FileWriter writer = new FileWriter("file.txt");
            writer.write("This is a test.");
            writer.close();
        } catch (IOException e) {
            e.printStackTrace();
        }
    }
}