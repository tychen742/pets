package book.java7.chapter3;

class MyAccount {
	private int money;
	public void setMoney(int money) {
		this.money = money;
	}
	public int getMoney() {
		return money;
	}
}

public class Encapsulation {

	public static void main(String[] args) {
		MyAccount account = new MyAccount();
		int randomAccount = (int) (Math.random() * 1000000);
		account.setMoney(randomAccount);
		System.out.println("$" + account.getMoney());
	}
}
