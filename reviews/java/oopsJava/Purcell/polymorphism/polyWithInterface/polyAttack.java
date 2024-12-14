package polyWithInterface;

public class polyAttack {

	public static void main(String[] args) {
		
		Attack flag;
		
		Spiderman peterParker = new Spiderman();
		OO7 jamesBond = new OO7();
		
		flag = peterParker;
		flag.attack();
		
		flag = jamesBond;
		flag.attack();
	}
}
