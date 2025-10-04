package ch14_IO;

import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.IOException;

public class InputFile01 {

	public static void main(String[] args) {
		int size;
		try {
			FileInputStream fileInput = new FileInputStream("c:/test/test.txt");

			size = fileInput.available();
			byte byteSize[] = new byte[size];

			fileInput.read(byteSize);

			System.out.print("readable bytes: " + byteSize);

			for (int i = 0; i < size; i++) {
				System.out.print((char) byteSize[i]);
			}
			fileInput.close();

		} catch (FileNotFoundException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		} catch (IOException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
	}
}
