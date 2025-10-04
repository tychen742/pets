package book.java7.chapter2;

public class MultiplicationTable {
	public static void main(String[] args) {
		for (int i = 2; i <= 9; i++) {
			for (int j = 2; j <= 9; j++) {
				System.out.print(i + "*" + j + "=" + i*j + "\t");
			}
			System.out.println();
		}
		
		System.out.println("\t" + 123 + "\t" + "123" + "\t" + "Java");
	}
	
}
