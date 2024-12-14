package ch14_IO;

import java.io.BufferedReader;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.IOException;
import java.util.Scanner;

public class ReaderFile03 {

	public static void main(String[] args) {
		String data;
		
		System.out.println("Pelase enter the path: ");
		Scanner scanner = new Scanner("c:/test/test.txt");
		String filepath = scanner.next();
		
		try {
			FileReader file = new FileReader(filepath);
			BufferedReader bfread = new BufferedReader(file);
			
			do 
			{
				data = bfread.readLine();
				if (data == null) {
					break;
				}
				System.out.println(data);
			} while (true);
			
			
			
			
		} catch (FileNotFoundException e) {
			e.printStackTrace();
		} catch (IOException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		
		
	}
}
