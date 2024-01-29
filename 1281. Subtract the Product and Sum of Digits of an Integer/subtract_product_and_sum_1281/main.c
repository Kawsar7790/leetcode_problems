#include <stdio.h>
#include <stdlib.h>

int main()
{
        int number , product =1 , sum=0, temp, remainder,  subtractProductAndSum;
        scanf("%d", &number);
        temp = number;

        while (temp > 0){
            remainder = temp%10;
            temp = temp/10;
            sum += remainder;
            product = product * remainder;
        }

        subtractProductAndSum = product-sum;

        return subtractProductAndSum;

}
