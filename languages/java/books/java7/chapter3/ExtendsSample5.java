package book.java7.chapter3;

class Father7 {
	public int money = 8000000;

	public void undertaking() {
		System.out.println("Father's business: Real Estate");
	}
}

class Son7 extends Father7 {
	public int money;

	Son7(int money) {
		setMoney(money);
	}

	public void setMoney(int money) {
		this.money = money;
	}

	public void undertaking() {
		System.out.println("Son's business: E-Commerce");
	}

	public void go() {
		undertaking();
		System.out.println("Value: USD." + money);
		super.undertaking();
		System.out.println("Value: USD." + super.money);
	}

}

public class ExtendsSample5 {
	public static void main(String[] args) {
		new Son7(500000).go();
	}
}
