interface interfaceAnimal {
    public void animalSound();

    public void run();
}

class PigInInterface implements interfaceAnimal {
    @Override
    public void animalSound() {
        System.out.println("The pig says: wee wee");
    }

    public void run() {
        System.out.println("Running");
    }
}

class MyMainClassInInterface {
    public static void main(String[] vargs) {
        PigInInterface myPig = new PigInInterface();
        myPig.animalSound();
        myPig.run();
    }
}


interface FirstInterface {
    void myMethod();
}

interface SecondInterface {
    public void yourMethod();
}

class DemoClass implements FirstInterface, SecondInterface {
    public void myMethod() {
        System.out.println("Some text in myMethod");
    }

    public void yourMethod() {
        System.out.println("Some text in yourMethod");
    }
}

class MyMainClassInterfaces {
    public static void main(String[] args) {
        DemoClass myObj = new DemoClass();
        myObj.myMethod();
        myObj.yourMethod();
    }
}

