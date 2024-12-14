package part34_Exceptions;
// Stack Trace

import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileReader;

public class App_Throws {

	public static void main(String[] args) throws FileNotFoundException {

		File file = new File("test.txt");
		FileReader fr = new FileReader(file);
	}
}
