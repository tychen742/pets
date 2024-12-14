package polyWithAbstractClass;

abstract class SuperHero {

	abstract void attack();
}

class CaptainAmerica extends SuperHero {

	public void attack() {
		System.out.println("Eat my shield!");
	}
}

class Thor extends SuperHero {

	void attack() {
		System.out.println("Eat my Mjolnir!");
	}
}

class IronMan extends SuperHero {
	void attack() {
		System.out.println("Eat my bullets!");
	}
}

public class SuperHeroPoly {
	public static void main(String[] args) {

		SuperHero sh;

		CaptainAmerica steve = new CaptainAmerica();
		Thor thorOdinson = new Thor();
		IronMan tonyStark = new IronMan();

		sh = steve;
		sh.attack();
		
		sh = thorOdinson;
		sh.attack();

		sh = tonyStark;
		sh.attack();
	}
}
