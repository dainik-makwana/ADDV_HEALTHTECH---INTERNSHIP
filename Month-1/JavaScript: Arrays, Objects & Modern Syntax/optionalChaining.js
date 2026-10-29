const user = {
    name: "Makwana Dainik",
    age: 22,
    role: "Full Stack Developer",
    address: {
        address2: {
            area: "Chandkheda",
            city: "Gandhinagar",
            state: "Gujarat"
        }
    }
};

console.log("State:  ", user?.address?.address2?.state);