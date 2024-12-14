package exam803;

public class Q117 {
	
	private static int num;
	static {
		num = 3;
	}
	static {
		num = 4;
	}
	static int findSquare(int num) {
		return num = num * num;
	}
	public static void main(String[] args) {
		System.out.println(findSquare(num));
		System.out.println("Result = " + num);
	}

}
