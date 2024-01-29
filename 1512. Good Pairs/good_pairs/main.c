#include <stdio.h>
#include <stdlib.h>

int main()
{
    /*
    int numsSize, i, j, numIdenticalPairs = 0;
    scanf("%d",&numsSize);

    int nums[numsSize];

    for (i = 0 ; i < numsSize ; i++){
        scanf("%d", &nums[i]);

    }

    for (i = 0 ; i < numsSize ; i++)
        {
            for (j = i+1 ; j < numsSize ; j++){

                if( nums[i] == nums[j]){
                        numIdenticalPairs += 1;
                }

            }

    }

    printf("%d", numIdenticalPairs );

    */

    int i, j, pairs = 0;

    for (i = 0 ; i < numsSize ; i++)
        {
            for (j = i+1 ; j < numsSize ; j++){

                if( nums[i] == nums[j]){
                        pairs += 1;
                }

            }

    }

    return pairs;


}








