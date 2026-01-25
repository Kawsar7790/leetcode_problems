var maxDistinct = function(s) {
    const uniquechars = new Set ([...s]);
    return uniquechars.size;
};

const firstunique = maxDistinct("abcd");
console.log(firstunique);
