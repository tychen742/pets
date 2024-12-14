package java11_ArrayList;

import java.util.ArrayList;
import java.util.Arrays;

public class Lesson11 {

	public static void main(String[] args) {

		ArrayList<Integer> alist1;
		alist1 = new ArrayList<Integer>();

		ArrayList<Double> alist2 = new ArrayList<Double>();

		ArrayList<String> names = new ArrayList<String>();

		names.add("Chen");
		names.add("Lin");
		names.add("Lee");
		names.add("Chanag");
		names.add("Huang");

		Print.print(names);
		names.add(2, "Harry Potter");
		Print.print(names);
		names.set(2, "Albert Einstein");
		Print.print(names);
		names.remove(0);
		Print.print(names);

		System.out.println();
		System.out.println(names);
		
		for (String element : names) {
			System.out.print(element + " ");
		}
		
		System.out.println();
		
		ArrayList<String> nameCopy = new ArrayList<String>();
		ArrayList<?> nameBackup = new ArrayList<Object>();
		nameCopy.addAll(names);
		System.out.println(nameCopy);
		
		String poloChen = "Polo Chen";
		nameCopy.add(poloChen);
		System.out.println(nameCopy);
		
		nameCopy.remove("Lee");
		System.out.println(nameCopy);
		
		if (nameCopy.contains("Albert Einstein")) {
			System.out.println("Albert is here");
		}
		
		
		
		if (names.containsAll(nameCopy)) {
			System.out.println("Everyting in nameCopy is in names.");
		}
		
		names.clear();
		System.out.println(names);
		
		if (names.isEmpty()) {
			System.out.println("The ArrayList is empty.");
		}
		
		names.add("Lin");
		if (nameCopy.containsAll(names)) {
			System.out.println("Everyting in names is in nameCopy.");
		}
		
		Object[] moreNames = new Object[4]; // generic object
		moreNames = nameCopy.toArray();
		System.out.println(Arrays.toString(moreNames));
		
		
	}
}
