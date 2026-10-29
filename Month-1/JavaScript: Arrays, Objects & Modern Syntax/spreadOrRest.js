const arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

const arr2 = [...arr, 11, 12, 13, 14];

console.error(arr2);


const user = {
    name: "Makwana Dainik",
    age: 22,
    role: "Full Stack Developer"
};

const user2 = {
    ...user,
    age: 23,
    address: {
        city: "Ahmedabad",
        state: "Gujarat"
    }
};

console.log(user2);



console.log("\n\n\nRest Operator...\n");
function sum(...numbers) {
    let sum = 0;
    for (num of numbers) {
        sum += num;
    }

    return sum;
}

console.log(sum(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14));