package exam803;

public class Q060_SampleClass2 {
	public static void main(String[] args) {
		Q060_SampleClass2 sc, scA, scB;
		sc = new Q060_SampleClass2();
		scA = new SampleClassA();
		scB = new SampleClassB();
		System.out.println(sc.getHash());
		System.out.println(scA.getHash());
		System.out.println(scB.getHash());		
//		System.out.println((SampleClassA)scA).getHash());
//		System.out.println((SampleClassB)scB).getHash());
	}
	
	public long getHash() {
		return 11111111;
	}
}

class SampleClassA extends Q060_SampleClass2 {
	public long getHash() {
		return 44444444;
	}
}

class SampleClassB extends Q060_SampleClass2 {
	public long getHash() {
		return 99999999;
	}
}
