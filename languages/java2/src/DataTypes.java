public class DataTypes {


    final double SHORTPI = 3.14159; // constant

    public static void main(String[] args) { // main method: execution of code starts here

        System.out.println("Byte Max: " + Byte.MAX_VALUE); // storage: 1 byte (8 bits)
        System.out.println("Byte Min: " + Byte.MIN_VALUE);

        System.out.println("Short Max: " + Short.MAX_VALUE); // 2 bytes
        System.out.println("Short Min: " + Short.MIN_VALUE);

        System.out.println("Int Max: " + Integer.MAX_VALUE); // 4 bytes; 2 billion, 10 places
        System.out.println("Int Min: " + Integer.MIN_VALUE);

        System.out.println("Long Max: " + Long.MAX_VALUE); // 8 bytes; still whole numbers
        System.out.println("Long Min: " + Long.MIN_VALUE);

        System.out.println("Float Max: " + Float.MAX_VALUE);
        System.out.println("Float Min: " + Float.MIN_VALUE);

        System.out.println("Double Max: " + Double.MAX_VALUE);
        System.out.println("Double Min: " + Double.MIN_VALUE);

        System.out.println("Char Max: " + (Character.MAX_VALUE + 0));
        System.out.println("Char Min: " + (Character.MIN_VALUE + 0));

        float fNum1 = 1.1111115F;
        float fNum2 = 1.1111114F;
        System.out.println("Float has 6 points of precision: " + (fNum1 + fNum2)); //

        double dblNum1 = 1.1111111111111111;
        double dblNum2 = 1.1111111111111111; // 16 places
        System.out.println("double has 16 points of precision: " + (dblNum1 + dblNum2));

        boolean happy = true;
        System.out.println("Happy is " + happy);

        double thousand = 1e+3;
        System.out.println(thousand);

        int aInt = 10;
        System.out.println(aInt);
        long aLong = aInt;
        System.out.println(aLong);

//        casting
        double aDouble = 1.234;
        int castDoubleToInt = (int) aDouble;
        System.out.println(castDoubleToInt);

        float aFloat = 1;
        System.out.println("A Float Number: " + aFloat);

        long longB = 10064737790L;
        System.out.println("longB: " + longB);
        int intB = (int) longB;
        System.out.println("intB: " + intB);

        String numberA = Long.toString(longB);
        System.out.println("long to string: " + numberA);

//        parsing
        int strToInt = Integer.parseInt("1000");
        System.out.println("strToInt: " + strToInt);

//        Check Type
        System.out.println(numberA.getClass());
        System.out.println(numberA.getClass().getName());

//        System.out.println(aLong.getClass().getName());
        System.out.println("strToInt type: " + ((Object) strToInt).getClass().getName());
        System.out.println("intB type: " + ((Object) intB).getClass().getName());
    }


}

