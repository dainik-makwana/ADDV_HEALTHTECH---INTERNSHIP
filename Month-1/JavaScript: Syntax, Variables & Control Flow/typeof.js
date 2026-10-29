let v1 = 10;
let v2 = 10.10;
let v3 = 'A';
let v4 = "Dainik";
let v5 = true;
let v6 = new Set([1, 2, 3, 1, 2, 3]);
let v7 = [1, 2, 3, 4];
let v8 = {
    key1: "Value1",
    key2: "Value2"
};
let v9 = {
    "key1": "Value1",
    "key2": "Value2"
};

console.log("\n\n\n--------- Type of Variables ------------\n");
console.log("Type of Integer::  ", typeof v1);
console.log("Type of Float::  ", typeof v2);
console.log("Type of Character::  ", typeof v3);
console.log("Type of String::  ", typeof v4);
console.log("Type of Boolean::  ", typeof v5);
console.log("Type of Set::  ", typeof v6);
console.log("Type of Array::  ", typeof v7);
console.log("Type of Object::  ", typeof v8);
console.log("Type of JSON::  ", typeof v9);