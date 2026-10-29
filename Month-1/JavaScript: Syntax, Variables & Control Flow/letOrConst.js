let global = "Global let Variable";
const constVar = "Global Constant Variable"

function func() {
    let local = "Local let Variable inside func() function";

    console.log("\nInside Function Global Var::  " + global + " & Local Var::  " + local);


    console.log("\n\nInside function call...");
    console.log("\nBefore updating const variable: ", constVar);

    // This line will give TypeError: Assignment to constant variable.
    // constVar = "Global Constant Variable updated";
    // console.log("\nAfter updating const variable: ", constVar);
}

func();

// This is line will give ReferenceError: local is not defined
// console.log("\n\nOutside Function Global Var::  "+global+" & Local Var::  "+local);

console.log("\n\\nOutside function call...");
console.log("\nBefore updating const variable: ", constVar);

// This line also will give TypeError: Assignment to constant variable.
// constVar = "Global Constant Variable updated";
// console.log("\nAfter updating const variable: ", constVar);