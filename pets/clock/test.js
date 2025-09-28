

for (var i = 0; i < 5; i++) {
    var btn = document.createElement('button');
    btn.appendChild(document.createTextNode('Button ' + i));
    btn.addEventListener('click', function(){ console.log(i); });
    document.body.appendChild(btn);
  }
  

// let summed = 0;
// function sum (x){
//     if (arguments.length == 2) {
//         return arguments[0] + arguments[1]
//     } else {
//         return function(y) {return x + y}
//     }

//         // for (i=0; i < arguments.length; i++){
//         //     summed += arguments[i]; 
//         // }
//         // return summed;
//     }

// console.log(sum(3) (5))
// console.log(sum(3, 5))



// function findPalindrome(str){
//     let reg = /[^A-Za-z0-9]/g
//     strCleaned =str.replace(reg, '').toLowerCase()
//     console.log(strCleaned, strCleaned.length)

//     let strReversed = strCleaned.split('').reverse().join('')
//     console.log(strReversed, strReversed.length)
//     return (strCleaned == strReversed)
// }

// console.log(findPalindrome("race %%car"))