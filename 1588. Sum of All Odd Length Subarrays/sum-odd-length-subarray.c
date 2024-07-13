

int sumOddLengthSubarrays(int* arr, int arrSize){
    int range = 1,sum = 0;
    
    while( range <= arrSize) {
        for ( int k = 0 ; k < arrSize ; k++ ) {
            if (range+k <= arrSize ){
                for (int j = k; j < range+k ; j++) {
                    sum += arr[j];
                }
            }
        }
        range +=2;
    }

return sum;

}