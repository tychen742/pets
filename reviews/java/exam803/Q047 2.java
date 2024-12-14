package exam803;

public class Q047 {

	public static void main(String[] args) {

		StringBuilder sb = new StringBuilder();
		sb.append("Java");

		String string = "Java";
		
		System.out.println("string: " + string);
		System.out.println("sb.toString: " + sb.toString());
		System.out.println("sb.toString() == string : " + (sb.toString() == string));
		
		System.out.println(sb.equals(string));
		System.out.println(sb.toString().equals(string));
	}
}
