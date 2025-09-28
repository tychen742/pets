package org.tychen.java.javaapis;

import com.google.gson.Gson;
import com.google.gson.stream.JsonReader;

import java.io.FileReader;
import java.io.IOException;

public class Json {

    public static void main(String[] args) throws IOException {

        String fileName = "files/data.json";

        Gson gson =  new Gson();
        // try-with-resources syntax: closable
        // any object created in () must have a close method
        try (FileReader fileReader = new FileReader(fileName);
             JsonReader reader = new JsonReader(fileReader);
        ) {
            Flower[] data = gson.fromJson(reader, Flower[].class);
            for (Flower flower : data) {
                System.out.println(flower);
            }
        }
    }
}
