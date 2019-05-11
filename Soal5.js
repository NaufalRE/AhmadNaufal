//Pake fungsi Math ya O(∩_∩)O
var arr1 = [
    [10,6, 3], [9,11, 0], [2,5, 4], [1,7, 8], [40, 3, 0]
];
var maxRow = arr1.map(function(row){ return Math.max.apply(Math, row); });
console.log(maxRow);