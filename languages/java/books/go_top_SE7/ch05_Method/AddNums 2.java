<<<<<<< HEAD
package ch05_Method;

public class AddNums {

	public static void main(String[] args) {
		
		System.out.println(add(1, 2));
		System.out.println(add(1, 2, 3));
		System.out.println(add(1, 2, 3, 4, 100));
	}
	
	static int add (int ... array) {
		int sum = 0;
		for (int element : array) {
			sum = sum + element;
		}
		return sum;
	}
	
}
=======
package ch05_Method;

public class AddNums {

	public static void main(String[] args) {
		
		System.out.println(add(1, 2));
		System.out.println(add(1, 2, 3));
		System.out.println(add(1, 2, 3, 4, 100));
	}
	
	static int add (int ... array) {
		int sum = 0;
		for (int element : array) {
			sum = sum + element;
		}
		return sum;
	}
	
}
>>>>>>> main
