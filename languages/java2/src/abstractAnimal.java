abstract class abstractAnimal {
    public abstract void animalSound();
    public void sleep(){
        System.out.println("Zzz");
    }
}

class Pig2 extends abstractAnimal{
    public void animalSound(){
        System.out.println("The pig says: wee wee");
    }
}

class MyMainClass2 {
    public static void main(String[] args){
        Pig2 myPig2 = new Pig2();
        myPig2.animalSound();
        myPig2.sleep(); // the sleep method is in the abstract class <== security
    }
}