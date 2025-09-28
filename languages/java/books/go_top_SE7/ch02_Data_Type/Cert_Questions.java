package ch02_Data_Type;

public class Cert_Questions {
	public static void main(String[] args) {
		// System.out.format("PI is about %d", Math.PI\n);
		System.out.format("PI is about %f \n", Math.PI);
		System.out.format("PI is about %d \n", 5);
		// System.out.format("PI is about %f \n", 5);
		System.out.format("PI is about %f \n", 5.0);

		// String #name = "Oracle";
		int $age = 17;
		Double _d = 510.5;
		System.out.println(_d);
		
		double _e = 510.5;
		System.out.println(_e);
		
		Double _f = Double.valueOf(510.5);
		System.out.println("_f = " + _f);
		
		System.out.println(_d == _e );
		System.out.println(_e == _f);
		System.out.println(_d.equals(_e));
		System.out.println(_d.equals(_f));
		
		
		// double -temp = 50.5;
	}

}
