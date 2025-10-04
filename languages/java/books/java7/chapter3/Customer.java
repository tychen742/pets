package book.java7.chapter3;

import java.util.Date;

public class Customer {

	// fields
	private int id;
	private String name;
	private Date birthday;

	// business methods
	public int getId() {return id;	}

	public String getName() {return name;}

	public Date getBirthday() {return birthday;}

	// persistence methods
	public void add (Customer cust) {	}

	public void delete (int id) {	}

	public Customer findById (int id) {return null;}

	public void update(Customer cust) {	}

}
