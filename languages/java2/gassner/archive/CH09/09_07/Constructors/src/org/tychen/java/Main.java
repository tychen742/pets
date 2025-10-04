package org.tychen.java;

import org.tychen.java.model.Olive;

import java.util.ArrayList;
import java.util.List;

// storing data in Instance Variables

public class Main {

    public static void main(String[] args) {

        List<Olive> olives = new ArrayList<>();

//        Olive olive1 = new Olive("Kalamata", 0x2E0854, 3);
//        olives.add(olive1);
        olives.add(new Olive("Kalamata", 0x2E0854, 3));
        //        olive1.setOil(1);

//        Olive olive2 = new Olive("Kalamata", 0x2E0854, 3);
//        olives.add(olive2);
        olives.add(new Olive("Kalamata", 0x2E0854, 3));
        //        olive2.setOil(2);

        olives.add(new Olive("Ligurian", 0x000000, 2));
        olives.add(new Olive("Ligurian", 0x000000, 2));
        olives.add(new Olive("Ligurian", 0x000000, 2));
        olives.add(new Olive("Ligurian", 0x000000, 2));


        OlivePress press = new OlivePress();
        int totalOil = press.getOil(olives);
        System.out.println("Total olive oil: " + totalOil);

    }
}
