<<<<<<< HEAD
package ch04_Arrays;

import java.util.Arrays;

public class Cert_Questions {
	static void alpha() {
	}

	void beta() {
	}

	private Cert_Questions() {
		System.out.println("Construct something");
	}

	@Override
	public String toString() {
		return "Something toString";
	}

	// public Cert_Questions() {
	// System.out.println("Something");
	// }
	public static void main(String[] args) {
		String[] colors = { "blue", "red", "green", "yellow", "orange" };
		Arrays.sort(colors);
		int s2 = Arrays.binarySearch(colors, "orange");
		int s3 = Arrays.binarySearch(colors, "violet");
		System.out.println(s2 + "" + s3);

		Cert_Questions.alpha();
		// Cert_Questions.beta();

	}

=======
package ch04_Arrays;

import java.util.Arrays;

public class Cert_Questions {
	static void alpha() {
	}

	void beta() {
	}

	private Cert_Questions() {
		System.out.println("Construct something");
	}

	@Override
	public String toString() {
		return "Something toString";
	}

	// public Cert_Questions() {
	// System.out.println("Something");
	// }
	public static void main(String[] args) {
		String[] colors = { "blue", "red", "green", "yellow", "orange" };
		Arrays.sort(colors);
		int s2 = Arrays.binarySearch(colors, "orange");
		int s3 = Arrays.binarySearch(colors, "violet");
		System.out.println(s2 + "" + s3);

		Cert_Questions.alpha();
		// Cert_Questions.beta();

	}

>>>>>>> main
}