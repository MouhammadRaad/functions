<?php




function generateThreeDigitNumber() {
  return rand(0, 255);
}





$randomNumber = generateThreeDigitNumber() . '.' . generateThreeDigitNumber() . '.' . generateThreeDigitNumber() . '.' . generateThreeDigitNumber();
echo "Random 3-digit number: $randomNumber";










?>