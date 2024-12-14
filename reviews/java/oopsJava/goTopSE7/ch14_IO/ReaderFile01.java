package ch14_IO;

import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.IOException;
import java.util.Scanner;

public class ReaderFile01 {

	public static void main(String[] args) throws IOException {
		try {
			Scanner scanner = new Scanner("c:/test/test.txt");
			System.out.println("Please enter the file path: ");
			
			String fpath = scanner.nextLine();
			char[] buffer = new char[100];
			
			FileReader fin = new FileReader(fpath);

			fin.read(buffer);

			System.out.println(buffer);

			fin.close();
			scanner.close();
		} catch (FileNotFoundException e) {
			e.printStackTrace();
		}

	}

}
