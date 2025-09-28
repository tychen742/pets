package design_patter_Composite;

public class CompositePatternDemo {
	public static void main(String[] args) {
		Employee CEO = new Employee("John", "CEO", 30000);
		Employee headSales = new Employee("Robert", "Head Sales", 20000);
		Employee headMarketing = new Employee("Michel", "Head Marketing", 20000);
		
		Employee clerk1 = new Employee("Laura", "Marketing", 10000);
		Employee clerk2 = new Employee("Bob", "Sales", 10000);
		
		Employee salesExecutive1 = new Employee("Richard", "Sales", 10000);
		Employee salesExecutive2 = new Employee("Rob", "Sales", 10000);
		
		CEO.add(headSales);
		CEO.add(headMarketing);
		
		headSales.add(salesExecutive1);
		headSales.add(salesExecutive2);
		
		headMarketing.add(clerk1);
		headMarketing.add(clerk2);
		
		// print all employees of the organization
		System.out.println(CEO);
		
		for (Employee headEmployee : CEO.getStubordidates()) {
			System.out.println(headEmployee);
			
			for (Employee employee : headEmployee.getStubordidates()) {
				System.out.println(employee);
			}
		}
		
	}
}
