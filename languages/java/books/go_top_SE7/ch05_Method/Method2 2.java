<<<<<<< HEAD
package ch05_Method;

public class Method2 {

	public static void main(String[] args) {
		
		int tot1, tot2;
		tot1 = sum(1, 100);
		System.out.println(tot1);
		tot2 = sum(5, 12);
		System.out.println(tot2);
		
	}
	
	static int sum (int start, int end) {
		int total = 0;
		for (int i = start; i <= end; i++) {
			total = total + i;
		}
		
		return total;
		
	}
}

=======
package ch05_Method;

public class Method2 {

	public static void main(String[] args) {
		
		int tot1, tot2;
		tot1 = sum(1, 100);
		System.out.println(tot1);
		tot2 = sum(5, 12);
		System.out.println(tot2);
		
	}
	
	static int sum (int start, int end) {
		int total = 0;
		for (int i = start; i <= end; i++) {
			total = total + i;
		}
		
		return total;
		
	}
}

>>>>>>> main
