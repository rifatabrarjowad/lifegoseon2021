// var javascript ={
//     name: "Javascript",
//     library: ['React','vue','Angular'],
//     printlibrary: function(){
//         this.library.forEach(function(a){
//             console.log(`${this.name} Loves ${a}`);
//         })
//     }
// }
// javascript.printlibrary();
var javascript ={
    name: "Javascript",
    library: ['React','vue','Angular'],
    printlibrary: function(){
        this.library.forEach((a) =>console.log(`${this.name} Loves ${a}`));
        }
    
    }       

javascript.printlibrary();