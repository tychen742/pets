#include <stdio.h>

int main()
{
    printf("##### 1/5. Arithmetic Operators #####\n");
    printf("##### + - * / %% ++ -- #####\n");
    int num1 = 5;
    int num2 = 3;

    int sum = num1 + num2;
    printf("num1 + num2 = %i \n", sum);
    printf("num1 + num2 = %i \n\n", num1 + num2);

    printf("%% - modulus, return the division remainder:\n");
    printf("num1 %% num2 = %i \n\n", num1 % num2);

    printf("-- - increment, increase the value of a variable by 1:\n");
    printf("num1 is %i and num1-- is %i \n", num1, num1--);
    printf("num1 is %i and --num1 is %i \n\n", num1, --num1);

    printf("##### 2/5. Assignment Operators #####\n");
    printf("##### = += -= *= ... #####\n\n");
    
    printf("##### 3/5. Comparison Operators #####\n");
    printf("##### == != > < >= < #####\n");
    
    printf("### boolean #####\n");
    printf("### bool type not a built in #####\n\n");
    printf("need include: #include <stdbool.h>\n");
    #include <stdbool.h>
    printf("is 10 > 9 true? (1: true; 0: false):    %d\n", 10 > 9);
    printf(" 10 > 9 is an expression and will evaluate to true or false\n\n");

    printf("##### 4/5. Logical Operators #####\n");
    printf("##### && || ! #####\n\n");
 
    printf("##### 5/5. Bitwise Operators #####\n");
    printf("##### ... #####\n\n");
}