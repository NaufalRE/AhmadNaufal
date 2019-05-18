function sort_array(data){
	let result = [];
	let temp = "";
	for(let i = 0; i < data.length; i++){
		temp = data[i].sort();
		temp = data[i][(data[i].length - 1)];
		result.push(temp);
	}
	return result;
}
let data = [["c", "r", "f", "q","p","n"],["s","f","a","x","z"],["a","p","b","t"]];
console.log(sort_array(data));