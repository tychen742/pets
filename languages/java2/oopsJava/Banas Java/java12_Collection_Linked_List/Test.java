package java12_Collection_Linked_List;

import java.util.ArrayList;
import java.util.LinkedList;
import java.util.List;

public class Test {
	public static void main(String[] args) {

		List<Object> listA = new ArrayList<Object>();
		listA.add("test");
		System.out.println(listA);
		listA.add(1000);
		System.out.println(listA);
		listA.add(true);
		System.out.println(listA);
		
		ArrayList<String> aStringList = new ArrayList<String>();
		aStringList.add("10");
		System.out.println(aStringList);
		
		
		List<Object> listInt = new LinkedList<>();
		listInt.add(99);
		System.out.println(listInt);
	}
}
