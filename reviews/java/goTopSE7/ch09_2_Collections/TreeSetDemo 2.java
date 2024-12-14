package ch09_2_Collections;

import java.util.TreeSet;

public class TreeSetDemo {
	public static void main(String[] args) {
		TreeSet<Integer> tset = new TreeSet<>();

		System.out.println("Generating 10 non-repetitive numbers from 1~100...");
		for (int i = 1; i <= 10; i++) {
			while (true) {
				int num = (int) (Math.random() * 100) + 1;
				if (tset.add(num)) {
					System.out.println("Number #" + i + " is " + num);
					break;
				}
			}
		}
		
		System.out.println();
		System.out.println("");
		
	}

}
