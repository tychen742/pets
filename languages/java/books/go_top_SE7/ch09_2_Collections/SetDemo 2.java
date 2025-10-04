<<<<<<< HEAD
package ch09_2_Collections;

import java.util.HashSet;
import java.util.Set;

public class SetDemo {

	public static void main(String[] args) {

		// Set<String> hset = new HashSet<>(); // Set would work, too.
		HashSet<String> hset = new HashSet<>();

		hset.add("Taipei");

		String[] place = { "Hsinchu", "Taichung", "Tainan", "Taipei" };

		for (String city : place) {
			hset.add(city);
		}

		String city = "Kaohsiung";
		hset.add(city);

		System.out.println(hset);

	}
=======
package ch09_2_Collections;

import java.util.HashSet;
import java.util.Set;

public class SetDemo {

	public static void main(String[] args) {

		// Set<String> hset = new HashSet<>(); // Set would work, too.
		HashSet<String> hset = new HashSet<>();

		hset.add("Taipei");

		String[] place = { "Hsinchu", "Taichung", "Tainan", "Taipei" };

		for (String city : place) {
			hset.add(city);
		}

		String city = "Kaohsiung";
		hset.add(city);

		System.out.println(hset);

	}
>>>>>>> main
}