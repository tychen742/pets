<<<<<<< HEAD
package book.java7.chapter4;

import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;

public class TryWithResources {

	public static void main(String[] args) {
		FileWriter writer = null;
		FileReader reader = null;
		try {
			writer = new FileWriter("Demo.txt");
			reader = new FileReader("Demo.txt");
			writer.write("Hello Java 777gK");
			writer.flush();

			char[] data = new char[1];
			while (reader.read(data) != -1) {
				System.out.print(new String(data));
			}
		} catch (IOException e) {
			e.printStackTrace(System.out);
		} finally {
			if (writer != null) {
				try {
					writer.close();
				} catch (IOException e) {
					e.printStackTrace(System.out);
				}
			}
			if (reader != null) {
				try {
					reader.close();
				} catch (IOException e) {
					e.printStackTrace(System.out);
				}
			}
		}
	}
}
=======
package book.java7.chapter4;

import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;

public class TryWithResources {

	public static void main(String[] args) {
		FileWriter writer = null;
		FileReader reader = null;
		try {
			writer = new FileWriter("Demo.txt");
			reader = new FileReader("Demo.txt");
			writer.write("Hello Java 777gK");
			writer.flush();

			char[] data = new char[1];
			while (reader.read(data) != -1) {
				System.out.print(new String(data));
			}
		} catch (IOException e) {
			e.printStackTrace(System.out);
		} finally {
			if (writer != null) {
				try {
					writer.close();
				} catch (IOException e) {
					e.printStackTrace(System.out);
				}
			}
			if (reader != null) {
				try {
					reader.close();
				} catch (IOException e) {
					e.printStackTrace(System.out);
				}
			}
		}
	}
}
>>>>>>> main
