package book.java7.chapter3;

class Father3 {
	public int money = 1000000;

	public void undertaking() {
		System.out.println("Father's business");
	}
}

class Son3 extends Father3 {

}

public class ExtendsSample {
	public static void main(String[] args) {
		Son3 son = new Son3();
		son.undertaking();
		System.out.println("Amount: " + son.money);
	}
}