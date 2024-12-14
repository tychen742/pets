
package ch14_IO;

import java.io.BufferedWriter;
import java.io.FileWriter;
import java.io.IOException;
import java.io.Writer;

public class WriteFile {
	public static void main(String[] args) {

		String filePath = "C:/test/test.txt";
		try {
			BufferedWriter fileOutput = new BufferedWriter(new FileWriter(filePath));

			fileOutput.write("Java SE 7");
			fileOutput.newLine();
			fileOutput.write("Visual C#");
			fileOutput.newLine();
			fileOutput.close();
			System.out.println(filePath + " file written.");
		} catch (IOException e) {
			System.out.println("Error writing file.");
			e.printStackTrace();
		}
	}
}   
