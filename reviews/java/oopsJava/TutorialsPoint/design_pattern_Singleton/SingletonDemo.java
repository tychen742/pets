package design_pattern_Singleton;

public class SingletonDemo {

	public static void main(String[] args) {
		Singleton tmp = Singleton.getInstance();
		tmp.demonMethod();
	}
}
