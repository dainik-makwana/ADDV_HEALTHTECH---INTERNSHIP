async function getData() {
    const res = await fetch('https://dummyjson.com/products');
    const json = await res.json();
    const data = json.products;


    console.log("\n\nmap Method...\n");
    data.map((ele, ind) => {
        console.log(ind + ") " + (ele.title));
    });


    console.log("\n\nfilter Method...\n");
    let available = data.filter((ele) => ele.stock > 30);
    available.map((ele, ind) => {
        console.log(ind + ") " + (ele.title) + "\n    Stock: " + (ele.stock));
    });


    console.log("\n\nCount total value of all the products (reduce Method)...\n");
    const total = data.reduce((accum, curr) => accum + ((curr.price) * (curr.stock)), 0);
    console.log("Total valuation of all the products with available stock:  Rs." + total);
}

getData();