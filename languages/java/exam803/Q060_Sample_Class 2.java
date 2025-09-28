<<<<<<< HEAD
package exam803;

public class Q060_Sample_Class {

	public static void main(String[] args) {

		Q060_Sample_Class sc;
		Q060_SampleClassB scB;
		Q060_SampleClassA scA;
		sc = new Q060_Sample_Class();
		scA = new Q060_SampleClassA();
		scB = new Q060_SampleClassB();
		System.out.println(sc.getHash());
		System.out.println(scA.getHash());
		System.out.println(scB.getHash());

	}

	public int getHash() {
		return 11111111;
	}
}

class Q060_SampleClassA  {
	public long getHash() {
		return 44444444;
	}
}

class Q060_SampleClassB  {
	public float getHash() {
		return 9999999f;
	}
}
=======
package exam803;

public class Q060_Sample_Class {

	public static void main(String[] args) {

		Q060_Sample_Class sc;
		Q060_SampleClassB scB;
		Q060_SampleClassA scA;
		sc = new Q060_Sample_Class();
		scA = new Q060_SampleClassA();
		scB = new Q060_SampleClassB();
		System.out.println(sc.getHash());
		System.out.println(scA.getHash());
		System.out.println(scB.getHash());

	}

	public int getHash() {
		return 11111111;
	}
}

class Q060_SampleClassA  {
	public long getHash() {
		return 44444444;
	}
}

class Q060_SampleClassB  {
	public float getHash() {
		return 9999999f;
	}
}
>>>>>>> main
