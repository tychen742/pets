package exam803;

public class Equals {
	String s5 = "Java5";
	public static void main(String[] args) {

		String s = new String("Java");
		System.out.println(s);
		
		int[] array = new int [10];
		System.out.println(array.length);
		
		int[] array2 = new int[] {1, 2, 3};
		System.out.println(array2.length);
		
		char c1 = 'A';
		char c2 = 'A';
		System.out.println(c1 == c2);
		System.out.println(c1 = c2);
		
		String s1 = "Java";
		String s2 = "Java";
		System.out.println("In the Stack, s1 == s2: " + (s1 == s2));
		
		String s3 = new String ("Java");
		String s4 = new String ("Java");
		System.out.println("In the Heap, new String s3 == s4: " + (s3 == s4));
		System.out.println("but, new String s3.equals(s4): " + s3.equals(s4));
		s3 = s4;
		System.out.println("After s3 = s4, s3 == s4: " + (s3 == s4));
		
		
		

	}

}
