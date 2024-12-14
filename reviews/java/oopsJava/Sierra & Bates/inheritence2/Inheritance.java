package inheritence2;
class Animal { }
class Gerbil extends Animal { }
class Vet {
	Animal go() {return new Animal();} }
class SmallAnimalVet extends Vet {
//	Gerbil go() { return new Gerbil(); }
//	Animal go() { return new Animal(); }
//	Gerbil go() { return new Animal(); }
	Animal go() { return new Gerbil(); }
}