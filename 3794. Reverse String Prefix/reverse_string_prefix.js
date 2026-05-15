let reversePrefix = function(s, k) {
    if ( k > 1)  {

        let str = s.slice(0, k);
        let reversestr = str.split("").reverse().join("");
        s = s.replace(str, reversestr);
    }

    return s;
    
};

console.log(reversePrefix("hey", 1));
 