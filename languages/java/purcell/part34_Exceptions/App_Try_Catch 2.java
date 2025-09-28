<<<<<<< HEAD
package part34_Exceptions;
// Stack Trace

import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileReader;

public class App_Try_Catch {

	public static void main(String[] args) {

		File file = new File("test.txt");
		try {
			FileReader fr = new FileReader(file); // codes between Try and Catch
			System.out.println("Continuing... "); // not allowed
		} catch (FileNotFoundException e) {
			// e.printStackTrace();
			System.out.println("File not found: " + file.toString());
		} finally {

		}
		System.out.println("Finished.");
	}
}
=======
package part34_Exceptions;
// Stack Trace

import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileReader;

public class App_Try_Catch {

	public static void main(String[] args) {

		File file = new File("test.txt");
		try {
			FileReader fr = new FileReader(file); // codes between Try and Catch
			System.out.println("Continuing... "); // not allowed
		} catch (FileNotFoundException e) {
			// e.printStackTrace();
			System.out.println("File not found: " + file.toString());
		} finally {

		}
		System.out.println("Finished.");
	}
}
>>>>>>> main
