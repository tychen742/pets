public class Main {

    public static void main(String[] args) {

        // Array: 31, 32, 33, 34, 35
//        // int[] numArray;
//        int[] numArray = new int[5];
//        numArray[0] = 31;
//        numArray[1] = 32;
//        numArray[2] = 33;
//        numArray[3] = 34;
//        numArray[4] = 35;
//        // in one line:
//        int[] numArray2 = {35, 32, 33, 34, 31};
//        // string array
//        String[] myFavCandyBars = {"Twix", "Hershey's", "Crunch"};
//        System.out.println("Index 2: " + myFavCandyBars[2]);
//        myFavCandyBars[2] = "Butterfinger";
//        System.out.println("Index 2: " + myFavCandyBars[2]);
//        // instance method getting array value of an index
//        System.out.println("Length: " + myFavCandyBars.length);
//        System.out.println(Array.get(myFavCandyBars, 2));
//        // class calling, not instance of class; static methods
//        // Array class method getting array value of an index
//        Arrays.sort(numArray); // Arrays class
//        System.out.println(numArray); // gives memory address because arrays are reference type
//        System.out.println(Arrays.toString(numArray));
//
//        //// Scanner class
//        System.out.println("Enter a word:"); // sc only takes in first word
//        Scanner sc = new Scanner(System.in); // System.in: where the input is
//        String scanInput = sc.nextLine(); // what gets written at System.in, the console
//        // using sc.next here will cause nextInt trouble: new line problem
//        System.out.println(scanInput);
//        // scanning for integer
//        System.out.println("Enter an integer: ");
//        int userNumber = sc.nextInt();
//        System.out.println("The user numer is: " + userNumber);
//        // double
//        System.out.println("Enter a double: ");
//        double userNumber2 = sc.nextDouble();
//        System.out.println("The double number is: " + userNumber2);
//
//        ////String class
//        String userInput = "entertainment";
//        String uppercased = userInput.toUpperCase();
//        System.out.println(uppercased);
//        System.out.println(userInput);
//        char firstCharacter = userInput.charAt(0);
//        System.out.println(firstCharacter);
//        System.out.println("Contains enter: " + userInput.contains("enter"));
//        System.out.println("Contains enter: " + userInput.contains("Enter"));
//        System.out.println("Contains enter: " + userInput.contains("Enter".toLowerCase()));
//
//        // Hello World
//        System.out.println("Hello World");  // System:class; out: Property;
//        // println: function
//        System.out.println("TY Chen");
//        System.out.println("Some more stuff");
//
//        // Create Objects
//        Car myCar = new Car(25.5,
//                "1BC32E",
//                Color.BLUE,
//                true);
//        Car sallyCar = new Car(13.9,
//                "3D20BN",
//                Color.BLACK,
//                false);
//        Car anotherCar = new Car(31.9,
//                "SSSSSS",
//                Color.RED,
//                true);
//        System.out.println("My Car's License Plate: " + myCar.licencePlate);
//        System.out.println("Sally's License Plate: " + sallyCar.licencePlate);
//        // change color
//        System.out.println(myCar.paintColor.toString());
//        myCar.changePaintColor(Color.RED);
//        System.out.println(myCar.paintColor.toString());
//
//        ///// call by value vs. call by reference. Java has only call by value
//        double myCarSpeed = 50;
//        myCar.speedingUp(myCarSpeed);
//        System.out.println(myCarSpeed); // ????????????
//        myCarSpeed = myCar.speedingUp(myCarSpeed);
//        System.out.println(myCarSpeed);
//
//        ///// Challenge
//        String s = "dog";
//        String replaceF = s.replace("d", "e");
//        System.out.println(replaceF);
//        Dog dog1 = new Dog("doggo", 10);
//        System.out.println(dog1);
//        System.out.println("The name of dog1 is: " + dog1.name);
//        dog1.bark();
//        System.out.println(dog1.getDogYears());
//        dog1.fetch();
//        dog1.fetch();
//        dog1.fetch();
//        dog1.fetch();
//
//        //// Conditional
//        System.out.print("Enter an age: ");
//        Scanner input = new Scanner(System.in);
//        int age = input.nextInt();
//        if (age >= 0 && age <= 5) {
//            System.out.println("Baby");
//        } else if (age >= 6 && age <= 11) {
//            System.out.println("Kid");
//        } else if (age >= 12 && age <= 17) {
//            System.out.println("Teen");
//        } else if (age >= 18) {
//            System.out.println("Adult");
//        } else {
//            System.out.println("Invalid");
//        }
//        System.out.println("Thanks for using this program.");
//        System.out.println();
//
//        ///// loops
//        // while loop
//        int x = 3;
//        while (x > 0) {
//            System.out.println("Current value of x: " + x);
//            x = x - 1;
//        }
//        System.out.println("Final x value: " + x);
//        System.out.println();
//        // do while
//        int y = 3;
//        do {
//            System.out.println("Current y: " + y);
//            y = y - 1;
//        } while (y > 0);
//        System.out.println("Final y: " + y);
//        System.out.println();
//        // for loop
//        for (int z = 3; z > 0; z--) {
//            System.out.println("Curent value of z: " + z);
//        }
//
//        //// Libraries: java.lang, .util, .net
//        // math
//        double power = Math.pow(5, 3); // Math class, use methods directly, no objects needed
//        System.out.println(power);
//        double squareRoot = Math.sqrt(64);
//        System.out.println(squareRoot); // Math class; .lang package
//        Random rand = new Random();
//        int randomNumber = rand.nextInt();
//        System.out.println(randomNumber);
//        int randomNumberWithBound = rand.nextInt(10); // 0-9
//        System.out.println(randomNumberWithBound);
//
//        ///// Coin flippint ///// break point for debugging
//        Coin c = new Coin();
//        System.out.println("Initail: " + c.getFaceUp());
//        for (int i = 0; i < 10; i++) {
//            c.flip();
//            System.out.println("After Flip: " + c.getFaceUp());
//        }

        ///// Dice rolling
        Dice dice = new Dice();
        System.out.println("Previous: " + dice.previousRoll);
        System.out.println("The dice gives the number: " + dice.roll());
        System.out.println("Previous: " + dice.previousRoll);
        System.out.println("The dice gives the number: " + dice.roll());
        System.out.println("Previous: " + dice.previousRoll);

        // Create dice:
        System.out.println(Dice.sidesOfDice);
        Dice d = new Dice();
        Dice otherDice = new Dice();

        // Rolling two 6-sided dice:
        System.out.println(        );
        System.out.println("Six Sides:");
        for (int i = 0; i < 10 ; i++) {
            System.out.println("First Die: " + d.roll());
            System.out.println("Second Die: " + otherDice.roll());
        }

        // Change sides of Dice
        Dice.changeNumSidesOfDice(8);
        System.out.println("Eight Sides:");
        for (int i = 0; i < 10 ; i++) {
//            System.out.println("First Die: " + d.roll());
            System.out.println("Second Die: " + otherDice.roll());
        }

        // Retrieving face value
        System.out.println("Face Value d: " + d.getFaceValue());
        System.out.println("Face Value other: " + otherDice.getFaceValue());


        ///// Bank Account
//        BankAccount ba = new BankAccount(100, 100);
//        ba.withdraw(101);
//        ba.deposit(100);
//        // ba.account_balance
//        ba.deposit(-100);
//        int balance = ba.getAccount_balance();
//        System.out.println(balance);
//
//        /// Insect
//        Insect insect = new Insect(2, 6);
//        InsectSpider spider = new InsectSpider(5, true);
//        InsectCricket insectCricket = new InsectCricket(2, 2.5);
//        insect.says();
//        insect.crawl();
//
//        spider.says();
//        spider.crawl();
//
//        insectCricket.says();
//        insectCricket.crawl();
//        insectCricket.jump();
//
//        if (spider instanceof Insect && spider instanceof InsectSpider) {
//            System.out.println("Spider is an insect");
//        }
//
//        ///// Pet
//        PetDog d = new PetDog();
//        PetCat cat = new PetCat();
//
//        if (cat instanceof Pet) {
//            cat.play();
//        }
//        if (d instanceof Pet) {
//            d.play();
//        }
//
//        Pet p;
//        Random rand1 = new Random();
//        int num = rand.nextInt(2);
//        if (num == 0) {
//            p = new PetDog();
//        } else {
//            p = new PetCat();
//        }
//        p.play();
//
//        ///// Lamda
//     //   Answerable phone = () -> { return "Hello" ;};
//        Answerable phone = () -> "Hello"; // return is automatic
//        System.out.println(phone.answer());
//
//        Predicate isOdd = n -> n % 2 != 0;
//        System.out.println(isOdd.test(2));
//
//        Predicate isEven = n -> n % 2 == 0;
//        System.out.println(isEven.test(2));


        ///// Strings
        String a = "aaa";
        String b = new String ("bbb");
        String c = a+b;
        System.out.println(c);
        String strd = a.concat(b);
        System.out.println(strd);
        StringBuilder sb = new StringBuilder ("AAA");
        sb.append("BBB");
        sb.append("CCC");
        System.out.println(sb);
        sb.insert(3, "DDD");
        System.out.println(sb);
        sb.delete(0,2);
        System.out.println(sb);

    }
}