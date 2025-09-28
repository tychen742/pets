package org.tychen.java.collectionframworks;

import java.util.ArrayList;
import java.util.List;

public class ListExample {

    public static void main(String[] args) {

        ArrayList<String> testArrayList = new ArrayList<>();
        testArrayList.add("111");
        testArrayList.add("test");
        testArrayList.add("true");
        System.out.println(testArrayList.get(0));
//        for (  test : testArrayList ) {
//            System.out.println(test);
////        }
////        for (int i = 0; i < testArrayList.size(); i++) {
////            System.out.println(testArrayList[i]);
////        }

        // ArrayList: string
        List<String> states = new ArrayList<>();
        states.add("California");
        states.add("Florida");
        states.add("Ohio");
        states.add("Montana");
        for (String state : states) {
            System.out.println(state);
        }

        // ArrayList: integer
        List<Integer> ints = new ArrayList<>();
        ints.add(1);
        ints.add(3);
        ints.add(5);
        for (Integer anInt : ints) {
            System.out.println(anInt);
        }

        states.remove(0);
        System.out.println(states);
        String state = states.get(0);
        System.out.println("The first state is: " + state);

        int pos = states.indexOf("Ohio");
        System.out.println("The position of Ohio is: " + pos);

    }

}
