package org.tychen.java.javaapis;

import java.io.*;

public class FIles {

    public static void main(String[] args) {

        String sourcefile = "files/loremipsum.txt";
        String targetfile = "files/target3.txt";

        try (FileReader fileReader = new FileReader(sourcefile);
             BufferedReader bufferedReader = new BufferedReader(fileReader);
             FileWriter fileWriter = new FileWriter(targetfile);
        ) {
            while (true) {
                String line = bufferedReader.readLine();
                if (line == null) {
                    break;
                }
                fileWriter.write(line + "\n");
            }
        } catch (IOException e) {
            e.printStackTrace();
        }


    }

}
