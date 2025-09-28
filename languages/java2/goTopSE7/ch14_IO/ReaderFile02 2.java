package ch14_IO;

import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.IOException;
import java.util.Scanner;

public class ReaderFile02 {
	static int filesize;
	static String filename;
	static char[] buffer;
	
	public static void main(String[] args) {
		try {
			System.out.println("Please enter file path: ");
			Scanner scanner = new Scanner("c:/test/test.txt");
			String filepath = scanner.next();

			File file = new File(filepath);

			FileReader freader = new FileReader(file);
			
			filesize = (int)file.length();
			filename = file.getName();
			buffer = new char[filesize];
			
			freader.read(buffer);
			System.out.println(buffer);
			
					
		} catch (FileNotFoundException e) {
			e.printStackTrace();
		} catch (IOException e) {
			e.printStackTrace();
		}
	}

}
