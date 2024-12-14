package exam803;

public class Q083 {

	static int i = 7;
	public static void main(String[] args) {
		Q083 obj = new Q083();
		obj.i++;
		Q083.i++;
		obj.i++;
		System.out.println(Q083.i + " " + obj.i);
	}
	
	
}
