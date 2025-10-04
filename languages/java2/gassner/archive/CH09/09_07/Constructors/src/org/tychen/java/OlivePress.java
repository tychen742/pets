package org.tychen.java;

import org.tychen.java.model.Olive;

import java.util.List;

public class OlivePress {

    // Instance Method, a method that's a member of the OlivePress class
    public int getOil(List<Olive> olives) {

        int totalOil = 0;

        for (Olive o : olives) {
            System.out.println(o.getName());
            totalOil += o.crush();
        }

        return totalOil;


    }

}
