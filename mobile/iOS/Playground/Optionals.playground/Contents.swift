import UIKit

var number: Int?

print(number!)

let userEnteredText = "three"
let userEnteredText2 = Int(userEnteredText)

if let catAge = userEnteredText2 {
    print (catAge * 7)
} else {
    // error message
}
