package part34_Multiple_Exceptions;

import java.io.FileNotFoundException;
import java.io.IOException;
import java.text.ParseException;

public class App {

	// public static void main(String[] args) throws IOException, ParseException
	// {
	public static void main(String[] args) {

		Test test = new Test();

		// Try-Catch
		/*
		 * try { test.run(); } catch (IOException e) { e.printStackTrace(); }
		 * catch (ParseException e) { e.printStackTrace(); System.out.println(
		 * "Couldn't parse command file."); }
		 */

		///// Multi-Catch
		/*
		 * try { test.run(); } catch (IOException | ParseException e) {
		 * e.printStackTrace(); System.out.printf("the error is: ",
		 * e.toString()); }
		 */

		///// Polymorphism: Can use a Child Class whenever a Parent Class is
		///// needed. Exception is the Super, so all will be caught.
		try {
			test.run();
		} catch (Exception e) {
			e.printStackTrace();
		}

		///// list the Exceptions from Sub to Super order
		try {
			test.input();
		} catch (FileNotFoundException e) {
			e.printStackTrace();
			System.out.println("File not found.");
		} catch (IOException e) {
			e.printStackTrace();
			System.out.println("IO exception");
		}
		
		
		try {
			test.input();
		} catch (IOException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}

	}

}
