package exam803;

public class Q124 {
	
	char $char = 'a';
	

	String edition;
	Q124() {
		edition = "SE";
	}
	
	public static void main(String[] args) {
		Q124 obj = new Q124();
		String edition = args[2];
		System.out.println(obj.edition);
	}
	
	
}
