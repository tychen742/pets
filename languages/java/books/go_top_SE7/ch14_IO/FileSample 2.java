<<<<<<< HEAD
package ch14_IO;

import java.io.File;
import java.util.Scanner;

public class FileSample {
	
	public static void main(String[] args) {
		String msg, fname, fpath;
		System.out.println("Please enter filename: ");
		Scanner sn = new Scanner(System.in);
		fpath = sn.nextLine();
		File fin = new File(fpath);
		fname = fin.getName();
		long len = fin.length();
		msg = "Filename: " + fname;
		if (fin.isFile()) {
			msg += "is a file.";
		}
		else if (fin.isDirectory()) {
			msg+= "is a directory.";
		}
		else {
			System.out.println("No such file or directory.");
			System.exit(0);
		}
		System.out.println(msg + "\n length of file: " + String.valueOf(len));
		
	}

}
=======
package ch14_IO;

import java.io.File;
import java.util.Scanner;

public class FileSample {
	
	public static void main(String[] args) {
		String msg, fname, fpath;
		System.out.println("Please enter filename: ");
		Scanner sn = new Scanner(System.in);
		fpath = sn.nextLine();
		File fin = new File(fpath);
		fname = fin.getName();
		long len = fin.length();
		msg = "Filename: " + fname;
		if (fin.isFile()) {
			msg += "is a file.";
		}
		else if (fin.isDirectory()) {
			msg+= "is a directory.";
		}
		else {
			System.out.println("No such file or directory.");
			System.exit(0);
		}
		System.out.println(msg + "\n length of file: " + String.valueOf(len));
		
	}

}
>>>>>>> main
