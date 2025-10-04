// can have own type; can use diamond operator

package part30_Generics;

import java.util.ArrayList;
import java.util.HashMap;


class Animal {
	
}


public class App {
	
	public static void main(String[] args) {
		
		// before Java 5
		ArrayList list = new ArrayList();
		
		list.add("Apple");
		list.add("Orange");
		list.add("LianWu");
		System.out.println(list);
		
		String fruit1 = (String)list.get(1);
		System.out.println(fruit1);
		
		// after Java 5
		ArrayList<String> strings = new ArrayList<String>();   // generic (parameterized class)
		strings.add("cat");
		strings.add("dog");
		strings.add("aligator");
		
		String animal = strings.get(1);
		System.out.println(animal);
	
		// Can have more than one type argument
		HashMap<Integer, String> hmap = new HashMap<Integer, String>();
		
		
		// Java 7 
		ArrayList<String> somelist = new ArrayList<String>();
		ArrayList<Animal> animalList = new ArrayList<>(); // diamond operator
		
		
	}

}
