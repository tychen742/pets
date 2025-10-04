package org.tychen.java.codingexercises;

public class NumberToWords {

    public static void main(String[] args) {
        String a = numberToWords(10);
        System.out.println(a);
//        String b = test("TTT");
//        System.out.println(b);
    }


    public static String test(String test) {
        String a = "a";
        return a.concat(test);
    }

    public static String numberToWords(int number) {
        int lastDigit = 0;
        String words = "";
        int digitCountBefore = getDigitCount(number);
        if (number < 0) {
            return "Invalid Value";
        } else {
            if (number > 9) {
                number = reverse(number);
                int digiCountAfter = getDigitCount(number);
                words = "";
                do {

                    lastDigit = number % 10;
//                }
                    switch (lastDigit) {
                        case 0:
                            words = words.concat("Zero");
                            break;
                        case 1:
                            words = words.concat("One");
                            break;
                        case 2:
                            words = words.concat("Two");
                            break;
                        case 3:
                            words = words.concat("Three");
                            break;
                        case 4:
                            words = words.concat("Fout");
                            break;
                        case 5:
                            words = words.concat("Five");
                            break;
                        case 6:
                            words = words.concat("Six");
                            break;
                        case 7:
                            words = words.concat("Seven");
                            break;
                        case 8:
                            words = words.concat("Eight");
                            break;
                        case 9:
                            words = words.concat("Nine");
                            break;
                        default:
                            break;
                    }
                    number = number / 10;
                } while (number > 0);
            }
            return words;
        }
    }


    public static int reverse(int number) {
        int reversedNum = 0;
        do {
            int lastDigit = number % 10;
            reversedNum = reversedNum * 10 + lastDigit;
            number = number / 10;
        } while (number > 0);
        return reversedNum;
    }

    public static int getDigitCount(int number) {
        if (number < 0) {
            return -1;
        } else {
            int digiCount = 0;
            do {
                number = number / 10;
                digiCount++;
            } while ((number / 10) > 0);
            System.out.println("DigiCount: " + digiCount);
            return digiCount;
        }
    }
}