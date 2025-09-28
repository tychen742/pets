<<<<<<< HEAD
package ch09_2_Collections;

import java.util.HashSet;
import java.util.SortedSet;
import java.util.TreeSet;

public class Collection {

	public static void main(String[] args) {

		TreeSet<String> tset = new TreeSet<>();
		SortedSet<Integer> yset = new TreeSet<>();

		HashSet<Integer> hset = new HashSet<>();
		// Collection<Integer> hset = new HashSet<>();
		boolean bool1 = hset.isEmpty();
		System.out.println(bool1);

		boolean bool2 = hset.add(100);
		System.out.println(bool2);
		System.out.println(hset);

		boolean bool3 = hset.add(100);
		System.out.println(bool3);
		System.out.println(hset);

		// java.util.Collection<? extends Integer> arrayNum = {1, 2, 3};
		HashSet<Integer> hset2 = new HashSet<>();
		hset2.add(1);
		hset2.add(2);
		hset2.add(3);
		boolean bool4 = hset.addAll(hset2);

		int x = hset.size();
		System.out.println(x);

		System.out.println(hset);
		
		boolean bool5 = hset.contains(100);
		System.out.println(bool5);
	}
=======
package ch09_2_Collections;

import java.util.HashSet;
import java.util.SortedSet;
import java.util.TreeSet;

public class Collection {

	public static void main(String[] args) {

		TreeSet<String> tset = new TreeSet<>();
		SortedSet<Integer> yset = new TreeSet<>();

		HashSet<Integer> hset = new HashSet<>();
		// Collection<Integer> hset = new HashSet<>();
		boolean bool1 = hset.isEmpty();
		System.out.println(bool1);

		boolean bool2 = hset.add(100);
		System.out.println(bool2);
		System.out.println(hset);

		boolean bool3 = hset.add(100);
		System.out.println(bool3);
		System.out.println(hset);

		// java.util.Collection<? extends Integer> arrayNum = {1, 2, 3};
		HashSet<Integer> hset2 = new HashSet<>();
		hset2.add(1);
		hset2.add(2);
		hset2.add(3);
		boolean bool4 = hset.addAll(hset2);

		int x = hset.size();
		System.out.println(x);

		System.out.println(hset);
		
		boolean bool5 = hset.contains(100);
		System.out.println(bool5);
	}
>>>>>>> main
}