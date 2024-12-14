package exam803;

public class Cap {
	private int num;
	Cap(int n) {
		this.num = n;
	}

	public static void main(String[] args) {

		Cap obj1 = new Cap(10);
		Cap obj2 = new Cap(20);
		
		obj1.num = 10;
		System.out.println(obj1.num + " : " + obj2.num);
	}
}
