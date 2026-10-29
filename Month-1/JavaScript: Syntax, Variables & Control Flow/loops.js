let data = [{
    "obj1Key1": "Value1",
    "obj1Key2": "Value2",
    "obj1Key3": "Value3",
    "obj1Key4": "Value4",
    "obj1Key5": "Value5",
    "obj1Key6": "Value6",
},
{
    "obj2Key1": "Value1",
    "obj2Key2": "Value2",
    "obj2Key3": "Value3",
    "obj2Key4": "Value4",
    "obj2Key5": "Value5",
    "obj2Key6": "Value6",
},
{
    "obj3Key1": "Value1",
    "obj3Key2": "Value2",
    "obj3Key3": "Value3",
    "obj3Key4": "Value4",
    "obj3Key5": "Value5",
    "obj3Key6": "Value6",
}
];


console.error("\nNoral for loop...\n");
for (let i = 0; i < data.length; i++) {
    console.log(data[i]);
}


console.error("\n\nforEach loop....\n");
data.forEach(element => {
    console.log(element);
});


console.error("\n\nfor in loop...\n");
for(index in data) {
    console.log(index);
}

console.error("\n\nfor of loop...\n");
for(val of data) {
    console.log(val);
}