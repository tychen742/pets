package us.tychen;

public class Greeter {
	 
	public void greet(Greeting greeting) {
		greeting.perform();
	}
	
	public static void main(String[] args) {
		

		
		// passing behavior to method as parameter
		// polymorphism 
//		HelloWorldGreeting helloWorldGreeting = new HelloWorldGreeting();
//		greeter.greet(helloWorldGreeting);
		
		// type of a lambda is an interface with a method
		MyLambda LambdaGreeting1 = () -> System.out.println("Lambda 1");
		LambdaGreeting1.foo();

		Greeting LambdaGreeting2 = () -> System.out.println("Lambda 2");
		LambdaGreeting2.perform();
		// lambda can be the same as inline class
		//"anonymous inline class"; inline implementation of an interface
		// variable containing the instance
		Greeting inlineClass = new Greeting() {
			public void perform() {
				System.out.println("Anonymous Inline Class Greeting");
			}
		};
		inlineClass.perform();

		Greeter greeter = new Greeter();
		greeter.greet(LambdaGreeting2);
		
		HelloWorldGreeting helloWorldGreeting = new HelloWorldGreeting();
//		helloWorldGreeting.perform();
		greeter.greet(helloWorldGreeting);
		
		
	
		
//		AddFunction addFunction = (int a, int b, int c) -> a + b + c;  
//		HelloWorldGreeting2 hwg2= new HelloWorldGreeting2();
//		greeter.greet(hwg2);
	}
}

interface MyLambda {
	void foo();
}

interface AddFunction {
	int add(int x, int y, int z);
}