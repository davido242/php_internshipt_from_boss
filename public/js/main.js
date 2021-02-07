class Animal{
	constructor(name){
		this.name = name;
	}

	speak(){
		console.log(`${this.name} makes a noise.`);
	}
}
	class Dog extends Animal{
		super.speak();
		speak(){
			console.log(`${this.name} barks`);
		}
	} 



let vimo = new Dog("Doggy");
vimo.speak();

// let vico = new Dog("Cat Does not ");
// vico.speak();