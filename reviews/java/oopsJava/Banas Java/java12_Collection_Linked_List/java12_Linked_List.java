// methods: .add, .addLast, .addFirst, .add(index, value), .remove(index), .remove("value"), 
// .get(index), .getLast(), print(), .isEmpty, .indexOf("value"), .contains
// .containsAll(Object), .size(), .peek(), .poll(), pollLast(), .push(value), .pop()
// .toArray(), .clear()
// 1. import LinkedList; 2. create object LinkedList<String> nameOfObject = new 

package java12_Collection_Linked_List;

import java.util.Arrays;
import java.util.LinkedList;

public class java12_Linked_List {
	public static void main(String[] args) {
		
	
	LinkedList<String> names = new LinkedList<String>();
	
	names.add("Polo");
	names.addLast("Polo");
	System.out.println(names);
	
	LinkedList<String> nameCopy = new LinkedList<String>(names);
	System.out.println(nameCopy);
	
	System.out.println(names.containsAll(nameCopy));
	
	names.add("Chen");
	names.addFirst("Lee");
	System.out.println(names.peek());
	
	Object[] nameArray = new Object[4];
	nameArray = names.toArray();
	System.out.println(Arrays.toString(nameArray));
	
	}
}
