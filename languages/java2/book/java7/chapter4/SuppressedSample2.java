package book.java7.chapter4;

public class SuppressedSample2 {
	public static void main(String[] args) {
		try {
			findResource();
		} catch (Exception e) {
			System.out.println(e);
			Throwable[] tw = e.getSuppressed();
			for (Throwable t : tw) {
				System.out.println(t);
			}
		}
	}

	public static void findResource() throws Exception {
		try (MyResource r = new MyResource()) {
			r.doSomething();
			throw new Exception("Throw other exceptions");
		}
	}
}
