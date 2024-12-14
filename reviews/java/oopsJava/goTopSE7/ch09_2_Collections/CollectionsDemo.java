package ch09_2_Collections;

import java.util.ArrayList;
import java.util.Collections;

public class CollectionsDemo {

	public static void main(String[] args) {

		String[] data = { "EEE", "CCC", "BBB", "DDD", "AAA" };

		ArrayList<String> alist = new ArrayList<>();

		for (String p : data) {
			alist.add(p);
		}
		System.out.println("Show the original elements of alist: " + alist);

		// Collections methods
		Collections.sort(alist);
		System.out.println("Show the sorted alist: " + alist);

		Collections.reverse(alist);
		System.out.println("Show the reversed alist: " + alist);

	}
}
