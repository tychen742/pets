package part34_Exceptions;

import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileReader;

public class App_Practice {

	public static void main(String[] args) {

		File file = new File("test.txt");
		System.out.println("Reading file...");
		try {
			FileReader fr = new FileReader(file);
			System.out.println("Continuing... ");
		} catch (FileNotFoundException e) {
			System.out.println("File not found: " + file.toString());
		}
		System.out.println("Finished.");
	}
}
