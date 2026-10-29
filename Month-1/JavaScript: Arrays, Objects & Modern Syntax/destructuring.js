const colors = ["Red", "Green", "Blue", "Yellow"];

// IF the value on the index is undefined then onl default value will be assigned 
const [first, second, third, fourth = "Pink", fifth = "Black"] = colors;

console.log(first);
console.log(second);
console.log(third);
console.log(fourth);
console.log(fifth);


const user = {
    name: "Makwana Dainik",
    age: 22,
    address: {
        city: "Ahmedabad",
        state: "Gujarat"
    }
};

const { name: userName, age, address: { city = "Gandhinagar", state }, role = "Full Stack Developer" } = user;

console.log("\n\n" + userName);
console.log(age);
console.log(city);
console.log(role);