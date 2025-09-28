package book.java7.chapter4;

public class AutoCloseableSample {

	public static void main(String[] args) {
		try (MyResource res = new MyResource()) {
			res.doSomething();
		} catch (Exception e) {
			System.out.println(e.getMessage());
		}
	}
}
