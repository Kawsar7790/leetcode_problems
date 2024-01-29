#include <stdio.h>
#include <stdlib.h>

int main()
{
        int num , temp , numberOfSteps=0;
        scanf("%d",&num);
        temp = num;
        while ( temp>0){
            if( temp%2 == 0 ){
                temp = temp/2;
                numberOfSteps+=1;
            }
            else {
                temp = temp -1;
                numberOfSteps +=1;
            }
        }

        return numberOfSteps;
}
