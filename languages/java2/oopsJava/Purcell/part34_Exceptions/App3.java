package part34_Exceptions;
// User should not see StackTrace

// exception is thrown from openFile to openFile in Main

import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileReader;

public class App3 {

	public static void main(String[] args) {

		System.out.println("Start reading file...");
		try {
			openFile();
			System.out.println("Continue reading... ");
		} catch (FileNotFoundException e) {
			e.printStackTrace();
			System.out.println("File not found.");
		} finally {
			System.out.println("Finished.");
		}
	}

	public static void openFile() throws FileNotFoundException {
		File file = new File("test.txt");
		FileReader fr = new FileReader(file);
	}

}
