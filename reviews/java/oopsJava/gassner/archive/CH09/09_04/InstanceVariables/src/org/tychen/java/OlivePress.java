package org.tychen.java;

import org.tychen.java.model.Olive;

import java.util.List;

public class OlivePress {

    // Instance Method, a method that's a member of the OlivePress class
    public int getOil(List<Olive> olives) {

        for (Olive o : olives) {
            System.out.println(o.name);
        }

        return 0;


    }

}
