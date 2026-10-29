export const add = (n1, n2) => {
    if (typeof (n1) == "string" && typeof (n2) == "string")
        console.log("'" + n1 + "' + '" + n2 + "' = " + (n1 + n2));
    else if (typeof (n1) == "string")
        console.log("'" + n1 + "' + " + n2 + " = " + (n1 + n2));
    else if (typeof (n2) == "string")
        console.log(n1 + " + '" + n2 + "' = " + (n1 + n2));
    else
        console.log(n1 + " + " + n2 + " = " + (n1 + n2));
}

export const sub = (n1, n2) => {
    if (typeof (n1) == "string" && typeof (n2) == "string")
        console.log("'" + n1 + "' - '" + n2 + "' = " + (n1 - n2));
    else if (typeof (n1) == "string")
        console.log("'" + n1 + "' - " + n2 + " = " + (n1 - n2));
    else if (typeof (n2) == "string")
        console.log(n1 + " - '" + n2 + "' = " + (n1 - n2));
    else
        console.log(n1 + " - " + n2 + " = " + (n1 - n2));
}

export const mul = (n1, n2) => {
    if (typeof (n1) == "string" && typeof (n2) == "string")
        console.log("'" + n1 + "' * '" + n2 + "' = " + (n1 * n2));
    else if (typeof (n1) == "string")
        console.log("'" + n1 + "' * " + n2 + " = " + (n1 * n2));
    else if (typeof (n2) == "string")
        console.log(n1 + " * '" + n2 + "' = " + (n1 * n2));
    else
        console.log(n1 + " * " + n2 + " = " + (n1 * n2));
}

export const div = (n1, n2) => {
    if (typeof (n1) == "string" && typeof (n2) == "string")
        console.log("'" + n1 + "' / '" + n2 + "' = " + (n1 / n2));
    else if (typeof (n1) == "string")
        console.log("'" + n1 + "' / " + n2 + " = " + (n1 / n2));
    else if (typeof (n2) == "string")
        console.log(n1 + " / '" + n2 + "' = " + (n1 / n2));
    else
        console.log(n1 + " / " + n2 + " = " + (n1 / n2));
}

export const mod = (n1, n2) => {
    if (typeof (n1) == "string" && typeof (n2) == "string")
        console.log("'" + n1 + "' % '" + n2 + "' = " + (n1 % n2));
    else if (typeof (n1) == "string")
        console.log("'" + n1 + "' % " + n2 + " = " + (n1 % n2));
    else if (typeof (n2) == "string")
        console.log(n1 + " % '" + n2 + "' = " + (n1 % n2));
    else
        console.log(n1 + " % " + n2 + " = " + (n1 % n2));
}

add("100", "10");
sub("100", "10");
mul("100", "10");
div("100", "10");
mod("100", "10");