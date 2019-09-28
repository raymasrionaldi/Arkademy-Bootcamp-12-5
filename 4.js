function thirdHighest(array) {
    let newArray = [];
    if(typeof(array) != 'object') return 'Parameter should be an array!';
    if(array.length < 3) return 'Minimal array length is 3!';
    for(let i = 0; i < array.length; i++){
        if(typeof(array[i]) == 'number') newArray.push(array[i]);
    }
    newArray.sort((a, b) => b - a);
    return newArray[2];
}

console.log(thirdHighest([1, 2, 3, 4, 5, 6]));
console.log(thirdHighest('bukan array nih'));
console.log(thirdHighest([1, 2]));
console.log(thirdHighest([107, 1, -4, 'a', 'true', 0, -77]));
