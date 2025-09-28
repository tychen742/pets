//: Playground - noun: a place where people can play

import UIKit

var index = 0
print(index)

while index < 10 {
    print(index)
    index += 1
}

var anArray = [1, 3, 5, 7, 9]
var i = 0
var arrayCount = anArray.count
while i < arrayCount {
    print(anArray[i])
    i += 1
}

for element in anArray {
    print("for loop: \(element)")
}

for (index, element) in anArray.enumerated() {
    //    anArray[index] += 1
    //    print (anArray[index])
    print("\(index) \(element)")
//    print(element)
}

var numArray = [Double] ()
numArray = [ 8, 7, 19, 28]
for (index, value) in numArray.enumerated() {
    print ("\(index) : \(value/2)")
}
