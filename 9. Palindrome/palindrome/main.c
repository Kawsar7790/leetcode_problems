#include <stdio.h>
#include <stdlib.h>

int main()
{
    int number, sum=0, remainder, temp;

    scanf("%d",&number);

    temp=number;

    while(temp > 0){
        remainder = temp %10;
        sum = (sum*10)+remainder;
        temp = temp/10;
    }

    printf("%d\n",sum);

    if ( sum == number){
        printf("Palindrome");
    }
    else {
        printf("Not Palindrome");
    }


}

/*
    int sum=0, remainder, temp;
    temp=number;

    while(temp > 0){
        remainder = temp%10;
        sum = (sum*10)+remainder;
        temp = temp/10;
    }

    if ( number == sum){
        return true;
    }
    else{
        return false;
    }
*/
