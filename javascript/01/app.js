function myName (){
    return 10;
}
let number = () =>{return 17}
let number2 = () =>15
console.log(myName());
console.log(number());
console.log(number2());
let echonumber =() => console.log(number2());
echonumber();